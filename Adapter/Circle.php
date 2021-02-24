<?php


class Circle Implements ICircle
{
    protected CircleAreaLib $circleAreaLib;
    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    function circleArea(int $circumference)
    {
        $adapter = new Adapter($circumference);
        $diameter = $adapter->getDiameter();
        return $this->circleAreaLib->getCircleArea($diameter);
    }
}