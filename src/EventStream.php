<?php

namespace DeSmart\EventSourcing;

final class EventStream implements EventStreamInterface
{
    /**
     * @var \ArrayIterator
     */
    protected $events;

    /**
     * @param EventInterface[] ...$events
     */
    public function __construct(EventInterface ...$events)
    {
        $this->events = new \ArrayIterator($events);
    }

    /**
     * @return EventInterface
     */
    public function current()
    {
        return $this->events->current();
    }

    /**
     * @return void
     */
    public function next()
    {
        $this->events->next();
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return $this->events->key();
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->events->valid();
    }

    /**
     * @return void
     */
    public function rewind()
    {
        $this->events->rewind();
    }
}