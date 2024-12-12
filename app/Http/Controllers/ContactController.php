<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function ContactClass (Request $req){
        $contact = new Contact();
        $contact -> id = $req -> id;
        $contact -> name = $req -> name;
        $contact -> phone = $req -> phone;
        $contact -> email = $req -> email;
        $result = $contact-> save();
        if ($result) {
            return [
                "status" => "data save succcessfully"
            ];
        } else {
            return [
                "status" => "data not save"
            ];
        }
    }
    function getContactClass() {
        $data = Contact::all();
        return response()->json([
            "data"=> $data
        ]);
    }
}
