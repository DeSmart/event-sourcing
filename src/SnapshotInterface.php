<?php

namespace DeSmart\EventSourcing;

use DateTimeImmutable;

interface SnapshotInterface
{
    /**
     * @return AggregateRootIdInterface
     */
    public function getAggregateRootId();

    /**
     * @return AggregateRootInterface
     */
    public function getAggregateRoot();

    /**
     * @return int
     */
    public function getAggregateRootVersion();

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt();
}
