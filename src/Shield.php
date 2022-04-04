<?php
class Shield
{
    private int $protection = 10;
    private string $image = 'shield.svg';

    /**
     * Get the value of protection
     */ 
    public function getProtection(): int
    {
        return $this->protection;
    }

    /**
     * Set the value of protection
     *
     * @return  self
     */ 
    public function setProtection($protection): void
    {
        $this->protection = $protection;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image): void
    {
        $this->image = $image;
    }
}