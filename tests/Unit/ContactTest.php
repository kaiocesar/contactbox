<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;


class ContactTest extends TestCase {

    public function testDBObterContatos() {
        $contacts = DB::select('SELECT * FROM contacts');
        $this->assertTrue( len( $contacts ) == 0 );
    }

    public function testDBGravarContatoAdicionado() {
        $this->assertTrue( false );
    }

    public function testDBObterContatoParaEditar() {
        $this->assertTrue( false );
    }

    public function testDBGravarContatoEditado() {
        $this->assertTrue( false );
    }

    public function testDBDeletarContato() {
        $this->assertTrue( false );
    }

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
