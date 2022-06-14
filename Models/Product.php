<?php

namespace Chungu\Models;

class Product extends Model {

    public $category;

    public function __construct() {
        $this->category = $this->categories();
    }

    public function categories() {

        $category = Category::where(['name'], ['id', $this->category_id]);

        if (is_null($category )) {
            return "Demo";
        }else{
            return $category[0]->name;
        }
        
        
    }
}
