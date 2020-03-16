<?php

namespace App\Domain;

class RevelationRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var int
     */
    private $film_model_id;
    
    /**
     * @var boolean
     */
    private $has_scan;
    
    /**
     * @var boolean
     */
    private $has_border;
    
    /**
     * @var boolean
     */
    private $has_revelation;
    
    public function __construct(int $filmModelId, bool $hasScan, bool $hasBorder) 
    {
        $this->film_model_id = $filmModelId;
        $this->has_scan = $hasScan;
        $this->has_border = $hasBorder;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function getFilmModelId() : int
    {
        return $this->film_model_id;
    }
    
    public function hasScan(): bool
    {
        return $this->has_scan;
    }
    
    public function hasBorder(): bool
    {
        return $this->has_border;
    }
    
    public function hasRevelation(): bool
    {
        return $this->has_revelation;
    }
    
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'hasBorder' => $this->has_border,
            'hasScan' => $this->has_scan,
            'filmModel' => $this->filmModel,
            'hasRevelation' => $this->has_revelation
        ];
    }
    
}