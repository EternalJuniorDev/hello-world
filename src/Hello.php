<?php

namespace App;

class Hello
{
    public function __construct(private string $name = 'Nick') {}

    public function sayHello() {
        echo 'Hello: ' . $this->name;
    }
}