<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="integer")
     */
    private $Book_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Staff_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
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

    public function getStaffId(): ?int
    {
        return $this->Staff_id;
    }

    public function setStaffId(int $Staff_id): self
    {
        $this->Staff_id = $Staff_id;

        return $this;
    }
}
