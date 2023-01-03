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
        
        public function NewContact()
        {
            $this->dashobj->setName($_POST['cname']);
            $this->dashobj->setPhone($_POST['cphone']);
            $this->dashobj->setEmail($_POST['cemail']);
            $this->dashobj->setMessage($_POST['cmessage']);

            $result = $this->dashobj->AddContact();

            if ($result == TRUE) {
                echo "<script> alert ('Message sent successfully Successfully!'); 
                window.location.href='http://localhost/cc/Dashboard/Contact';
                </script>";
            } else {
                echo "<script> alert ('Failed to Insert!'); 
                            history.go(-1)
                           </script>";
            }

        }

    }

?>