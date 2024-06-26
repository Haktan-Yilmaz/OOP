<?php

class Movie
{
    public $name;
    public $genre;
    public $seen;

    /**
     * @param string $name
     * @param string $genre
     * @param int $seen
     */
    
    public function __construct($name, $genre, $seen)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->seen = $seen; 
    }

    public function getName()
    {
        return $this->name;
    }
}