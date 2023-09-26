<?php

namespace App\Http\Controllers;

use App\Models\magic_school;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MagicSchoolController extends Controller
{
    public function index(): object
    {
        return response()->json(magic_school::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            magic_school::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'tipo de criatura criado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, magic_school $magic_school): JsonResponse
    {
        try {
            $magic_school->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'tipo de criatura alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(magic_school $magic_school): object
    {
        try {
            $magic_school->delete();
            return response()->json(['status' => 'Success', 'message' => 'tipo de criatura excluido com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
