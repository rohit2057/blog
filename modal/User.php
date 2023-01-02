<?php
require_once 'services/Config.php';
class User
{
    private $conn;
    public $uname;
    public $uemail;
    public $upassword;
    public $uphone;
    public $username;
    public $password;

    public function __construct()
    {
        $conn = new Config();
        $this->conn = $conn->getConnection();
    }

    public function UserRegistraionCheck()
    {
        $nameCheck = false;
        $mailCheck = false;
        $phoneCheck = false;
        $passwordCheck = false;


        if (!empty($this->uname)) {
            $nameCheck = true;
        }
        if (!empty($this->uemail)) {
            $mailCheck = true;
        }


        if (!empty($this->uphone) && strlen($this->uphone) == 10) {
            $phoneCheck = true;
        }
        if (!empty($this->upassword)) {
            $passwordCheck = true;
        }


        if ($nameCheck && $mailCheck &&  $phoneCheck && $passwordCheck) {
            return true;
        } else {
            return false;
        }
    }

    public function RegisterUser()
    {

        $sql = "INSERT INTO users(uname,uemail,uphone,upassword)
        VALUES('$this->uname','$this->uemail','$this->uphone','$this->upassword')";
        $result = $this->conn->query($sql);
        return $result;
    }

    function CheckUsers(){
      
        $sql="SELECT * FROM users WHERE uemail='$this->username' AND upassword='$this->password'";
        $result=$this->conn->query($sql);
        if($result->num_rows > 0){
        return $result;
        }else
        {
            return 0;
        }

	}
}
?>