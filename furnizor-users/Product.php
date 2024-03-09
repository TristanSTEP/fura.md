<?php

class Product
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;

    }
    public function getAllProducts()
    {
        $query = "SELECT * FROM furnizor_users";
        $result = $this->conn->query($query); //  Prin variabila de result primim inapoi toate produsele.
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($id) {
        $query = "SELECT * FROM furnizor_users WHERE id = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
    
    public function addProduct($name, $lastname, $email, $password, $phone, $image) {
        $query = "INSERT INTO furnizor_users (name, lastname, email, password, phone, image) VALUES ('$name', '$lastname', '$email', '$password', '$phone', '$image')";
        return $this->conn->query($query); 
        //  Metoda de inserare a informatiei
    }

    public function updateProduct($id, $name, $lastname, $email, $password, $phone, $image) {
        $query = "UPDATE furnizor_users SET NAME = '$name', lastname = '$lastname', email = '$email', password = '$password', phone = '$phone' , image = '$image' WHERE id = '$id'";
        return $this->conn->query($query);
    }

    public function deleteProduct($id) {
        $query = "DELETE FROM furnizor_users WHERE id = '$id'";
        return $this->conn->query($query);
    }
}