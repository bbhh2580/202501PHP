<?php

namespace classes;


class Car
{
    public int $price;
    public string $color;
    public static int $count = 0;

    public function __construct(int $price, $color)
    {
        $this->price = $price;
        $this->color = $color;
        self::$count = 1;
    }

    public function getCarInfo(): string
    {
        return "This car is a ($this->color)color. It costs {$this->price} USD. <hr>";
    }

    public static function thisIsAStaticFunction()
    {

    }

    public function getThisClassFunction(): void
    {
        $car = $this->getCarInfo();
        self::thisIsAStaticFunction();
    }
}

$car = new Car(10000, "red");
$carInfo = $car->getCarInfo();
echo $carInfo;
var_dump($car::$count);
echo "<hr>";
$car::thisIsAStaticFunction();

class Truck extends Car //extend:延伸
{
    public int $weight;

    public function __construct($price, $color, $weight)
    {
        parent::__construct($price, $color);
        $this->weight = $weight;
    }

    public function getTruckInfo(): string
    {
        return "This truck is ($this->color) color.
        It costs {$this->price}USD.
        It weight {$this->weight} kg.<hr>";
    }
}

interface Vehicle
{
    public function getVehicleInfo(): string;
}

class Motorcycle extends Car implements Vehicle
{
    public function getVehicleInfo(): string
    {
        return "This motorcycle is ($this->color) color. It costs {$this->price} USD. <hr>}";
    }
}