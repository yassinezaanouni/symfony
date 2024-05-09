<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $valide = null;

    #[ORM\Column]
    private ?float $total = null;

    /**
     * @var Collection<int, Prd>
     */
    #[ORM\ManyToMany(targetEntity: Prd::class, inversedBy: 'tickets')]
    private Collection $prds;

    public function __construct()
    {
        $this->prds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function isValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return Collection<int, Prd>
     */
    public function getPrds(): Collection
    {
        return $this->prds;
    }

    public function addPrd(Prd $prd): static
    {
        if (!$this->prds->contains($prd)) {
            $this->prds->add($prd);
        }

        return $this;
    }

    public function removePrd(Prd $prd): static
    {
        $this->prds->removeElement($prd);

        return $this;
    }
}
