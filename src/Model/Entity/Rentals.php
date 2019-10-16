<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Test\Collection\Collection;

class Rentals extends Entity {
    protected $_accessible = [
        'rental_id' => true,
        'title' => true,
        'slug' => false,
        'date_rental' => true,
        'date_return' => true,
        'amount_fine' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'categories' => true,
        'files' => true
    ];

    protected function _getCategorieString()
    {
        if (isset($this->_properties['category_string'])) {
            return $this->_properties['category_string'];
        }
        if (empty($this->categories)) {
            return '';
        }
        $categories = new Collection($this->categories);
        $str = $categories->reduce(function ($string, $category) {
            return $string . $category->name . ', ';
        }, '');
        return trim($str, ', ');
    }
}


