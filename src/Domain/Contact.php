<?php

namespace App\Domain;

use JsonSerializable;

class Contact implements JsonSerializable 
{
    
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $email;
    
    /**
     * @var string
     */
    private $phone_number;
    
    /**
     * @var \DateTime
     */
    private $arrival_date;
    
    /**
     * @param string $email
     * @param string $phoneNumber
     * @param \DateTime $arrivalDate
     */
    public function __construct(string $email, string $phoneNumber, \DateTime $arrivalDate) 
    {
        $this->email = $email;
        $this->phone_number = $phoneNumber;
        $this->arrival_date = $arrivalDate;
    }
    
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    
    public function phone_number() : string
    {
        return $this->phone_number;
    }
    
    public function getArrivalDate(): \DateTime
    {
        return $this->arrival_date;
    }
    
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'phoneNumber' => $this->phone_number,
            'arrivalDate' => $this->arrival_date,
        ];
    }
    
}