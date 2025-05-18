<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class UserController extends Controller
{
    public function index()
    {
        $contacts = Contact::Paginate(7);
        return view('admin',['contacts' => $contacts]);
    }
}
