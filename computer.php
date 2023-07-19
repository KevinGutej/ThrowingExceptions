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
class DesktopComputer extends Computer
{
    protected $formFactor;

    public function __construct($brand, $model, $formFactor)
    {
        parent::__construct($brand, $model);
        $this->formFactor = $formFactor;
    }

    public function displayInfo()
    {
        parent::displayInfo();
        echo "Form Factor: " . $this->formFactor . "<br>";
    }
}

class LaptopComputer extends Computer
{
    protected $batteryLife;

    public function __construct($brand, $model, $batteryLife)
    {
        parent::__construct($brand, $model);
        $this->batteryLife = $batteryLife;
    }

    public function displayInfo()
    {
        parent::displayInfo();
        echo "Battery Life: " . $this->batteryLife . " hours<br>";
    }
}
