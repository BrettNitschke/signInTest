<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function Bnitschk()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/Bnitschk.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: Kunal Tambekar's Page
     * This method handles what happens when you move to http://yourproject/home/ktambeka
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function ktambeka()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/ktambeka.php';
        require APP . 'view/_templates/footer.php';
    }
    

    /**
     * PAGE: jconcep2
     * This method handles what happens when you move to http://yourproject/home/jconcep2
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function jconcep2()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/jconcep2.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: CDea
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function CDea()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/Cdea.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: mcdavid
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function mcdavid()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/mcdavid.php';
        require APP . 'view/_templates/footer.php';
    }
    
    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function Nmazumda()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/Nmazumda.php';
        require APP . 'view/_templates/footer.php';
    }

    
}