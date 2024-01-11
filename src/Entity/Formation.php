<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Delete;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\FormationRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
#[ApiResource(
    
)]
#[Get()] 
#[Post(
    denormalizationContext: [ 'groups' => ['write'] ]
)] 
#[Put()] 
#[Delete()]


class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Groups(['write'])]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Groups(['write'])]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'formation', targetEntity: User::class)]

    private Collection $formation;

    public function __construct()
    {
        $this->formation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getFormation(): Collection
    {
        return $this->formation;
    }

    public function addFormation(User $formation): static
    {
        if (!$this->formation->contains($formation)) {
            $this->formation->add($formation);
            $formation->setFormation($this);
        }

        return $this;
    }

    public function removeFormation(User $formation): static
    {
        if ($this->formation->removeElement($formation)) {
            // set the owning side to null (unless already changed)
            if ($formation->getFormation() === $this) {
                $formation->setFormation(null);
            }
        }

        return $this;
    }
}
