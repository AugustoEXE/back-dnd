<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WeaponCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): object
    {
        return response()->json(WeaponCategory::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            WeaponCategory::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Categoria criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, WeaponCategory $WeaponCategory): JsonResponse
    {
        try {
            $WeaponCategory->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Categoria alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(WeaponCategory $WeaponCategory): object
    {
        try {
            $WeaponCategory->delete();
            return response()->json(['status' => 'Success', 'message' => 'Categoria excluida com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
