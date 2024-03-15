<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;

class addressController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'id_contact' => 'required|exists:contacts,id',
            'street' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'country' => 'required|string',
            'postal_code' => 'required|string',
        ]);

        $address = Address::create($request->all());

        return response()->json([
            'data' => $address,
            'errors' => null
        ], 201);
    }

    public function getAddress(Request $request, $id)
    {
        // Logic for getting address by ID
        $address = Address::findOrFail($id);

        return response()->json([
            'data' => $address,
            'errors' => null
        ]);
    }

    public function updateAddress(Request $request, $id)
    {
        // Logic for updating address
        $address = Address::findOrFail($id);
        $address->update($request->all());

        return response()->json([
            'data' => $address,
            'errors' => null
        ]);
    }

    public function deleteAddress(Request $request, $id)
    {
        // Logic for deleting address
        $address = Address::findOrFail($id);
        $address->delete();

        return response()->json([
            'data' => true,
            'errors' => null
        ]);
    }
}
