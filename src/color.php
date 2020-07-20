<?php


namespace app;

class color{
    private $red;
    private $green;
    private $blue;

    public function __construct($red,$green,$blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }
    public function getRed()
    {
        return $this->red;
    }
    private function setRed($red)
    {
        if($red > 0 || $red < 255){
            exit("invalid RGB range");
        }
        $this->red = $red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    private function setGreen($green)
    {
        if($green > 0 || $green < 255){
            exit("invalid RGB range");
        }
        $this->green = $green;
    }
    public function getBlue()
    {
        return $this->blue;
    }
    private function setBlue($blue)
    {
        if($blue > 0 || $blue < 255){
            exit("invalid RGB range");
        }
        $this->blue = $blue;
    }
    public function equal(color $color)
    {
        if ($this->red == $color->getRed() && $this->green == $color->getGreen() && $this->blue == $color->getBlue()){
            return true;
        }
        return false;
    }
    static public function rand(){
        return new color(rand(0,255),rand(0,255),rand(0,255));
    }
    public function mix(color $color){
        $red = ($this->red + $color->getRed())/2;
        $green = ($this->green + $color->getGreen())/2;
        $blue = ($this->blue + $color->getBlue())/2;
        return new color($red,$green,$blue);
    }
}