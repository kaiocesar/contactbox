<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Faker\Generator as Faker;
use App\Contact;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $faker;

    public function setUp(): void {
        parent::setUp();
        $this->artisan( 'migrate' );
        $this->faker = factory(Contact::class)->create();
    }

    public function tearDown(): void {
        $this->artisan( 'migrate:reset' );
        parent::tearDown();
    }

}
