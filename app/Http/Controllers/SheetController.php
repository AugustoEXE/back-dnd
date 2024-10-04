<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SheetController extends Controller
{
    public function index(): object
    {
        return response()->json(Sheet::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Sheet::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Ficha Criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Sheet $damageType): JsonResponse
    {
        try {
            $damageType->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Tipo de dano alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Sheet $damageType): object
    {
        try {
            $damageType->delete();
            return response()->json(['status' => 'Success', 'message' => 'Tipo de dano excluido com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
