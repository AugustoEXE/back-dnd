<?php

namespace App\Http\Controllers;

use App\Models\damage_type;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DamageTypeController extends Controller
{
    public function index(): object
    {
        return response()->json(damage_type::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            damage_type::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Lingua criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, damage_type $damageType): JsonResponse
    {
        try {
            $damageType->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Lingua alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(damage_type $damageType): object
    {
        try {
            $damageType->delete();
            return response()->json(['status' => 'Success', 'message' => 'Lingua excluida com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
