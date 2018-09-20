<?php

class Iterate
{
    public $propertyOne = 'Public Property';
    protected $propertyTwo = 'Protected Property';
    private $propertyThree = 'Private Property';

    public function iterateObj()
    {
        foreach ($this as $key => $value) {
            echo "$key => $value\n";
        }
    }
}

$iterate = new Iterate();

// $iterate->iterateObj();

foreach ($iterate as $key => $value) {
    echo "$key => $value\n";
}
