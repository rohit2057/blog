<?php

    require_once "modal/Admin.php";

    class DashboardController
    {

        private $dashobj;
        public $result;
        public $bid;
        
        function __construct()
        {
    
            $this->dashobj = new Admin();
        }

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
            $result = $this->ListBlogs();
            require_once "views/Dashboard/Blog.php";
        }

        public function ViewBlog(){

            $bid= $_GET['bid'];
            $this->result = $this->dashobj->GetBlogDetails($bid);
           
            require_once "views/Dashboard/ViewBlog.php";
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

        public function ListBlogs()
        {
    
            $result = $this->dashobj->GetBlog();
            return $result;
        }


    }

?>