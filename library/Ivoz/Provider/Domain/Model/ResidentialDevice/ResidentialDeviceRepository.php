<?php

namespace Ivoz\Provider\Domain\Model\ResidentialDevice;

use Doctrine\Common\Collections\Selectable;
use Doctrine\Common\Persistence\ObjectRepository;
use Ivoz\Provider\Domain\Model\Domain\DomainInterface;

interface ResidentialDeviceRepository extends ObjectRepository, Selectable
{
    /**
     * @inheritdoc
     * @param DomainInterface $domain
     * @return mixed
     */
    public function findOneByNameAndDomain(string $name, DomainInterface $domain);
}
