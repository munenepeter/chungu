<?php

namespace Chungu\Controllers;

class EarringController {
    public function index() {
        return view('addearrings.view.php');
    }
    //addearring
    public function addearrings() {

        if (!empty($_FILES['test'])) {

            $upload = Upload::factory('important/files');
            $upload->file($_FILES['test']);

            //set max. file size (in mb)
            $upload->set_max_file_size(1);

            //set allowed mime types
            $upload->set_allowed_mime_types(array('application/pdf'));

            $results = $upload->upload();

            dd($results);
        }
      
    }
}
