<?php

namespace Model;

final class Client extends User
{
    private $firstName;
    private $lastName;
    private $address;
    private $cbNumber;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCbNumber()
    {
        return $this->cbNumber;
    }

    /**
     * @param mixed $cbNumber
     */
    public function setCbNumber($cbNumber): void
    {
        $this->cbNumber = $cbNumber;
    }




}
