<?php

namespace Model;

abstract class User
{
    private $pwd;
    private $email;
    private $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd): void
    {
        $this->pwd = $pwd;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }



}
