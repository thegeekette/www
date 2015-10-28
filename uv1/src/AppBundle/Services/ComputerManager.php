<?php
namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class ComputerManager
{
    private $em ;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return array
     */
    public function getComputers()
    {
        $computers = $this->em->getRepository('AppBundle:Computer')->FindAll();
        return $computers;
    }

    /**
     * @param $value
     */
    public function setEnabledAll($value)
    {
        $computers = $this->em->getRepository('AppBundle:Computer')->FindAll();
        foreach($computers as $computer)
        {
            $computer->setEnabled($value);
            $this->em->persist($computer);
        }
        $this->em->flush();
    }
}