<?php

    class DashboardController
    {


        public function Index(){
                 require_once "views/Dashboard/Index.php";
        }

        public function About(){
            require_once "views/Dashboard/About.php";
        }

        public function Services(){
            require_once "views/Dashboard/Services.php";
        }

        public function Blog(){
            require_once "views/Dashboard/Blog.php";
        }

        public function Contact(){
            require_once "views/Dashboard/Contact.php";
        }

        public function Login(){
            require_once "views/Dashboard/Login.php";
        }

        public function Register(){
            require_once "views/Dashboard/Register.php";
        }



    }

?>