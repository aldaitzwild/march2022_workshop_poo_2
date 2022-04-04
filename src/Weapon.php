<?php
class Weapon 
{
    private int $damage = 10;
    private string $image = 'sword.svg';

    /**
     * Get the value of damage
     */ 
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */ 
    public function setDamage($damage): void
    {
        $this->damage = $damage;
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