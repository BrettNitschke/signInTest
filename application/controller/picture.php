<?php

session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class picture extends Controller
{
    public function pic()
    {
        
        
        
         if (!isset($_SESSION["user_id"])) {
            $message = "You must be signed in to upload pictures!";
            require APP . 'view/_templates/header.php';
            require APP . 'view/users/message.php';
            require APP . 'view/users/signin.php';
            require APP . 'view/_templates/footer.php';
         } else {
            require APP . 'view/_templates/header.php';
            require APP . 'view/picTest/pic.php';
            require APP . 'view/_templates/footer.php';
         }
    }
    
     public function imageGallery()
    {
        
        $images = $this->model->getAllImages();
        
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/picTest/imageGallery.php';
        require APP . 'view/_templates/footer.php';
    }
    
    
    public function addImage()
    {
        if (isset($_POST['submit_add_image'])){
            
            $file = $_FILES["image"]["tmp_name"];
            
            $image = null; //image null by default
            
            if ($file != null && getimagesize($file)){
                // resizeImage function located in core/controller.php file
                parent::resizeImage($file);
                $image = file_get_contents($file);
            }
            
            //sends to addImage function in model.php
            $this->model->addImage($image);
            
            header('location: '. URL . 'picture/pic');
        }
        
        else {
            header('location: '. URL . 'picture/pic');
        }
    }
}













