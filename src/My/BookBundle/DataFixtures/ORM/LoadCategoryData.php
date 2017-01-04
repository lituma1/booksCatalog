<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadCategoryData
 *
 * @author pp
 */
namespace MyBookBundle\DataFixtures\ORM;

use \Doctrine\Common\DataFixtures\AbstractFixture;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use \Doctrine\Common\Persistence\ObjectManager;
use My\BookBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface{
    
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        $category1 = new Category();
        $category1->setName('sci-fi');
        $this->addReference('sci-fiCategory', $category1);
        
        $category2 = new Category();
        $category2->setName('fantasy');
        $this->addReference('fantasyCategory', $category2);
        
        $category3 = new Category();
        $category3->setName('horror');
        $this->addReference('horrorCategory', $category3);
        
        $category4 = new Category();
        $category4->setName('dramat');
        $this->addReference('dramatCategory', $category4);
        
        
        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->persist($category4);
        
        $manager->flush();
    }

}
