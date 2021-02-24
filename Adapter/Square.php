<?php


class Square implements ISquare
{

    protected SquareAreaLib $squareAreaLib;

    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    function squareArea(int $sideSquare)
    {
        $adapter = new Adapter($sideSquare);
        $diagonal = $adapter->getDiagonal();
        return $this->squareAreaLib->getSquareArea($diagonal);
    }
}