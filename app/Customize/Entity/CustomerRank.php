<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Customize\Repository\CustomerRankRepository")
 */
class CustomerRank
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Customize\Entity\CustomerChannel", inversedBy="customerRanks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customerChannel;


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

    public function getCustomerChannel(): ?CustomerChannel
    {
        return $this->customerChannel;
    }

    public function setCustomerChannel(?CustomerChannel $customerChannel): self
    {
        $this->customerChannel = $customerChannel;

        return $this;
    }


}
