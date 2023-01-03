<?php
require_once 'services/Config.php';
class Admin
{

    private $conn;
    public $bid;
    public $title;
    public $writer;
    public $description;
    public $image;
    public $name;
    public $email;
    public $message;
    public $phone;



    public function __construct()
    {
        $conn = new Config();
        $this->conn = $conn->getConnection();
    }

    public function GetBlog()
    {
        $sql = "SELECT * FROM blogs ORDER BY bid DESC";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function GetBlogDetails($bid)
    {
      $sql= "SELECT * FROM blogs WHERE bid='{$bid}'";

      $result= $this->conn->query($sql);
      if($result->num_rows > 0){
        return $result;
       
      }
    }
    

    public function BlogDelete()
    {
        $sql = "DELETE FROM blogs WHERE bid='$this->bid'";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function UpdateBlog()
    {
        $sql = "UPDATE blogs SET title='$this->title', description='$this->description', writer='$this->writer' WHERE bid='$this->bid'";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    
    public function AddBlog()
    {
        $sql = "INSERT INTO blogs(title,writer,description,image)
        VALUES('$this->title', '$this->writer', '$this->description','$this->image')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getConn() {
      return $this->conn;
    }
    public function setConn($value) {
      $this->conn = $value;
    }

    public function getTitle() {
      return $this->title;
    }
    public function setTitle($value) {
      $this->title = $value;
    }

    public function getWriter() {
      return $this->writer;
    }
    public function setWriter($value) {
      $this->writer = $value;
    }

    public function getDescription() {
      return $this->description;
    }
    public function setDescription($value) {
      $this->description = $value;
    }

    public function getImage() {
      return $this->image;
    }
    public function setImage($value) {
      $this->image = $value;
    }

    public function AddContact()
    {
        $sql = "INSERT INTO contact(cname,cphone,cemail,cmessage)
        VALUES('$this->name', '$this->phone', '$this->email','$this->message')";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getName(){
      return $this->name;
    }

    public function setName($value){
      $this->name = $value;
    }

    public function getPhone(){
      return $this->phone;
    }

    public function setPhone($value){
      $this->phone = $value;
    }

    public function getEmail(){
      return $this->email;
    }

    public function setEmail($value){
      $this->email = $value;
    }

    public function getMessage(){
      return $this->name;
    }

    public function setMessage($value){
      $this->message = $value;
    }

}
