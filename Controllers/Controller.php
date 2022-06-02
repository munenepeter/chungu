<?php

namespace Chungu\Controllers;

use Chungu\Models\Category;
use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Paginator;

class Controller {

    public Request $request;

    public function __construct() {
        $this->request = new Request;
    }
    public function upload(array $file, string $location, int $max_size, array $mime_types) {
        return $this->request->upload($file, $location, $max_size, $mime_types);
    }
    public function paginate(array $data, $per_page) {
        return Paginator::paginate($data, $per_page);
    }
    public function category_id($category) {
        $category = Category::where(['id'], ['name', $category]);
        return $category[0]->id;
    }
}
