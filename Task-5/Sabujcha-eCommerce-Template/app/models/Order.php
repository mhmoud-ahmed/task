<?php
require __DIR__ . "\..\DataBase\config.php";
require __DIR__ . "\..\DataBase\operation.php";
class Order extends config implements operations
{


    private $id;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    private $payment_method;

    /**
     * Get the value of payment_method
     */
    public function getPayment_method()
    {
        return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     *
     * @return  self
     */
    public function setPayment_method($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }
    private $total;

    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
    private $price;

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
    private $status;

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    private $addres_id;

    /**
     * Get the value of addres_id
     */
    public function getAddres_id()
    {
        return $this->addres_id;
    }

    /**
     * Set the value of addres_id
     *
     * @return  self
     */
    public function setAddres_id($addres_id)
    {
        $this->addres_id = $addres_id;

        return $this;
    }
    private $coupon_id;

    /**
     * Get the value of coupon_id
     */
    public function getCoupon_id()
    {
        return $this->coupon_id;
    }

    /**
     * Set the value of coupon_id
     *
     * @return  self
     */
    public function setCoupon_id($coupon_id)
    {
        $this->coupon_id = $coupon_id;

        return $this;
    }
    private $lat_long;

    /**
     * Get the value of lat_long
     */
    public function getLat_long()
    {
        return $this->lat_long;
    }

    /**
     * Set the value of lat_long
     *
     * @return  self
     */
    public function setLat_long($lat_long)
    {
        $this->lat_long = $lat_long;

        return $this;
    }
    private $created_at;

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
    private $updated_at;

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

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
