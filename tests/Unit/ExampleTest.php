<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }
    public function test_mainpage()
    {
        $response = $this->get('/');
        $this->assertEquals(200, $response->status());
    }

}
