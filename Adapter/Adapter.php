<?php


class Adapter
{
    protected float $parameter;
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    public function getDiagonal()
    {
        return sqrt(2) * $this->parameter;
    }
    public function getDiameter()
    {
        return $this->parameter / M_PI;
    }

}