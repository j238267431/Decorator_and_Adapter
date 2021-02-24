<?php


class Decorator implements Message
{
    protected Message $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function send($text)
    {
        $this->message->send($text);
    }

}