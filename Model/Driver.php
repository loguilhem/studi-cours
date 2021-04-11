<?php

namespace Model;

class Driver extends User implements Tooltip
{
    private $licenceNumber;
    private $isAvailable;
    private $type;

    /**
     * @return string
     */
    public function getType(): string //Moto ou Voiture
    {
        return $this->type;
    }

    public function __construct(string $title, string $type)
    {
        parent::__construct($title);
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getLicenceNumber()
    {
        return $this->licenceNumber;
    }

    /**
     * @param mixed $licenceNumber
     */
    public function setLicenceNumber($licenceNumber): void
    {
        $this->licenceNumber = $licenceNumber;
    }

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * @param mixed $isAvailable
     */
    public function setIsAvailable($isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    public function showTooltip()
    {
        echo '<span type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            '. $this->getLicenceNumber() .'
        </span>';
    }
}
