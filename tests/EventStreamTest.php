<?php

namespace tests;

use DeSmart\EventSourcing\EventInterface;
use DeSmart\EventSourcing\EventStream;

class EventStreamTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_iterates_through_given_array()
    {
        $events = [
            $this->getMock(EventInterface::class),
            $this->getMock(EventInterface::class),
            $this->getMock(EventInterface::class),
            $this->getMock(EventInterface::class),
        ];

        $stream = new EventStream(...$events);
        
        $iteratedEvents = [];
        foreach ($stream as $event) {
            $iteratedEvents[] = $event;
        }

        $this->assertEquals($events, $iteratedEvents);
    }
}
