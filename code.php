<?php
$container = new Container();

// Autocomplete `->message` here before semi-colon:
$container->get('old-root');
$container->get('old-sub');
$container->get('new-root');
$container->get('new-sub');

class Letter
{
    public $message;
}

class Container
{
    public function get()
    {

    }
}