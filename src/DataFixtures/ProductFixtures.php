<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\DataFixtures\CategoryFixture;
use App\Entity\Category;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        $product = new Product();
        $product->setTitle('Banana');
        $product->setCategory($this->getReference(CategoryFixture::FRUIT_CATEGORY, Category::class));
        $product->setPrice(3.50);
        $manager->persist($product);

        $product1 = new Product();
        $product1->setTitle('Orange');
        $product1->setCategory($this->getReference(CategoryFixture::FRUIT_CATEGORY, Category::class));
        $product1->setPrice(4.50);
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setTitle('MSI');
        $product2->setCategory($this->getReference(CategoryFixture::INFORMATIC, Category::class));
        $product2->setPrice(4.50);
        $manager->persist($product2);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [CategoryFixture::class];
    }
}
