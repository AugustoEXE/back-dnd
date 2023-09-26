<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(): object
    {
        return response()->json(Language::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Language::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Lingua criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Language $Language): JsonResponse
    {
        try {
            $Language->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Lingua alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Language $Language): object
    {
        try {
            $Language->delete();
            return response()->json(['status' => 'Success', 'message' => 'Lingua excluida com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
