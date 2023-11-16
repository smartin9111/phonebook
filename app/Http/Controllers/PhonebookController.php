<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function index()
    {
        $phonebooks = Phonebook::all();
        return response()->json(['phonebooks' => $phonebooks], 200);
    }

    public function show($id)
    {
        $phonebook = Phonebook::find($id);

        if (!$phonebook) {
            return response()->json(['message' => 'Phonebook not found'], 404);
        }

        return response()->json(['phonebook' => $phonebook], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

        ]);

        $phonebook = new Phonebook;
        //$phonebook->name = $request->input('name');
        //$phonebook->phone = $request->input('phone');
        $phonebook->save();

        return response()->json(['phonebook' => $phonebook], 201);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
        ]);

        $phonebook = Phonebook::find($id);

        if (!$phonebook) {
            return response()->json(['message' => 'Phonebook not found'], 404);
        }

        $phonebook->name = $request->input('name');
        $phonebook->phone = $request->input('phone');
        $phonebook->save();

        return response()->json(['phonebook' => $phonebook], 200);
    }

    public function destroy($id)
    {
        $phonebook = Phonebook::find($id);

        if (!$phonebook) {
            return response()->json(['message' => 'Phonebook not found'], 404);
        }

        $phonebook->delete();

        return response()->json(['message' => 'Phonebook deleted'], 200);
    }
}
