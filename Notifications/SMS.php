<?php


class SMS extends Decorator
{
    public function send($text)
    {
        parent::send($text);
        echo 'send' . $text . ' by SMS';
    }
}
