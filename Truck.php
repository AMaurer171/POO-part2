<?php

class Truck extends Vehicle {

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $storageCapacity;

    private int $cargo = 0;

    private string $energyType;

    public function __construct(string $color, int $nbSeats, string $energyType, int $storageCapacity) {
        parent::__construct($color, $nbSeats);
        $this->energyType = $energyType;
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity->$storageCapacity;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void
    {
        $this->cargo=$cargo;
    }

    public function getEnergyType(): string {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): Car
    {   
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {   
            $this->energyType = $energyType;  
        }    
        return $this;  
    }


    public function isStorageFull(): string {
        if ($this->storageCapacity === 100) {
            return 'full';
        } else {
            return 'in filling';
        }
    }
}