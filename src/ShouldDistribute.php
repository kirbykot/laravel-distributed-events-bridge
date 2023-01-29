<?php

namespace Kirbykot\DistributedEventsBridge;

interface ShouldDistribute
{
    public function isFromSubscription(): bool;
    public function setFromSubscription(): void;
}