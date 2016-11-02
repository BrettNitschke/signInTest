<?php


session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user extends Controller {
    
    
    public function signup()
    {
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/users/signup.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function signin()
    {
       
        require APP . 'view/_templates/header.php';
        require APP . 'view/users/signin.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function addNewUser()
    {
        if (isset($_POST['submit_add_user'])){ //form button is pressed
            
            
            //checks to see if username is taken, userExists function in model.php
            //message.php is blank generic page that echos $message variable
            if ($this->model->userExists($_POST['username']) == true) {
                $message = "Username taken!"; 
                require APP . 'view/_templates/header.php';
                require APP . 'view/users/message.php';
                require APP . 'view/users/signup.php';
                require APP . 'view/_templates/footer.php';
                return;
            }
            
            //php library hash function
            $pass_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            
            
            //sends to addUser function in model.php
            $this->model->addUser($_POST["username"],
                        $_POST["email"], $pass_hash);
            
            
            
            //after signup complete, redirects to sign in page
            header('location: '. URL . 'user/signin');
        }
        
        else {
            header('location: '. URL . 'user/signup');
        }
    }
    
    public function signInUser(){
        
        if (!empty($_POST)){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            //verifyCredentials function in model.php checks hashed pass against user pass
            $verifyCredentials = $this->model->verifyCredentials($username, $password);
            
            if($verifyCredentials == false) {
                $message = "Incorrect username or password!";
                require APP . 'view/_templates/header.php';
                require APP . 'view/users/message.php';
                require APP . 'view/users/signin.php';
                require APP . 'view/_templates/footer.php';
            } else {
                //set session variables to user info from database
                //this is where we will set the session variable isStudent on our project
                $user = $this->model->getUserFromUsername($username);
                $_SESSION['user_id'] = $user->id;
                $_SESSION['username'] = $user->username;
                $_SESSION['email'] = $user->email;
                
                $message = "You are Signed In $user->username";
                require APP . 'view/_templates/header.php';
                require APP . 'view/users/message.php';
                require APP . 'view/_templates/footer.php';
            }
        }
        
        
    }
    
    
    public function signOut()
    {
        // unset session variables
        $_SESSION = array();
        
        // delete session cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        
        session_destroy();
        
        // redirect to homepage when sign out complete
        //header('location: ' . URL . 'home/index');
        $message = "You are Signed Out";
                require APP . 'view/_templates/header.php';
                require APP . 'view/users/message.php';
                require APP . 'view/_templates/footer.php';
    }
    
    
    
    
    
    
}





