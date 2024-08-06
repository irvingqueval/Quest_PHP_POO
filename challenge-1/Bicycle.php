<?php

class Bicycle
{

    private string $color;

    private int $currentSpeed = 0;

    private int $nbSeats;

    private int $nbWheels = 2;


    public function __construct(string $color, int $nbSeats)
    {

        $this->color = $color;
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
}
