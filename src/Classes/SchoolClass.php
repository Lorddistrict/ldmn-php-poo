<?php
declare(strict_types=1);

namespace App\Classes;

class SchoolClass
{
    private string $identifier;
    private array  $students;

    /**
     * SchoolClass constructor.
     *
     * @param string $identifier
     */
    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
        $this->students = [];
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
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents(array $students): void
    {
        $this->students = $students;
    }

    /**
     * @param Student $student
     */
    public function joinSchoolClass(Student $student): void
    {
        array_push($this->students, $student);
    }
}