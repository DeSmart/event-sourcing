<?php

namespace stubs;

use DeSmart\EventSourcing\AggregateRootTrait;

class AggregateRootStub
{
    use AggregateRootTrait;

    /**
     * @var int
     */
    protected $counter = 0;

    /**
     * @return int
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * @param int $amount
     * @return void
     */
    public function increaseCounter($amount)
    {
        $this->recordThat(new CounterWasIncreased($amount));
    }

    /**
     * @param CounterWasIncreased $event
     * @return void
     */
    private function whenCounterWasIncreased(CounterWasIncreased $event)
    {
        $this->counter += $event->getAmount();
    }
}