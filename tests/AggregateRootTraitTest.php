<?php

namespace tests;

use DeSmart\EventSourcing\EventStream;
use stubs\AggregateRootStub;
use stubs\CounterWasIncreased;

class AggregateRootTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_records_event()
    {
        $stub = new AggregateRootStub();
        $stub->increaseCounter(100);
        
        $expectedEvents = new EventStream(new CounterWasIncreased(100));

        $this->assertEquals(100, $stub->getCounter());
        $this->assertEquals($expectedEvents, $stub->getRecordedEvents());
    }

    /**
     * @test
     */
    public function it_reconstitutes_state()
    {
        $stream = new EventStream(
            new CounterWasIncreased(100),
            new CounterWasIncreased(50)
        );

        $stub = AggregateRootStub::reconstituteFrom($stream);

        $this->assertInstanceOf(AggregateRootStub::class, $stub);
        $this->assertEquals(150, $stub->getCounter());
    }
}
