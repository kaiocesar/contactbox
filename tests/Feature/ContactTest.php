<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase {

    public function testAPIObterContatos() {
        $response = $this->get( '/api/contatos' );
        $response->assertStatus( 200 );
    }

    public function testAPIObterContato() {
        $response = $this->get( '/api/contato/1' );
        $response->assertStatus( 200 );
    }

    public function testAPIGravarNovoContato() {
        $response = $this->post( '/api/contatos' );
        $response->assertStatus( 200 );
    }

    public function testAPIGravarContatoEditado() {
        $response = $this->post( '/api/contato/1/edit' );
        $response->assertStatus( 200 );
    }

    public function testAPIDeletarContato() {
        $response = $this->delete( '/api/contato/1' );
        $response->assertStatus( 200 );
    }

}
