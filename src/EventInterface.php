<?php

namespace DeSmart\EventSourcing;

interface EventInterface
{
    /**
     * @return AggregateRootIdInterface
     */
    public function getAggregateRootId();

    /**
     * @param array $payload
     * @return EventInterface
     */
    public static function createFromPayload(array $payload);
}