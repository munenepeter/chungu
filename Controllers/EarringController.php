<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Upload;

class EarringController {
    public function index() {
        return view('addearrings.view.php');
    }
    //addearring
    public function addearrings() {
        $uploadlocation = '/static/imgs/earrings';

        if (!empty($_FILES['image'])) {

            $upload = Upload::factory($uploadlocation);

            $upload->file($_FILES['image']);

            //set max. file size (in mb)
            $upload->set_max_file_size(10);

            //set allowed mime types
            $upload->set_allowed_mime_types(['image/jpeg', 'image/png']);

            $results = $upload->upload();
            echo '<pre>';
            var_dump($results['path']);
        }
    }
}
