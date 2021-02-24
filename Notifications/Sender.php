<?php


class Sender implements Message
{

    public function send($text)
    {
        return $text;
    }
}