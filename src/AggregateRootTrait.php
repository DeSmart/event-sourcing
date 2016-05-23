<?php

namespace DeSmart\EventSourcing;

trait AggregateRootTrait
{
    use WhenTrait;

    /**
     * @var AggregateRootIdInterface
     */
    protected $id;
    
    /**
     * @var EventInterface[]
     */
    protected $events = [];

    /**
     * @return AggregateRootIdInterface
     */
    public function getAggregateRootId()
    {
        return $this->id;
    }

    /**
     * @param EventStreamInterface $eventStream
     * @return static
     */
    public static function reconstituteFrom(EventStreamInterface $eventStream)
    {
        $aggregateRoot = new static;

        foreach ($eventStream as $event) {
            $aggregateRoot->when($event);
        }

        return $aggregateRoot;
    }

    /**
     * or maybe we should return event stream?
     * @return EventStreamInterface
     */
    public function getRecordedEvents()
    {
        return new EventStream(...$this->events);
    }

    /**
     * @param EventInterface $event
     * @return self
     */
    protected function recordThat(EventInterface $event)
    {
        $this->events[] = $event;
        $this->when($event);

        return $this;
    }
}