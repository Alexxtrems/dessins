<?php

class Ellipse extends Shape
{
    //Propriété-------------------------
    protected int $rx;
    protected int $ry;
    
    //Constructor-------------------------
    public function __construct(int $x, int $y, int $rx, int $ry, string $fill, float $opacity)
    {
        parent::__construct($x, $y, $fill, $opacity);

        
        $this->rx = $rx;
        $this->ry = $ry;
        
    }
    
    //Méthods-------------------------
    public function draw(): string
    {
        //sprintf — Retourne une chaîne formatée
        // % :Un caractère de pourcentage littéral. Aucun argument n'est nécessaire.
        //s:L'argument est traité et présenté comme une chaîne de caractères.
        //f:L'argument est traité comme un nombre à virgule flottante
        return sprintf('<ellipse cx="%s" cy="%s" rx="%s" ry="%s" fill="%s" opacity="%f"></ellipse>',
            $this->x,
            $this->y,
            $this->rx,
            $this->ry,
            $this->fill,
            $this->opacity
        );
        
    }
    
    
    // Getter / Setter-------------------------
    
    //position RX
    public function getRx(): int
    {
        return $this->rx;
    }

    public function setRx(int $rx): void
    {
        $this->rx = $rx;
    }
    
    //position RY
    public function getRy(): int
    {
        return $this->ry;
    }

    public function setRy(int $ry): void
    {
        $this->ry = $ry;
    }
}