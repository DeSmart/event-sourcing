<?php

namespace DeSmart\EventSourcing;

interface AggregateRootIdInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @param AggregateRootIdInterface $aggregateRootId
     * @return bool
     */
    public function equals(AggregateRootIdInterface $aggregateRootId);
}