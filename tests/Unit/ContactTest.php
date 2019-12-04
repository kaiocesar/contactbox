<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use App\Contact;
use Tests\TestCase;


class ContactTest extends TestCase {

    public function testDBObterContatos() {
        $contacts = DB::select('SELECT * FROM contacts');
        $this->assertTrue( count( $contacts ) == 1 );
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

}
