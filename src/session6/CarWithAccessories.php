<?php
require_once 'NewCar.php';

class CarWithAccessories extends NewCar {
    protected int $alarm;
    protected int $radio;
    protected int $airConditioning;

    public function __construct($model, $priceEuro, $exchangeRate, $alarm, $radio, $airConditioning) {
        parent::__construct($model, $priceEuro, $exchangeRate);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->airConditioning = $airConditioning;
    }

    public function calculatePrice(): float
    {
        $basePrice = parent::calculatePrice();
        return $basePrice + $this->alarm + $this->radio + $this->airConditioning;
    }
}