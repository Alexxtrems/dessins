<?php

abstract class Shape
{
    //Propriété-------------------------
    protected int $x;
    protected int $y;
    protected string $fill;
    protected float $opacity;
    
    //Constructor-------------------------
    public function __construct(int $x, int $y, string $fill, float $opacity)
    {
        $this->x = $x;
        $this->y = $y;
        $this->fill = $fill;
        $this->opacity = $opacity;
    }
    
    //Methods-------------------------
     public abstract function draw(): string;
    
    
    // Getter / Setter-------------------------
    
    //position X
    public function getX(): int
    {
        return $this->X;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }
    
    // position Y
    public function getY(): int
    {
        return $this->Y;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }
    
    // fill
    public function getFill(): string
    {
        return $this->Fill;
    }

    public function setFill(int $fill): void
    {
        $this->fill = $fill;
    }
    
    // Opacity
    public function getOpacity(): float
    {
        return $this->Opacity;
    }

    public function setOpacity(int $opacity): void
    {
        $this->opacity = $opacity;
    }
}

