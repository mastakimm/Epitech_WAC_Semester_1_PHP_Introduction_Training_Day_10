<?php

class Pony
{
    private $name;
    private $gender;
    private $color;

    public function __set($argument, $value)
    {
        if ("name" === $argument || "gender" === $argument || "color" === $argument) {
            echo "Ce n'est pas bien de setter un attribut qui est privé !\n";
            $this->$argument = $value;
        } else {
            echo "Il n'y a pas d'attribut : $argument." . PHP_EOL;
        }
    }

    public function __get($argument)
    {
        if ("name" === $argument || "gender" === $argument || "color" === $argument) {
            echo "Ce n'est pas bien de getter un attribut qui est privé !\n";
            return $this->$argument;
        } else {
            echo "Il n'y a pas d'attribut : $argument." . PHP_EOL;
        }
    }
    public function __call($name, $arguments)
    {
        echo "I don't know what to do...\n";
    }

    public function speak()
    {
        echo "Hiii hiii hiiii\n";
    }

    public function __toString()
    {
        return "Don't worry, I'm a pony !\n";
    }

    public function __construct($name, $gender, $color)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "I'm a dead pony.\n";
    }
}
