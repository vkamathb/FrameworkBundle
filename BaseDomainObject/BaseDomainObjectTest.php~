<?php

namespace BaseDomainBundle\Entity;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

require_once 'PHPUnit/Autoload.php';

abstract class BaseDomainObjectTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    
    /**
     * {@inheritDoc}
     */
    // Entry point of the Test case as the connection is set up to the database.
    public function setup()
    {
        self::bootKernel();
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager(); 
    }

    public function create($repository, $product)
    {
        $this->em->persist($product);
        $this->em->flush();

        $id = $product->getId();

        $createdItem = $this->em->getRepository($repository)->find($id);
        $this->assertNotNull($createdItem);
        
        return $id;
    }

    public function read($repository, $id)
    {
        echo $id.$repository;
        $readItem = $this->em
            ->getRepository($repository)
            ->find($id);
        $this->assertNotNull($readItem);
        
        return $readItem;
    }


    public function updateFetch($repository, $id)
    {
        $updateItem = $this->em->getRepository($repository)->find($id);
        $this->assertNotNull($updateItem);
        
        return $updateItem;
    }
    
    public function updateFlush($updatedItem)
    {   
        $this->em->persist($updatedItem);
        $this->em->flush();
        $this->assertNotNull($updatedItem); 
        
        return $updatedItem;
    }

    public function delete($repository, $id)
    {
        $deleteItem = $this->em->getRepository($repository)->find($id);
        $this->assertNotNull($deleteItem);
        
        $this->em->remove($deleteItem);
        $this->em->flush();

        $this->assertNull($deleteItem->getId());
    }

    /**
     * {@inheritDoc}
     */
    public function teardown()
    {
        parent::tearDown();
        $this->em->close();
    }
}
?>
