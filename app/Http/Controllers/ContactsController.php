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
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->activity = $request->activity;
            $contact->mobile = $request->mobile;
            $contact->email = $request->email;
            $contact->last_contact = $request->last_contact;
            $contact->status = $request->status;
            $contact->save();
        } catch (\Illuminate\Database\QueryException $e) {
            return [
                "error" => $e
            ];
        }

        return [
            "error" => false,
            "contact" => $contact
        ];

    }

    public function show($id) {
        $contact = Contact::find($id);
        if (!$contact) return [];
        return $contact;
    }

    public function update(Request $request, $id) {
        $contact = Contact::find($id);

        if ($contact) {
            try {
                $contact->name = $request->name;
                $contact->activity = $request->activity;
                $contact->mobile = $request->mobile;
                $contact->email = $request->email;
                $contact->save();
            } catch (\Illuminate\Database\QueryException $e) {
                return [
                    "error" => $e
                ];
            }
        }
        return [
            "error" => false,
            "contact" => $contact
        ];
    }

    public function destroy($id) {
        try {
            Contact::destroy($id);
        } catch (\Illuminate\Database\QueryException $e) {
            return [
                "error" => $e
            ];
        }
        return [
            "error" => false
        ];
    }
}
