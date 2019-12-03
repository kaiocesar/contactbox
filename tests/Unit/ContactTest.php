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
        $this->assertTrue( false );
    }

    public function testAPIObterContato() {
        $this->assertTrue( false );
    }

    public function testAPIGravarNovoContato() {
        $this->assertTrue( false );
    }

    public function testAPIGravarContatoEditado() {
        $this->assertTrue( false );
    }

    public function testAPIDeletarContato() {
        $this->assertTrue( [] );
    }

}
