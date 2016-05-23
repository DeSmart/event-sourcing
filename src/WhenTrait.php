<?php

namespace DeSmart\EventSourcing;

trait WhenTrait
{
    /**
     * @param EventInterface $event
     * @return void
     */
    protected function when(EventInterface $event)
    {
        $className = explode('\\', get_class($event));
        $classBasename = array_pop($className);

        $method = 'when' . $classBasename;

        if (method_exists($this, $method)) {
            $this->$method($event);
        }
    }
}
