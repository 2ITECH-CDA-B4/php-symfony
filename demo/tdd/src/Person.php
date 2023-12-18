<?php

namespace Glodie\Algos;
class Person {
    private int $age;
    public function __construct(int $age) {
        $this->age = $age;
    }

    public function getStatus() : string {
        if($this->age <= 10) {
            return 'Enfant';
        } elseif( $this->age < 18) {
            return 'Adolescent';
        } elseif($this->age < 50) {
            return 'Majeur';
        }
        return 'Senior';
    }
}