<?php


class Car
{
    private int $id;
    private string $brand;
    private int $place;
    private string $category;
    private int $stock;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return int
     */
    public function getPlace(): int
    {
        return $this->place;
    }

    /**
     * @param int $place
     */
    public function setPlace(int $place): self
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }


}