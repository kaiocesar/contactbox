<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase {

    public function testAPIObterContatos() {
        $response = $this->get( '/api/contacts' );
        $response->assertStatus( 200 )
            ->assertJson([
                'created_at' => '2019-12-08'
            ]);
    }

    public function testAPIObterContato() {
        $response = $this->get( '/api/contacts/1' );
        $response->assertStatus( 200 )
            ->assertJson([
                'created_at' => '2019-12-08'
            ]);
    }

    public function testAPIGravarNovoContato() {
        $response = $this->post( '/api/contacts' );
        $response->assertStatus( 200 )
            ->assertJson([
                'created_at' => '2019-12-08'
            ]);
    }

    public function testAPIGravarContatoEditado() {
        $response = $this->put( '/api/contacts/1' );
        $response->assertStatus( 200 )
            ->assertJson([
                'created_at' => '2019-12-08'
            ]);
    }

    public function testAPIDeletarContato() {
        $response = $this->delete( '/api/contacts/1' );
        $response->assertStatus( 200 )
            ->assertJson([
                'created_at' => '2019-12-08'
            ]);
    }

}
