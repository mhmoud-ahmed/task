<?php
require __DIR__ . "\..\DataBase\config.php";
require __DIR__ . "\..\DataBase\operation.php";
class Coupon extends config implements operations
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
    private $code;

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
    private $discount;

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
    private $discount_type;

    /**
     * Get the value of discount_type
     */
    public function getDiscount_type()
    {
        return $this->discount_type;
    }

    /**
     * Set the value of discount_type
     *
     * @return  self
     */
    public function setDiscount_type($discount_type)
    {
        $this->discount_type = $discount_type;

        return $this;
    }
    private $mini_order_price;

    /**
     * Get the value of mini_order_price
     */
    public function getMini_order_price()
    {
        return $this->mini_order_price;
    }

    /**
     * Set the value of mini_order_price
     *
     * @return  self
     */
    public function setMini_order_price($mini_order_price)
    {
        $this->mini_order_price = $mini_order_price;

        return $this;
    }
    private $max_discount_value;

    /**
     * Get the value of max_discount_value
     */
    public function getMax_discount_value()
    {
        return $this->max_discount_value;
    }

    /**
     * Set the value of max_discount_value
     *
     * @return  self
     */
    public function setMax_discount_value($max_discount_value)
    {
        $this->max_discount_value = $max_discount_value;

        return $this;
    }
    private $max_usage_per_user;

    /**
     * Get the value of max_usage_per_user
     */
    public function getMax_usage_per_user()
    {
        return $this->max_usage_per_user;
    }

    /**
     * Set the value of max_usage_per_user
     *
     * @return  self
     */
    public function setMax_usage_per_user($max_usage_per_user)
    {
        $this->max_usage_per_user = $max_usage_per_user;

        return $this;
    }
    private $max_usage_coupon;

    /**
     * Get the value of max_usage_coupon
     */
    public function getMax_usage_coupon()
    {
        return $this->max_usage_coupon;
    }

    /**
     * Set the value of max_usage_coupon
     *
     * @return  self
     */
    public function setMax_usage_coupon($max_usage_coupon)
    {
        $this->max_usage_coupon = $max_usage_coupon;

        return $this;
    }
    private $start_at;

    /**
     * Get the value of start_at
     */
    public function getStart_at()
    {
        return $this->start_at;
    }

    /**
     * Set the value of start_at
     *
     * @return  self
     */
    public function setStart_at($start_at)
    {
        $this->start_at = $start_at;

        return $this;
    }
    private $end_at;

    /**
     * Get the value of end_at
     */
    public function getEnd_at()
    {
        return $this->end_at;
    }

    /**
     * Set the value of end_at
     *
     * @return  self
     */
    public function setEnd_at($end_at)
    {
        $this->end_at = $end_at;

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
