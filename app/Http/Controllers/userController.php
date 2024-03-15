<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\user;
use App\Http\Requests\createUserRequest;

class ContactController extends Controller
{
    public function createUser(createUserRequest $request)
    {
        // Memvalidasi dan membuat kontak baru
        $validatedData = $request->validated();
        $contact = user::create($validatedData);

        // Log the response before returning
        $response = [
            'data' => $contact,
            'errors' => null
        ];

        Log::info('Response:', $response);

        // Membuat respons JSON
        return response()->json($response, Response::HTTP_CREATED);
    }


    // Metode lain untuk menangani endpoint lainnya...
}

