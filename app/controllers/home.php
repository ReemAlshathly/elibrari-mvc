<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
       
    }

    function index(){

       $this->view("html/index");

    }
    function basket(){

        $this->view("html/basket");
 
     }
     function catogry(){

        $this->view("html/catogry");
 
     }
     function buy(){

        $this->view("html/buy");
 
     }
     function detials(){

        $this->view("html/detials");
 
     }

}
?>