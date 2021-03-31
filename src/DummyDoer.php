<?php


namespace Testsoft\PackageTestSupport;


use Testsoft\PackageInterface\DoerInterface;

class DummyDoer implements DoerInterface
{
    public function doit(): void
    {
        // does not matter
    }
}