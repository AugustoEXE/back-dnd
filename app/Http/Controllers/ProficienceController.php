<?php

namespace App\Http\Controllers;

use App\Models\Proficience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProficienceController extends Controller
{
    public function index(): object
    {
        return response()->json(Proficience::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Proficience::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Lingua criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Proficience $Proficience): JsonResponse
    {
        try {
            $Proficience->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Lingua alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Proficience $Proficience): object
    {
        try {
            $Proficience->delete();
            return response()->json(['status' => 'Success', 'message' => 'Lingua excluida com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
