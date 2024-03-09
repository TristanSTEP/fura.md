<?php
require_once 'Product.php';

class ProductController
{
    private $productModel;

    public function __construct($conn)
    {
        $this->productModel = new Product($conn);
    }

    public function profile()
    {
        $products = $this->productModel->getAllProducts();
        include 'profile.php';
    }

    public function show($id)
    {
        $product = $this->productModel->getProductById($id);
        return $product;
    }

    public function store($data)
    {
        $this->productModel->addProduct($data['name'], $data['lastname'], $data['email'], $data['password'], $data['phone'], $data['image']);
        Header("Location: users-list.php");
    }

    public function update($id, $data)
    {
        $this->productModel->updateProduct($id, $data['name'], $data['lastname'], $data['email'], $data['password'], $data['phone'], $data['image']);
        Header("Location: users-list.php");
    }

    public function destroy($id)
    {
        $this->productModel->deleteProduct($id);
        Header("Location: users-list.php");
    }
}