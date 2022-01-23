<?php
require __DIR__ . "\..\DataBase\config.php";
require __DIR__ . "\..\DataBase\operation.php";
class Offer extends config implements operations
{

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
    private $title_en;

    /**
     * Get the value of title_en
     */ 
    public function getTitle_en()
    {
        return $this->title_en;
    }

    /**
     * Set the value of title_en
     *
     * @return  self
     */ 
    public function setTitle_en($title_en)
    {
        $this->title_en = $title_en;

        return $this;
    }
    private $title_ar;

    /**
     * Get the value of title_ar
     */ 
    public function getTitle_ar()
    {
        return $this->title_ar;
    }

    /**
     * Set the value of title_ar
     *
     * @return  self
     */ 
    public function setTitle_ar($title_ar)
    {
        $this->title_ar = $title_ar;

        return $this;
    }
    private $disocunt;

    /**
     * Get the value of disocunt
     */ 
    public function getDisocunt()
    {
        return $this->disocunt;
    }

    /**
     * Set the value of disocunt
     *
     * @return  self
     */ 
    public function setDisocunt($disocunt)
    {
        $this->disocunt = $disocunt;

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
    private $end_ar;

    /**
     * Get the value of end_ar
     */ 
    public function getEnd_ar()
    {
        return $this->end_ar;
    }

    /**
     * Set the value of end_ar
     *
     * @return  self
     */ 
    public function setEnd_ar($end_ar)
    {
        $this->end_ar = $end_ar;

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
    private $update_At;

    /**
     * Get the value of update_At
     */ 
    public function getUpdate_At()
    {
        return $this->update_At;
    }

    /**
     * Set the value of update_At
     *
     * @return  self
     */ 
    public function setUpdate_At($update_At)
    {
        $this->update_At = $update_At;

        return $this;
    }
}
