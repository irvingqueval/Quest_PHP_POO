<?php

class Car {

    private INT $nbWheels = 4;
    private INT $currentSpeed = 0;
    private STRING $color;
    private INT $nbSeats;
    private STRING $energy;
    private INT $energyLevel = 100;


    public function __construct(string $color, string $energy, int $nbSeats) {

        $this->color = $color;
        $this->energy = $energy;
        $this->nbSeats = $nbSeats;

    }

    public function forward(): string
    {

        $this->currentSpeed = 15;
        return "Go !";

    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string {

        return "Ready";

    }

    public function getNbWheels() {

        return $this->nbWheels;

    }

    public function getCurrentSpeed() {

        return $this->currentSpeed;

    }

    public function getColor() {

        return $this->color;

    }

    public function getNbSeats() {

        return $this->nbSeats;

    }

    public function getEnergy() {

        return $this->energy;

    }

    public function getEnergyLevel() {

        return $this->energyLevel;
        
    }
}