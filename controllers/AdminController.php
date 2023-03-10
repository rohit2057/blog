<?php

use LDAP\Result;
require_once "modal/Admin.php";

class AdminController
{
    private $adminobj;

    
    function __construct()
    {

        // include 'modal/Admin.php';
        $this->adminobj = new Admin();
    }
    public function Index()
    {
        $result = $this->ListBlogs();
        require_once "views/Admin/Index.php";
    }

    public function Blog()
    {   
       require_once "views/Admin/Blog.php";
    }

    public function NewBlog()
    {
        $this->adminobj->setTitle($_POST['title']);
        $this->adminobj->setDescription($_POST['description']);
        $this->adminobj->setWriter($_POST['writer']);
    
        $post_image=$_FILES['image']['name'];
        $post_temp_image=$_FILES['image']['tmp_name'];
        move_uploaded_file("{$post_temp_image}", "libraries/images/{$post_image}");
        $this->adminobj->setImage($post_image);
        $result = $this->adminobj->AddBlog();
        if ($result == TRUE) {
            echo "<script> alert ('inserted Successfully!'); 
            window.location.href='http://localhost/cc/Admin/Index';
            </script>";
        } else {
            echo "<script> alert ('Failed to Insert!'); 
			            history.go(-1)
			           </script>";
        }
    }

    public function ListBlogs()
    {

        $result = $this->adminobj->GetBlog();
        return $result;
    }

    public function DeleteBlog()
    {

        $bid = $_GET["bid"];
        $this->adminobj->bid = $bid;

        $result = $this->adminobj->BlogDelete();
        if ($result == TRUE) {
            echo "<script> alert ('Updated Successfully!'); 
            window.location.href='http://localhost/cc/Admin/Index';
            </script>";
        } else {
            echo "<script> alert ('Failed to Delete!'); 
            history.go(-1)
            </script>";
        }
    }

    public function UpdateBlog()
    {

        $bid = $_GET["bid"] ?? "";
        $this->adminobj->bid = $bid;
        $result = $this->adminobj->GetBlog();
        require_once('views/Admin/Index.php');


    }

  
     public function Bupdate()
    {
        $this->adminobj->bid =  $_POST["bid"];
        $this->adminobj->title = $_POST["title"];
        $this->adminobj->description = $_POST["description"];
        $this->adminobj->writer = $_POST["writer"];
        $result = $this->adminobj->UpdateBlog();
        if ($result == TRUE) {
            echo "<script> alert ('Updated Successfully!'); 
               window.location.href='http://localhost/cc/Admin/Index';
               </script>";
        } else {
            echo "<script> alert ('Failed to Update!'); 
                
                     </script>";
        }
    }

    public function Message(){
        require_once "views/Admin/Message.php";
    }

}
