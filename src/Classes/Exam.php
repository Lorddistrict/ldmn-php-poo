<?php
declare(strict_types=1);

namespace App\Classes;

class Exam
{
    private string $identifier;
    private string $subject;
    private array  $marks;

    /**
     * Exam constructor.
     *
     * @param string $identifier
     * @param string $subject
     */
    public function __construct(string $identifier, string $subject)
    {
        $this->identifier = $identifier;
        $this->subject    = $subject;
        $this->marks      = [];
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
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return array
     */
    public function getMarks(): array
    {
        return $this->marks;
    }

    /**
     * @param array $marks
     */
    public function setMarks(array $marks): void
    {
        $this->marks = $marks;
    }

    /**
     * @param Mark $mark
     */
    public function addMarkToExam(Mark $mark): void
    {
        array_push($this->marks, $mark);
    }
}