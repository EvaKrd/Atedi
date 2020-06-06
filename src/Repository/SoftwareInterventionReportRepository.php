<?php

namespace App\Repository;

use App\Entity\SoftwareInterventionReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SoftwareInterventionReport|null find($id, $lockMode = null, $lockVersion = null)
 * @method SoftwareInterventionReport|null findOneBy(array $criteria, array $orderBy = null)
 * @method SoftwareInterventionReport[]    findAll()
 * @method SoftwareInterventionReport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoftwareInterventionReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SoftwareInterventionReport::class);
    }

}