<?php

namespace App\Http\Controllers;

use App\Models\creature_type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreatureTypeController extends Controller
{
    public function index(): object
    {
        return response()->json(creature_type::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            creature_type::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'tipo de criatura criado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, creature_type $creature_type): JsonResponse
    {
        try {
            $creature_type->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'tipo de criatura alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(creature_type $creature_type): object
    {
        try {
            $creature_type->delete();
            return response()->json(['status' => 'Success', 'message' => 'tipo de criatura excluido com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
