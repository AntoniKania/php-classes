<?php

require_once 'CarWithAccessories.php';

class Insurance extends CarWithAccessories {
    protected float $insurancePercentage;
    protected int $yearsOwned;

    public function __construct($model, $priceEuro, $exchangeRate, $alarm, $radio, $airConditioning, $insurancePercentage, $yearsOwned) {
        parent::__construct($model, $priceEuro, $exchangeRate, $alarm, $radio, $airConditioning);
        $this->insurancePercentage = $insurancePercentage;
        $this->yearsOwned = $yearsOwned;
    }

    public function calculatePrice(): float
    {
        $carPriceWithAccessories = parent::calculatePrice();
        return $this->insurancePercentage * ($carPriceWithAccessories * ((100 - $this->yearsOwned) / 100));
    }
}