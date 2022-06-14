<?php

namespace Chungu\Models;

class Product extends Model {

    public $category;

    /**
     * Class constructor.
     */
    public function __construct() {
        $this->category = $this->categories();
    }

    public function categories() {
        return  Category::where(['name'], ['id', $this->category_id])[0]->name;
    }
}
