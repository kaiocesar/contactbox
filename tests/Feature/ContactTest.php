<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase {

    public function testAPIObterContatos() {
        $response = $this->json( 'GET', '/api/contacts' );
        $response->assertStatus( 200 )
            ->assertJsonCount( 1 );
    }

    public function testAPIObterContato() {
        $response = $this->get( '/api/contacts/1' );
        $response->assertStatus( 200 )
            ->assertJsonStructure([
                'id',
                'name',
                'activity',
                'mobile',
                'email',
                'created_at',
                'last_contact',
                'status'
             ]);
    }

    public function testAPIGravarNovoContato() {
        $data = [
            'name' => 'Juliana Evangelista',
            'activity' => 'Farmaceutica',
            'mobile' => '+55 00 4004-3535',
            'email' => 'julianaevangelista@email.com',
            'last_contact' => '2019-12-08 12:01:11',
            'status' => 1
        ];

        $response = $this->json( 'POST', '/api/contacts', $data );

        $response->assertStatus( 200 );
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
