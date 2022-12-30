<?php
require_once 'services/Config.php';
class Admin
{

    private $conn;
    private $title;
    private $writer;
    private $description;


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
    

    public function BlogDelete()
    {
        $sql = "DELETE FROM blogs WHERE bid='$this->bid'";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    public function AddBlog()
    {
        $sql = "INSERT INTO blogs(title,writer,description)
        VALUES('$this->title', '$this->writer', '$this->description')";
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

}
