<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        return response()->json([
            'data' => $contact,
            'errors' => null
        ], 201);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $size = $request->input('size', 10); // default size 10
        $page = $request->input('page', 1); // default page 1

        // Logic for searching contacts based on provided parameters
        $contacts = Contact::where('first_name', 'like', "%$name%")
                           ->orWhere('last_name', 'like', "%$name%")
                           ->orWhere('phone', 'like', "%$phone%")
                           ->orWhere('email', 'like', "%$email%")
                           ->paginate($size);

        return response()->json([
            'data' => $contacts->items(),
            'errors' => null,
            'meta' => [
                'total' => $contacts->total(),
                'per_page' => $contacts->perPage(),
                'current_page' => $contacts->currentPage(),
                'last_page' => $contacts->lastPage(),
            ]
        ]);
    }
}
