<?php

namespace App\Http\Controllers;

use App\Models\Rarity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RarityController extends Controller
{
    public function index(): object
    {
        return response()->json(Rarity::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Rarity::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'radidade criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Rarity $rarity): JsonResponse
    {
        try {
            $rarity->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'radidade alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Rarity $rarity): object
    {
        try {
            $rarity->delete();
            return response()->json(['status' => 'Success', 'message' => 'radidade excluida com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
