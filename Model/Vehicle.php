<?php

namespace Model;

class Vehicle implements Tooltip
{
    private $brand;
    private $nbPlaces;
    private $isAvailable;
    private $driver;
    private $licenceNumber;

    public function __construct(string $licenceNumber, bool $isAvailable)
    {
        $this->licenceNumber = $licenceNumber;
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return mixed
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param mixed $driver
     */
    public function setDriver(Driver $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Attribue la marque de la voiture
     * @param $brand
     */
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Getter - récupère la marque de la voiture
     * @return mixed
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setNbPlaces(int $nb): self
    {
        $this->nbPlaces = $nb;

        return $this;
    }

    public function getNbPlaces(): int
    {
        return $this->nbPlaces;
    }

    public function setAvailable(bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    public function getDriverName()
    {
        return $this->getDriver()->getName();
    }

    public function isRentable(): bool
    {
        if ($this->isAvailable == true && $this->getDriver()->getIsAvailable() == true) {
            return true;
        }

        return false;

    }

    /**
     * @return string
     */
    public function getLicenceNumber(): string
    {
        return $this->licenceNumber;
    }

    public function showTooltip()
    {
        echo '<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            '. $this->getLicenceNumber() .'
        </button>';
    }
}
