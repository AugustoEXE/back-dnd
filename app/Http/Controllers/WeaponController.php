<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index(): object
    {
        return response()->json(Weapon::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Weapon::create([
                ...$request->toArray(),
                "cost" => json_encode($request->cost),
                "properties" => json_encode($request->properties),
            ]);
            return response()->json(['status' => 'Success', 'message' => 'Arma criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Weapon $weapon): JsonResponse
    {
        try {
            $weapon->fill([
                ...$request->toArray(),
                "cost" => json_encode($request->cost),
                "properties" => json_encode($request->properties),
            ])->save();
            return response()->json(['status' => 'Success', 'message' => 'Arma alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Weapon $weapon): object
    {
        try {
            $weapon->delete();
            return response()->json(['status' => 'Success', 'message' => 'Arma alterada com excluida']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
