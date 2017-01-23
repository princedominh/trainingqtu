<?php
namespace QTU\TkbBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use QTU\TkbBundle\Entity;

/**
 * Description of MirCommand
 *
 */
class MirCommand extends ContainerAwareCommand{
    protected function configure()
    {
        $this
            ->setName('tkb:mir')
            ->setDescription('Chuyen du lieu')
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //get all course
//        $em = $this->getContainer()->get('doctrine')->getEntityManager('TkbBundle:Course');
        $courses = $this->getContainer()->get('doctrine')->getRepository('QTUTkbBundle:Course')->findAll();    
        $em = $this->getContainer()->get('doctrine')->getManager();
        
//        foreach ($courses as $course) {
//            $course->setStartAt(new \DateTime('2015-03-02'));
//            $course->setStopAt(new \DateTime('2015-06-28'));
//            $em->persist($course);
//        }
//        $em->flush();
        
        $output->writeln("<comment>Toi day</comment>");
    }    
}
