<?php

namespace DeSmart\EventSourcing;

trait AggregateRootIdTrait
{
    /**
     * @var mixed
     */
    private $id;

    /**
     * @param mixed $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->id;
    }

    /**
     * @param AggregateRootIdInterface $aggregateRootId
     * @return bool
     */
    public function equals(AggregateRootIdInterface $aggregateRootId)
    {
        return ($aggregateRootId instanceof static) && (string) $this->id === (string) $aggregateRootId;
    }
}