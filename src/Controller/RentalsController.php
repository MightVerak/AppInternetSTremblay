<?php

namespace App\Controller;
use Cake\ORM\Query;


class RentalsController extends AppController {

    public function initialize() {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Inclusion du FlashComponent
    }

    public function index() {
        $rentals = $this->Paginator->paginate($this->Rentals->find());
        $this->set(compact('rentals'));
    }

    public function view($slug = null) {
        $rental = $this->Rentals->findBySlug($slug)->fisrtorFail();
        $this->set(compact('rental'));
    }

    public function add() {
        $rental = $this->Rentals->newEntity();
        if ($this->request->is('post')) {
            $rental = $this->Rentals->patchEntity($rental, $this->request->getData());

            $rental->user_id = $this->Auth->user('id');

            if ($this->Rentals->save($rental)) {
                $this->Flash->success(__('Votre location a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible d\'ajouter votre location.'));
        }
        $categories = $this->Rentals->Categories->find('');

        $this->set('category', $categories);

        $this->set('rental', $rental);
    }

    public function edit($slug) {
        $rentals = $this->Rentals
            ->findBySlug($slug)
            ->contain('Categories') // charge les Tags associés
            ->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Rentals->patchEntity($rentals, $this->request->getData(), [
                'accessibleFields' => ['user_id' => false]
            ]);

            if ($this->Articles->save($rentals)) {
                $this->Flash->success(__('Votre location a été modifiée.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de mettre à jour votre location.'));
        }

        // Récupère une liste des tags.
        $categories = $this->Rentals->Categories->find('');

        // Passe les tags au context de la view
        $this->set('categories', $categories);

        $this->set('rental', $rentals);
    }

    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $rental = $this->Rentals->findBySlug($slug)->firstOrFail();
        if ($this->Rentals->delete($rental)) {
            $this->Flash->success(__('La location {0} a été supprimé.', $rental->title));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function categories()
    {
        // La clé 'pass' est fournie par CakePHP et contient tous les
        // segments d'URL passés dans la requête
        $categories = $this->request->getParam('pass');

        // Utilisation de ArticlesTable pour trouver les articles taggés
        $rentals = $this->Rentals->find('categories', [
            'categories' => $categories
        ]);

        // Passage des variable dans le contexte de la view du template
        $this->set([
            'rentals' => $rentals,
            'categories' => $categories
        ]);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
        // authentifiés sur l'application
        if (in_array($action, ['add', 'categories'])) {
            return true;
        }

        // Toutes les autres actions nécessitent un slug
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }

        // On vérifie que l'article appartient à l'utilisateur connecté
        $rental = $this->Rentals->findBySlug($slug)->first();

        return $rental->user_id === $user['id'];
    }
}
