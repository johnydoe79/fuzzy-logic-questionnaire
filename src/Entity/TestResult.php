<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class TestResult
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $userId;

    #[ORM\Column(type: Types::JSON)]
    private array $results = []; // Хранит результаты в формате ['question_id' => is_correct]

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    public function addQuestionResult(int $questionId, bool $isCorrect): void
    {
        $this->results[$questionId] = $isCorrect;
    }
}
