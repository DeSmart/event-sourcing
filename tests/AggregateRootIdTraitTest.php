<?php

namespace tests;

use stubs\BarId;
use stubs\FooId;

class AggregateRootIdTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_converts_id_to_string()
    {
        $id = new FooId(123);
        
        $this->assertEquals('123', (string) $id);
    }

    /**
     * @test
     */
    public function it_checks_if_ids_of_same_type_equal()
    {
        $firstId = new FooId(1);

        $this->assertTrue($firstId->equals($firstId));
        $this->assertFalse($firstId->equals(new FooId(2)));
    }

    /**
     * @test
     */
    public function it_fails_checking_ids_of_different_type()
    {
        $id = new FooId(1);

        $this->assertFalse($id->equals(new BarId(1)));
    }
}
