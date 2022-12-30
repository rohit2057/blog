<?php

use LDAP\Result;
    
    class AdminController
    {
        private $adminobj;
        function __construct(){

            include 'modal/Admin.php';
            $this->adminobj = new Admin();
        }
        public function Index(){
            require_once "views/Admin/Index.php";
        }

        public function Blog(){
            require_once "views/Admin/Blog.php";
        }

        public function NewBlog()
        {
            $this->adminobj->setTitle($_POST['title']);
            $this->adminobj->setDescription($_POST['description']);
            $this->adminobj->setWriter($_POST['writer']);
            
            $result = $this->adminobj->AddBlog();
            if ($result == TRUE) {
                echo "<script> alert ('Inserted Successfully!'); 
			            history.go(-1)
			           </script>";
            } else {
                echo "<script> alert ('Failed to Insert!'); 
			            history.go(-1)
			           </script>";
            }
        }

       public function ListBlogs()
        {
            // $admins = $this->model->getAdmin();
            $result = $this->adminobj->GetBlog();
            
            include 'views/Admin/Index.php';
            var_dump($result);
        }

        public function DeleteBlog()
        {
           
            $id = $_GET["id"];
            $this->movieobj->mid = $id;

           $result = $this->adminobj->BlogDelete();
            if ($result == TRUE) {
                echo "<script> alert ('Deleted Successfully!'); 
                history.go(-1)
                </script>";
            } else {
                echo "<script> alert ('Failed to Delete!'); 
                history.go(-1)
                </script>";
            }
            }

    }


    ?>