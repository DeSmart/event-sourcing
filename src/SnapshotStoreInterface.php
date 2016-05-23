<?php

namespace DeSmart\EventSourcing;

interface SnapshotStoreInterface
{
    /**
     * @param AggregateRootIdInterface $aggregateRootId
     * @return SnapshotInterface
     */
    public function get(AggregateRootIdInterface $aggregateRootId);

    /**
     * @param SnapshotInterface $snapshot
     * @return void
     */
    public function save(SnapshotInterface $snapshot);
}
