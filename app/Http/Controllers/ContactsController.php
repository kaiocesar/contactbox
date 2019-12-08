<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller {

    public function index() {
        return Contact::where( 'status', '1' )
            ->orderBy('last_contact', 'desc')
            ->take(15)
            ->get();
    }

    public function store(Request $request) {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->activity = $request->activity;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->last_contact = $request->last_contact;
        $contact->status = $request->status;

        return $contact->save();
    }

    public function show($id) {
        return Contact::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return [];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return [];
    }
}
