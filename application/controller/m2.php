<?php

session_start();



class m2 extends Controller
{
    public function index()
    {
        
        //$rental_units = $this->model->emptySet();
        
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/m2/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function search()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_search"])) {
            // do addSong() in model/model.php
            $this->model->searchDB($_POST["search_value"]);
        }
        $rental_units = $this->model->searchDB($_POST["search_value"]);
        // where to go after song has been added
        //header('location: ' . URL . 'm2/index');
        
        //$rental_units = $this->model->emptySet();
        
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/m2/index.php';
        require APP . 'view/m2/db.php';
        require APP . 'view/_templates/footer.php';
        
    }
}
















