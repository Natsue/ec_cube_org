<?php

namespace Eccube\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DelivTimeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DelivTimeRepository extends EntityRepository
{
    public function findOrCreate(array $conditions)
    {
        $DelivTime = $this->findOneBy($conditions);

        if ($DelivTime instanceof \Eccube\Entity\DelivTime) {
            return $DelivTime;
        }

        $DelivTime = new \Eccube\Entity\DelivTime();
        $DelivTime
            ->setDelivId($conditions['deliv_id'])
            ->setDeliv($conditions['Deliv'])
            ->setTimeId($conditions['time_id']);

        return $DelivTime;
    }
}
