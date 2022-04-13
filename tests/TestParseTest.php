<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Attachement;
use App\Repository\AttachementRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;

class TestParseTest extends TestCase
{
   
    public function testParseAndSaveFile1()
    {
        $dir    = __DIR__.'/../public/files/';

        $attachement = new Attachement();
        $attachement->setName('file1');
        $attachement->setContent(file_get_contents($dir.'file1'));

        $attachementRepository = $this->createMock(AttachementRepository::class);

        $attachementRepository->expects($this->any())
            ->method('find')
            ->willReturn($attachement);

        $objectManager = $this->createMock(ObjectManager::class);

        $objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($attachementRepository);
       
        $this->assertEquals('file1', $attachement->getName());
        $this->assertEquals(file_get_contents($dir.'file1'), $attachement->getContent());
    }

    public function testParseAndSaveFile2()
    {
        $dir    = __DIR__.'/../public/files/';

        $attachement = new Attachement();
        $attachement->setName('file2');
        $attachement->setContent(file_get_contents($dir.'file2'));

        $attachementRepository = $this->createMock(AttachementRepository::class);

        $attachementRepository->expects($this->any())
            ->method('find')
            ->willReturn($attachement);

        $objectManager = $this->createMock(ObjectManager::class);

        $objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($attachementRepository);
       
        $this->assertEquals('file2', $attachement->getName());
        $this->assertEquals(file_get_contents($dir.'file2'), $attachement->getContent());
    }
       
    public function testParseAndSaveFile3()
    {
        $dir    = __DIR__.'/../public/files/';

        $attachement = new Attachement();
        $attachement->setName('file3');
        $attachement->setContent(file_get_contents($dir.'file3'));

        $attachementRepository = $this->createMock(AttachementRepository::class);

        $attachementRepository->expects($this->any())
            ->method('find')
            ->willReturn($attachement);

        $objectManager = $this->createMock(ObjectManager::class);

        $objectManager->expects($this->any())
            ->method('getRepository')
            ->willReturn($attachementRepository);
       
        $this->assertEquals('file3', $attachement->getName());
        $this->assertEquals(file_get_contents($dir.'file3'), $attachement->getContent());
    }
  
}
