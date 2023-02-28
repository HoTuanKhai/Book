<?php

namespace App\Entity;

use App\Repository\AuthorOfBookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuthorOfBookRepository::class)
 */
class AuthorOfBook
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Book_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookId(): ?int
    {
        return $this->Book_id;
    }

    public function setBookId(int $Book_id): self
    {
        $this->Book_id = $Book_id;

        return $this;
    }
}
