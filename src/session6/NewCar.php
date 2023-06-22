<?php

class NewCar {
    protected string $model;
    protected int $priceEuro;
    protected float $exchangeRate;

    public function __construct($model, $priceEuro, $exchangeRate) {
        $this->model = $model;
        $this->priceEuro = $priceEuro;
        $this->exchangeRate = $exchangeRate;
    }

    public function calculatePrice(): float
    {
        return $this->priceEuro * $this->exchangeRate;
    }
}