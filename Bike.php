<?php

class Bike extends Vehicle implements LightableInterface
{
public function changeWheel(): void
{
}

    public function switchOn(): bool
    {
        return $this->currentSpeed > 10 ? true : false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}