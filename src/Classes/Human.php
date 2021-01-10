<?php
declare(strict_types=1);

namespace App\Classes;

use App\Interfaces\StudentInterface;

abstract class Human implements StudentInterface
{
    private string $identifier;
    private string $firstName;
    private string $lastName;

    /**
     * Student constructor.
     *
     * @param string $identifier
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $identifier, string $firstName, string $lastName)
    {
        $this->identifier = $identifier;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
}