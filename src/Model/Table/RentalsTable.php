<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
use Cake\ORM\Query;

class RentalsTable extends Table {
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->setTable('rentals');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongTo('Users', ['foreignKey' => 'user_id', 'joinType' =>'INNER']);

        $this->belongstoMany('Files', ['foreignKey' => 'rentals_id', 'targetForeignKey' => 'file_id', 'joinTable' => 'rentals_files']);
    }

    public function beforeSave($event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);
            // On ne garde que le nombre de caractère correspondant à la longueur
            // maximum définie dans notre schéma
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }

    public function findTagged(Query $query, array $options)
    {
        $columns = [
            'Rentals.id', 'Rentals.user_id', 'Rentals.title', 'Rentals.created',
            'Rentals.slug',
        ];

        $query = $query
            ->select($columns)
            ->distinct($columns);

        if (empty($options['categories'])) {
            // si aucun tag n'est fourni, trouvons les articles qui n'ont pas de tags
            $query->leftJoinWith('Categories')
                ->where(['Categories.name IS' => null]);
        } else {
            // Trouvons les articles qui ont au moins un des tags fourni
            $query->innerJoinWith('Categories')
                ->where(['Categories.name IN' => $options['categories']]);
        }

        return $query->group(['Rentals.id']);
    }

    protected function _buildCategories($categoryString) {
        // Trim des tags
        $newCategories = array_map('trim', explode(',', $categoryString));
        // Retire les tags vides
        $newCategories = array_filter($newCategories);
        // Dé-doublonne les tags
        $newCategories = array_unique($newCategories);

        $out = [];
        $query = $this->Categories->find()
            ->where(['Categories.name IN' => $newCategories]);

        // Retire les tags existant de la liste des nouveaux tags.
        foreach ($query->extract('') as $existing) {
            $index = array_search($existing, $newCategories);
            if ($index !== false) {
                unset($newCategories[$index]);
            }
        }
        // Ajout des tags existant.
        foreach ($query as $category) {
            $out[] = $category;
        }
        // Ajout des nouveaux tags.
        foreach ($newCategories as $category) {
            $out[] = $this->Categories->newEntity(['name' => $category]);
        }
        return $out;
    }
}
