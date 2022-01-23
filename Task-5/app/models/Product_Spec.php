<?php
require __DIR__ . "\..\DataBase\config.php";
require __DIR__ . "\..\DataBase\operation.php";
class Product_Spec extends config implements operations
{
    private $product_id;
    /**
     * Get the value of product_id
     */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     *
     * @return  self
     */
    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;

        return $this;
    }
    private $spec_id;
    /**
     * Get the value of spec_id	

     */
    public function getSpec_id()
    {
        return $this->spec_id;
    }

    /**
     * Set the value of spec_id	

     *
     * @return  self
     */
    public function setSpec_id(
        $spec_id
    ) {
        $this->spec_id = $spec_id;

        return $this;
    }
    public function create()
    {
    }
    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
