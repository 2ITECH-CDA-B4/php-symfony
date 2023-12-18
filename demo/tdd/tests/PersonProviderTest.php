<?php

namespace Glodie\Tests;

use Glodie\Algos\Person;
use PHPUnit\Framework\TestCase;

class PersonProviderTest extends TestCase {
    /**
     * @dataProvider statusProvider
     */
    public function testStatus(int $age, string $expected) {
        // ARRANGE
        $person = new Person($age);
        // ACT
        $result = $person->getStatus();
        // ASSERT
        $this->assertEquals($expected, $result);  
    }

    /**
     * @codeCoverageIgnore
     */
    public function statusProvider() : array {
        return [
            [10, 'Enfant'],
            [12, 'Adolescent'],
            [1, 'Enfant'],
            [18, 'Majeur'],
            [50, 'Senior'],
            [100, 'Senior']
        ];
    }

}