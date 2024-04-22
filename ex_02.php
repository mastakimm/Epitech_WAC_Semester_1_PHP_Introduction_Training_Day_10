<?php

interface GoodManners
{
    const END_WORDS = ", dirais-je.";
    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
}

abstract class Warrior
{
    public function attack()
    {
        echo "I'll kill you, poor noob !\n";
    }

    abstract public function represent();
    abstract public function shout();
}

class Booba extends Warrior implements GoodManners
{
    public function say_please()
    {
        echo "S'il-te-plait" . self::END_WORDS . PHP_EOL;
    }

    public function say_thanks()
    {
        echo "Merci" . self::END_WORDS . PHP_EOL;
    }

    public function say_sorry($name)
    {
        echo "Mille excuses, " . $name . self::END_WORDS . PHP_EOL;
    }

    public function represent()
    {
        echo "92\n";
    }

    public function shout()
    {
        echo "Bah bien Morray !";
    }
}

class LaFouine extends Warrior
{
    public function represent()
    {
        echo "78\n";
    }

    public function shout()
    {
        echo "Je suis proprietaire !";
    }
}
