<?php

namespace Customize\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Customize\Repository\CustomerChannelRepository")
 */
class CustomerChannel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(type="smallint", nullable=true, options={"unsigned":true, "default": 0})
     */
    private $sortNo;

    /**
     * @ORM\OneToMany(targetEntity="Customize\Entity\CustomerRank", mappedBy="customerChannel")
     */
    private $customerRanks;

    public function __construct()
    {
        $this->customerRanks = new ArrayCollection();

        //sortNoに初期値を与えたい
        $this->sortNo = $this->id;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|CustomerRank[]
     */
    public function getCustomerRanks(): Collection
    {
        return $this->customerRanks;
    }

    public function addCustomerRank(CustomerRank $customerRank): self
    {
        if (!$this->customerRanks->contains($customerRank)) {
            $this->customerRanks[] = $customerRank;
            $customerRank->setCustomerChannel($this);
        }

        return $this;
    }

    public function removeCustomerRank(CustomerRank $customerRank): self
    {
        if ($this->customerRanks->contains($customerRank)) {
            $this->customerRanks->removeElement($customerRank);
            // set the owning side to null (unless already changed)
            if ($customerRank->getCustomerChannel() === $this) {
                $customerRank->setCustomerChannel(null);
            }
        }

        return $this;
    }

    public function getSortNo(): ?int
    {
        return $this->sortNo;
    }

    public function setSortNo(?int $sortNo): self
    {
        $this->sortNo = $sortNo;

        return $this;
    }
}
