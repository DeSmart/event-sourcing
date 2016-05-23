<?php

namespace stubs;

use DeSmart\EventSourcing\AggregateRootIdInterface;
use DeSmart\EventSourcing\EventInterface;

class CounterWasIncreased implements EventInterface
{
    /**
     * @var int
     */
    protected $amount = 0;

    /**
     * @param int $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return AggregateRootIdInterface
     */
    public function getAggregateRootId()
    {
        // TODO: Implement getAggregateRootId() method.
    }

    /**
     * @param array $payload
     * @return static
     */
    public static function createFromPayload(array $payload)
    {
        // TODO: Implement createFromPayload() method.
    }
}