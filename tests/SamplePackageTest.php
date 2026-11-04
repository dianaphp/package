<?php

namespace Tests;

use Package\SamplePackage;
use PHPUnit\Framework\TestCase;

class SamplePackageTest extends TestCase
{
    public function testTemplateCanBeInstantiated(): void
    {
        self::assertInstanceOf(SamplePackage::class, new SamplePackage());
    }
}
