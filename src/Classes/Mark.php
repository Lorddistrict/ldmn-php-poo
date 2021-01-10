<?php
declare(strict_types=1);

namespace App\Classes;

class Mark
{
    private string  $identifier;
    private float   $mark;
    private Human $student;

    /**
     * Mark constructor.
     *
     * @param string $identifier
     * @param float  $mark
     * @param Human  $student
     */
    public function __construct(string $identifier, float $mark, Human $student)
    {
        $this->identifier = $identifier;
        $this->mark       = $mark;
        $this->student    = $student;
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
     * @return float
     */
    public function getMark(): float
    {
        return $this->mark;
    }

    /**
     * @param float $mark
     */
    public function setMark(float $mark): void
    {
        $this->mark = $mark;
    }

    /**
     * @return Human
     */
    public function getStudent(): Human
    {
        return $this->student;
    }

    /**
     * @param Human $student
     */
    public function setStudent(Human $student): void
    {
        $this->student = $student;
    }
}
