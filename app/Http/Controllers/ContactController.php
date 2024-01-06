<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts() {
        $contacts=Contact::all();
       return response()->json([
            'contacts' => $contacts,
            "message" => 'Contact',
            "code" => 200
       ]);
    }   
    public function saveContact (Request $request){
        $contact =Contact::create($request->all());
        return response()->json([
            'message' => 'Contact saved',
            'code' => 200
        ]);
    } 
    public function DeleteContact ($id){
        $contact =Contact::find($id);
        if($contact){
            $contact->delete();
            return response()->json([
                'message' => 'Contact deleted',
                'code' =>200
            ]);
        }
    }
}
