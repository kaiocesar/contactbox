<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Faker\Generator as Faker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $faker;

    public function setUp(): void {
        parent::setUp();
        $this->faker = Faker::create();
    }

    public function tearDown(): void {
        $this->artisan( 'migrate:reset' );
        parent::tearDown();
    }

}
