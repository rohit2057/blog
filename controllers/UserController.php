<?php
  require_once "modal/User.php";

class UserController
{

    private $userobj;
    function __construct()
    {
      
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

    function LoginCheck()
    {


        if (isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (empty($username) || empty($password)) {
                echo  "<script> alert ('Username or Password Empty!'); 
                          location='Login';
                        </script>";
            } else {

                $this->userobj->username = $username;
                $this->userobj->password = $password;


                $result = $this->userobj->CheckUsers();
                
                if ($result != 0) {
                    while ($row = $result->fetch_assoc()) {
                        $_SESSION['user_id'] = $row['uid'];
                        header('Location: Dashboard/Index');
                    }
                } else {
                    echo "<script> alert ('Login Failed!'); 
              location='Login';
              </script>";
                }
            }
        }
    }
}
