<?php

class UserController
{

    private $userobj;
    function __construct()
    {
        require_once "modal/User.php";
        $this->userobj = new User;
    }

    function UserRegistration()
    {
        $this->userobj->uname = $_POST['uname'];
        $this->userobj->uemail = $_POST['uemail'];
        $this->userobj->upassword = $_POST['upassword'];
        $this->userobj->uphone = $_POST['uphone'];


        $result = $this->userobj->UserRegistraionCheck();
        $result = $this->userobj->RegisterUser();
        if ($result == TRUE) {
            echo "<script> alert ('SignUp Successfully!'); 
            history.go(-2)
           </script>";
        } else {
            echo "<script> alert ('Failed to SignUp!'); 
            history.go(-1)
           </script>";
        }
    }
}
