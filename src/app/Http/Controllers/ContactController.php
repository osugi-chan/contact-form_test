<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
   {
    $contact = $request->only([
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel1',
        'tel2',
        'tel3',
        'address',
        'building',
        'category_id',
        'detail']);

        $tel = $request->input('tel1') . '-' . $request->input('tel2') . '-' . $request->input('tel3');
        $contact['tel'] = $tel;

        $fullName = $request->input('last_name') . ' ' . $request->input('first_name');
        $contact['name'] = $fullName;

        $category = Category::find($contact['category_id']);
        $contact['category_name'] = $category ? $category->content : '未選択';

        return view('confirm',compact('contact'));
    }

    public function store(ContactRequest $request) {

        $genderInput = $request->input('gender');
        $genderMap = [
        'male' => 1,
        'female' => 2,
        'other' => 3,
        ];
        $gender = $genderMap[$genderInput] ?? null;

        Contact::create([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'gender' => $gender,
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
            'category_id' => $request->input('category_id'),
            'detail' => $request->input('detail'),
        ]);

        return view('thanks');

}

}
