<?php

class Computer
{
    protected $brand;
    protected $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function displayInfo()
    {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
    }
}
