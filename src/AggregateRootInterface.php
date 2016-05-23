<?php

namespace DeSmart\EventSourcing;

interface AggregateRootInterface
{
    /**
     * @return AggregateRootIdInterface
     */
    public function getAggregateRootId();

    /**
     * @param EventStreamInterface $eventStream
     * @return static
     */
    public static function reconstituteFrom(EventStreamInterface $eventStream);

    /**
     * @return EventStreamInterface
     */
    public function getRecordedEvents();
}