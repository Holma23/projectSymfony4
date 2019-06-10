<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CongeRepository")
 */
class Conge
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min=1,max=5)
     * @Assert\NotBlank(message="the number must be between 1 and 5")
     */
    private $nbreJour;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message="Date of leave")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="nature of leave")
     */
    private $nature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

    /**
     * @var \Symfony\Component\Security\Core\User\     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }


    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbreJour(): ?int
    {
        return $this->nbreJour;
    }

    public function setNbreJour(int $nbreJour): self
    {
        $this->nbreJour = $nbreJour;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;

        return $this;
    }
}
