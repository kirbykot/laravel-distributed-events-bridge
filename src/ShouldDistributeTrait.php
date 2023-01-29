<?php

namespace Kirbykot\DistributedEventsBridge;

trait ShouldDistributeTrait
{
    private bool $fromSubscription = false;

    public function isFromSubscription(): bool
    {
        return $this->fromSubscription;
    }
    public function setFromSubscription(): void
    {
        $this->fromSubscription = true;
    }
}