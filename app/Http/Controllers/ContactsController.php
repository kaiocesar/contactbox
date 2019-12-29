<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller {

    public function index(Request $request) {

        if ( $search =  filter_var( $request->query('search'), FILTER_SANITIZE_STRING) ) {
            return Contact::orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('activity', 'LIKE', "%{$search}%")
                ->orWhere('mobile', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orderBy('last_contact', 'desc')
                ->get();
        }

        return Contact::where( 'status', '1' )
            ->orderBy('last_contact', 'desc')
            ->take(15)
            ->get();
    }

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:56',
                'activity' => 'required|max:56',
                'mobile' => 'required|max:56',
                'email' => 'required|unique:contacts|max:128',
            ]);

            if ( $validator->fails() ) {
                return response()->json(
                    $validator->errors(),
                    400
                );
            }

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->activity = $request->activity;
            $contact->mobile = $request->mobile;
            $contact->email = $request->email;
            $contact->status = $request->status;

            $contact->save();

        } catch (\Illuminate\Database\QueryException $e) {
            return reponse()->json([
                "error" => $e
            ], 500);
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

    public function contacting(Request $request, $id) {
        $contact = Contact::find($id);

        if ($contact) {
            try {
                $contact->last_contact = date( 'Y-m-d H:i:s' );
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
