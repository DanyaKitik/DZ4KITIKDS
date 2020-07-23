<?php

namespace app;

class Color{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct($red,$green,$blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }
    public function getRed():int
    {
        return $this->red;
    }
    private function setRed($red):void
    {
        if($red < 0 && $red > 255){
            exit("invalid RGB range");
        }
        $this->red = $red;
    }
    public function getGreen():int
    {
        return $this->green;
    }
    private function setGreen($green):void
    {
        if($green < 0 && $green > 255){
            exit("invalid RGB range");
        }
        $this->green = $green;
    }
    public function getBlue():int
    {
        return $this->blue;
    }
    private function setBlue($blue):void
    {
        if($blue < 0 && $blue > 255){
            exit("invalid RGB range");
        }
        $this->blue = $blue;
    }
    public function equal(color $color):bool
    {
        return $this->red === $color->getRed() &&
            $this->green === $color->getGreen() &&
            $this->blue === $color->getBlue();
    }
    static public function rand():self
    {
        return new self(rand(0,255),rand(0,255),rand(0,255));
    }
    public function mix(color $color):self
    {
        return new self(
            (int)(($this->red + $color->getRed())/2),
            (int)(($this->green + $color->getGreen())/2),
            (int)(($this->blue + $color->getBlue())/2)
        );
    }
}