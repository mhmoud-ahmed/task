<?php
require_once __DIR__ . "\..\DataBase\config.php";
require_once __DIR__ . "\..\DataBase\operation.php";
class Product extends config implements operations
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
    private $name_en;

    /**
     * Get the value of name_en
     */
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     *
     * @return  self
     */
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }
    private $name_ar;

    /**
     * Get the value of name_ar
     */
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * Set the value of name_ar
     *
     * @return  self
     */
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }
    private $desc_en;

    /**
     * Get the value of desc_en
     */
    public function getDesc_en()
    {
        return $this->desc_en;
    }

    /**
     * Set the value of desc_en
     *
     * @return  self
     */
    public function setDesc_en($desc_en)
    {
        $this->desc_en = $desc_en;

        return $this;
    }
    private $desc_ar;

    /**
     * Get the value of desc_ar
     */
    public function getDesc_ar()
    {
        return $this->desc_ar;
    }

    /**
     * Set the value of desc_ar
     *
     * @return  self
     */
    public function setDesc_ar($desc_ar)
    {
        $this->desc_ar = $desc_ar;

        return $this;
    }
    private $image;

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

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
    private $quantity;

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

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
    private $subcategorie_id;

    /**
     * Get the value of subcategorie_id
     */
    public function getSubcategorie_id()
    {
        return $this->subcategorie_id;
    }

    /**
     * Set the value of subcategorie_id
     *
     * @return  self
     */
    public function setSubcategorie_id($subcategorie_id)
    {
        $this->subcategorie_id = $subcategorie_id;

        return $this;
    }
    private $brand_id;

    /**
     * Get the value of brand_id
     */
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     * Set the value of brand_id
     *
     * @return  self
     */
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;

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
    private $offer_id;

    /**
     * Get the value of offer_id
     */
    public function getOffer_id()
    {
        return $this->offer_id;
    }

    /**
     * Set the value of offer_id
     *
     * @return  self
     */
    public function setOffer_id($offer_id)
    {
        $this->offer_id = $offer_id;

        return $this;
    }
    private $update_at;

    /**
     * Get the value of update_at
     */
    public function getUpdate_at()
    {
        return $this->update_at;
    }

    /**
     * Set the value of update_at
     *
     * @return  self
     */
    public function setUpdate_at($update_at)
    {
        $this->update_at = $update_at;

        return $this;
    }
    public function create()
    {
    }
    public function read()
    {
        $query = "SELECT
        `id`,
        `name_en`,
        `price`,
        `desc_en`,
        `image`
    FROM
        `products`
    WHERE
    STATUS
        = 1
    ORDER BY
        `price` ASC,
        `quantity`
    DESC
        ,
        `name_en`";
        return $this->runDQL($query);
    }
    public function update()
    {
    }
    public function delete()
    {
    }

    public function getProductBySub()
    {
        $query = "SELECT
        `id`,
        `name_en`,
        `price`,
        `desc_en`,
        `image`
    FROM
        `products`
    WHERE
    STATUS
        = 1
        AND subcategorie_id ='$this->subcategorie_id'
    ORDER BY
        `price` ASC,
        `quantity`
    DESC
        ,
        `name_en`";
        return $this->runDQL($query);
    }
    public function searchOnId()
    {
        $query = "SELECT
        `products`.*,
        COUNT(`reviews`.`product_id`) AS `reviews_count`,
        IF(
            ROUND(AVG(`reviews`.`value`)) IS NULL,
            0,
            ROUND(AVG(`reviews`.`value`))
        ) AS `reviews_avg`,
        `subcategories`.`name_en` AS `subcategory_name`,
        `categories`.`id` AS `category_id`,
        `categories`.`name_en` AS `category_name`,
        `brands`.`name_en` AS `brand_name`
    FROM
        `products`
    LEFT JOIN `reviews` ON `products`.`id` = `reviews`.`product_id`
    JOIN `subcategories` ON `subcategories`.`id` = `products`.`subcategorie_id`
    LEFT JOIN `categories` ON `categories`.`id` = `subcategories`.`categorie_id`
    LEFT JOIN `brands` ON `brands`.`id` = `products`.`brand_id`
    WHERE
        `products`.`status` = $this->status AND `products`.`id` = $this->id
    GROUP BY
        `products`.`id`";
        return $this->runDQL($query);
    }
    public function newProduct()
    {
        $query = "SELECT * FROM `products` WHERE `status` = $this->status ORDER BY `created_at` DESC LIMIT 4";
        return $this->runDQL($query);
    }
    public function mostOrderProduct()
    {
        $query = "SELECT
        `products`.*,
        COUNT(`products_orders`.`order_id`) AS `product_count`
    FROM
        `products`
    JOIN `products_orders` ON `products`.`id` = `products_orders`.`product_id`
    WHERE
    STATUS
        = $this->status
    GROUP BY
        `products`.`id` ORDER BY `product_count` DESC
        LIMIT 4
    ";
        return $this->runDQL($query);
    }
    public function topRate()
    {
        $query = "SELECT
        `products`.*,
        COUNT(`reviews`.`product_id`) AS `reviews_count`,
        IF(
            ROUND(AVG(`reviews`.`value`)) IS NULL,
            0,
            ROUND(AVG(`reviews`.`value`))
        ) AS `reviews_avg`
    FROM
        `products`
    LEFT JOIN `reviews` ON `products`.`id` = `reviews`.`product_id`
    WHERE
        `products`.`status` = 1
    GROUP BY
        `reviews`.`product_id` ORDER BY `reviews_count` DESC , `reviews_avg` DESC LIMIT 4";
        return $this->runDQL($query);
    }
}
