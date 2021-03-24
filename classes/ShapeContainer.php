<?php

class ShapeContainer 
{
    //Propriété-------------------------
    protected int $width;
    protected int $height;
    protected array $shapes;
    
    //constructor
    public function __construct(int $width, int $height, array $shapes = [])
    {
        $this->width = $width;
        $this->height = $height;
        $this->shapes = $shapes;
        
    }
    
    //methods
    public function addShape (Shape $shape): ShapeContainer
    {
        $this->shapes[] = $shape;
        
        // On renvoie la classe ShapeContainer pour pouvoir chaîner les appels de la fonction addShape
        return $this;
    }
    
    public function render (): string
    {
        // Ouverture de la balise SVG
        $svg = sprintf('<svg width="%s" height="%s">', $this->width, $this->height);
        
        // Ajout du texte de chacune des formes dans le svg
        foreach ($this->shapes as $shape) 
        {
            $svg .= $shape->draw();
        }
                        
            // Fermeture de la balise SVG            
        $svg .= '</svg>';
        
        return $svg;
    }
    
    // Getter / Setter-------------------------
    
    //width
    public function getWidth(): int
    {
        return $this->Width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
    //height
    public function getHeight(): int
    {
        return $this->Height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
    //shapes
    public function getShapes(): int
    {
        return $this->Shapes;
    }

    public function setShapes(int $shapes): void
    {
        $this->shapes = $shapes;
    }
    
    
}