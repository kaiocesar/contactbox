<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use App\Contact;
use Tests\TestCase;


class ContactTest extends TestCase {

    public function testDBObterContatos() {
        $contacts = Contact::where('status', '1')->get();
        $this->assertTrue( count( $contacts ) == 1 );
    }

    public function testDBGravarContatoAdicionado() {
        $contact = new Contact();
        $contact->name = 'Juliana Evangelista';
        $contact->activity = 'Farmaceutica';
        $contact->mobile = '1330030001';
        $contact->email = 'julianaevangelista@email.com';
        $contact->last_contact = '2019-12-04';
        $contact->status = '1';
        $contact->save();

        $this->assertArrayHasKey('created_at', $contact);
    }

    public function testDBObterContatoParaEditar() {
        $contacts = Contact::where('id', '1')->get();
        $this->assertTrue( count( $contacts ) > 0);
    }

    public function testDBGravarContatoEditado() {
        $contacts = Contact::where('id', '1')->get();
        if ( count( $contacts ) ) {
            $contacts[0]->name = 'Juliana Evangelista';
            $contacts[0]->save();
        }
        $this->assertTrue( $contacts[0]->name == 'Juliana Evangelista' );
    }

    public function testDBDeletarContato() {
        Contact::where('id', '1')->delete();
        $contacts = Contact::where('id', '1')->get();
        $this->assertTrue( count( $contacts ) == 0 );
    }

}
