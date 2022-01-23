<?php
require __DIR__ . "\..\DataBase\config.php";
class Validation
{
    private $name;
    private $value;
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    // Required Valid
    public function Required(): string
    {
        return (empty($this->value)) ? "$this->name Is Required" : "";
    }
    // Reguelar Experation 
    public function Regualer($pattern): string
    {
        return (preg_match($pattern, $this->value)) ? "" : "$this->name IS invalid";
    }
    // Unique Valid 1st write query use and take object from config
    public function Unique($table): string
    {
        $query = "SELECT * FROM `$table` Where `$this->name` = '$this->value' ";
        $config = new config;
        $result = $config->runDQL($query);
        return (empty($result)) ? "" : "This $this->name Is exists";
    }
    // Check Confirmed Password
    public function confirmed($valueconfirmation): string
    {
        return ($this->value == $valueconfirmation) ? "" : "$this->name Not Confirmed";
    }
}
