<?php
declare(strict_types=1);

namespace App\Interfaces;

interface StudentInterface
{
    public function getIdentifier(): string;
    public function getFirstName(): string;
    public function getLastName(): string;
}