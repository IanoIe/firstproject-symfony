<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixture extends Fixture {

    public const FRUIT_CATEGORY = 'FRUIT_CATEGORY';
    public const INFORMATIC = 'INFORMATIC';

    public function load(ObjectManager $manager): void {

        // Category Fruit
        $category = new Category();
        $category->setTitle('Fruits');
        $manager->persist($category);
        $this->addReference(self::FRUIT_CATEGORY, $category);

        // Category Informatique
        $category = new Category();
        $category->setTitle('Informatique');
        $manager->persist($category);
        $this->addReference(self::INFORMATIC, $category);

        $manager->flush();
    }

}
