<?php

namespace App\Http\Controllers;

use App\Models\Pakket;
use Illuminate\Http\Request;

class PakketController extends Controller
{
    public function index(Request $request)
    {
        $pakket = $request->pakket();

        // Load the user's roles and permissions
        // $pakket->load('roles.permissions');

        // Format the pakket's data
        $pakketData = [
            'title' => $pakket->title,
            'prijs' => $pakket->prijs,
            'prijs_los' => $pakket->prijs_los,
            'aantal_lessen' => $pakket->aantal_lessen,
            'auto' => $pakket->auto,
        ];

        return response()->json($pakketData);
    }

    public function show(Request $request, $id)
    {
        $pakket = Pakket::findOrFail($id);

        // Load the user's roles and permissions
        // $pakket->load('roles.permissions');

        // Format the pakket's data
        $pakketData = [
            'title' => $pakket->title,
            'prijs' => $pakket->prijs,
            'prijs_los' => $pakket->prijs_los,
            'aantal_lessen' => $pakket->aantal_lessen,
            'auto' => $pakket->auto,
        ];

        return response()->json($pakketData);
    }

    /**
     * Display the pakket.
     */
    public function edit(Request $request, $id)
    {
        $pakket = Pakket::findOrFail($id);
        $pakket->load('roles.permissions');

        // Format the pakket's data
        $pakketData = [
            'title' => $pakket->title,
            'prijs' => $pakket->prijs,
            'prijs_los' => $pakket->prijs_los,
            'aantal_lessen' => $pakket->aantal_lessen,
            'auto' => $pakket->auto,
        ];

        return response()->json($pakketData);
    }

    /**
     * Update the pakket's information.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $pakket = Pakket::findOrFail($id);
        $pakket->title = $data['title'];
        $pakket->prijs = $data['prijs'];
        $pakket->Prijs_los = $data['Prijs_los'];
        $pakket->aantal_lessen = $data['aantal_lessen'];
        $pakket->auto = $data['auto'];
        $update = $pakket->save();

        if ($update) {
            return response()->json(['message' => 'Pakket updated successfully', 200]);
        } else {
            return response()->json(['error' => 'Pakket not updated', 500]);
        }
    }

    /**
     * Delete the pakket.
     */
    public function destroy(Request $request, $id)
    {
        $pakket = Pakket::findOrFail($id);
        $delete = $pakket->delete();

        if ($delete) {
            return response()->json(['message' => 'pakket deleted successfully', 200]);
        } else {
            return response()->json(['error' => 'pakket not deleted', 500]);
        }
    }
}
