<?php

namespace App\Command;

use App\Entity\Attachement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ParseFileCommand extends Command
{
    protected static $defaultName = 'file:parse';

    private $em;

    public function __construct(EntityManagerInterface $em) {
        parent::__construct();
        $this->em = $em;
        
    }

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Parse Files .')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Parse Files.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Start Parsing');
        $dir    = __DIR__.'/../../public/files/';
        $files = scandir($dir);
        foreach($files as $file) {
            $attachement = new Attachement;
            if (str_contains($file, 'file')) {
                $output->writeln("   Parse $file ....");
                $content = file_get_contents($dir.$file);
                $attachement->setName($file);
                $attachement->setContent($content);
                $this->em->persist($attachement);
                $this->em->flush();
                $output->writeln("   End parse $file");
            }
        }
        $output->writeln("End parsing");
       return 0 ;
    }
}