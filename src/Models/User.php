<?php


namespace Src\Models;


class User
{
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $role = ['ROLE_USER'];

    /**
     * User constructor.
     * @param $id
     * @param $password
     * @param $name
     * @param $surname
     */
    public function __construct(string $email, $password, $name, $surname, $id = null)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return array
     */
    public function getRole(): array
    {
        return $this->role;
    }
}