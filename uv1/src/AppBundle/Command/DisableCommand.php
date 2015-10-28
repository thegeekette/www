<?php
// src/AppBundle/Command/DDisableCommand.php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\ComputerRepository as ComputerRepository;

class DisableCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('park:computer:setEnabledAll')
            ->setDescription('Change the status of all the computers')
            ->addArgument(
                'value',
                InputArgument::REQUIRED,
                'What is the value (integer)?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $enabled = $input->getArgument('value');
        $this->getContainer()->get('park.computer_manager')->setEnabledAll($enabled);

        /* sans utiliser le computerManager
        $em=$this->getContainer()->get('doctrine')->getEntityManager();
        $computers = $em->getRepository('AppBundle:Computer')->FindAll();
        foreach($computers as $computer)
        {
            $computer->setEnabled($enabled);
            $em->persist($computer);
        }
        $em->flush();
        */

        //$output->writeln($text);
    }
}