<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Tests\Entity;
use App\Entity\Product;

/**
 * Description of ProductTest
 *
 * @author Michael
 */
class ProductTest extends \Symfony\Bundle\FrameworkBundle\Tests\TestCase{
    //put your code here
    public function testcomputeTVAProductTypeFood() {
        $product = new Product('nom', Product::FOOD_PRODUCT,10);
        $result = $product->computeTVA();
        $this->assertSame(0.55,$result);
    }
    public function testcomputeTVAProductOtherType() {
        $product = new Product('nom', 'autre',10);
        $result = $product->computeTVA();
        $this->assertSame(1.96,$result);
    }
}
