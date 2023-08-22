<?php

namespace App\Entity;

use App\Repository\AirsoftAssoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AirsoftAssoRepository::class)]
class AirsoftAsso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(length: 255)]
    private ?string $socialMedia = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $schedule = null;

    #[ORM\OneToMany(mappedBy: 'relation', targetEntity: AirsoftUser::class)]
    private Collection $airsoftUsers;

    public function __construct()
    {
        $this->airsoftUsers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getSocialMedia(): ?string
    {
        return $this->socialMedia;
    }

    public function setSocialMedia(string $socialMedia): static
    {
        $this->socialMedia = $socialMedia;

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

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(string $schedule): static
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @return Collection<int, AirsoftUser>
     */
    public function getAirsoftUsers(): Collection
    {
        return $this->airsoftUsers;
    }

    public function addAirsoftUser(AirsoftUser $airsoftUser): static
    {
        if (!$this->airsoftUsers->contains($airsoftUser)) {
            $this->airsoftUsers->add($airsoftUser);
            $airsoftUser->setRelation($this);
        }

        return $this;
    }

    public function removeAirsoftUser(AirsoftUser $airsoftUser): static
    {
        if ($this->airsoftUsers->removeElement($airsoftUser)) {
            // set the owning side to null (unless already changed)
            if ($airsoftUser->getRelation() === $this) {
                $airsoftUser->setRelation(null);
            }
        }

        return $this;
    }
}
