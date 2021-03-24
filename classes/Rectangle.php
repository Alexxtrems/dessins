<?php


class Rectangle extends Shape
{
    //Propriété-------------------------
    protected int $width;
    protected int $height;
    
    //Constructeur-------------------------
    public function __construct(int $x, int $y, string $fill, float $opacity, int $width, int $height)
    {
        parent::__construct($x, $y, $fill, $opacity);

        $this->width = $width;
        $this->height = $height;
    }
    
    //Méthods-------------------------
    public function draw(): string
    {
        //sprintf — Retourne une chaîne formatée
        // % :Un caractère de pourcentage littéral. Aucun argument n'est nécessaire.
        //s:L'argument est traité et présenté comme une chaîne de caractères.
        //f:L'argument est traité comme un nombre à virgule flottante
        return sprintf('<rect x="%s" y="%s" width="%s" height="%s" fill="%s" opacity="%f"></rect>',
            $this->x,
            $this->y,
            $this->width,
            $this->height,
            $this->fill,
            $this->opacity
        );
        
        // Version alternative sans concaténation (attention il faut utiliser les "" pour délimiter la chaîne)
        // return "<rect x='{$this->x}' ...";
    }
    
    // Getter / Setter-------------------------
    
    //position width
    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
    
    //position height
    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}