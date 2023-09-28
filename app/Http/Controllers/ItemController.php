<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(): object
    {
        return response()->json(Item::with('rarities')->get()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Item::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Item criado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Item $item): JsonResponse
    {
        try {
            $item->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Item alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Item $item): object
    {
        try {
            $item->delete();
            return response()->json(['status' => 'Success', 'message' => 'Item excluido com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
