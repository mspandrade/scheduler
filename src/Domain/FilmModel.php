<?php

namespace App\Domain;

class FilmModel implements \JsonSerializable 
{
    
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $name; 
    
    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }
    
    /**
     * @return number
     */
    public function getId(): int 
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
     
}