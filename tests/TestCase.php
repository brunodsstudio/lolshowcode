<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected $seed = true;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
        
    }

    
}
