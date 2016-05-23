<?php

namespace stubs;

use DeSmart\EventSourcing\AggregateRootIdInterface;
use DeSmart\EventSourcing\AggregateRootIdTrait;

class FooId implements AggregateRootIdInterface
{
    use AggregateRootIdTrait;
}