<?php

namespace DeSmart\EventSourcing;

interface EventStoreInterface
{
    /**
     * @param AggregateRootIdInterface $aggregateRootId
     * @return EventStreamInterface
     */
    public function load(AggregateRootIdInterface $aggregateRootId);

    /**
     * @return EventStreamInterface
     */
    public function loadAll();

    /**
     * @param EventStreamInterface $eventStream
     */
    public function append(EventStreamInterface $eventStream);
}