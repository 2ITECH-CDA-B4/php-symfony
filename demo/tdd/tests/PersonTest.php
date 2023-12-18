<?php

namespace Glodie\Tests;

use Glodie\Algos\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {
    public function testAgeChild() {
        // ARRANGE
        $person = new Person(10);
        // ACT
        $result = $person->getStatus();
        // ASSERT
        $this->assertEquals('Enfant', $result);  
    }

    
    public function testAgeTeenager() {
        // ARRANGE
        $person = new Person(11);
        // ACT
        $result = $person->getStatus();
        // ASSERT
        $this->assertEquals('Adolescent', $result);  
    }

    public function testAgeAdult() {
        // ARRANGE
        $person = new Person(18);
        // ACT
        $result = $person->getStatus();
        // ASSERT
        $this->assertEquals('Majeur', $result);  
    }

    public function testAgeSenior() {
        // ARRANGE
        $person = new Person(50);
        // ACT
        $result = $person->getStatus();
        // ASSERT
        $this->assertEquals('Senior', $result);  
    }
}