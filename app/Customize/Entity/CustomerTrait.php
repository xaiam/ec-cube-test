<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $maker_name;

    /**
     * @var CustomerRank | null
     * @ORM\ManyToOne(targetEntity="\Customize\Entity\CustomerRank")
     */
    private $customerRank;

    public function getMaker_name(): ?string
    {
        return $this->maker_name;
    }

    public function setMaker_name(?string $maker_name): self
    {
        $this->maker_name = $maker_name;

        return $this;
    }

    /**
     * @return CustomerRank | null
     */
    public function getCustomerRank(): ?CustomerRank
    {
        return $this->customerRank;
    }

    /**
     * @param mixed $customerRank
     */
    public function setCustomerRank(?CustomerRank $customerRank): self
    {
        $this->customerRank = $customerRank;
        return $this;
    }


}
