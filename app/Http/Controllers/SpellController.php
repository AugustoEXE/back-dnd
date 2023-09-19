<?php

namespace App\Http\Controllers;

use App\Models\Spell;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SpellController extends Controller
{
    public function index(): object
    {
        return response()->json(Spell::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Spell::create($request->toArray());
            return response()->json(['status' => 'Success', 'message' => 'Feitiço criado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status'=> 'error', 'error'=> (array)$err], 500);
        }
    }

    public function update(Request $request, Spell $spell): JsonResponse
    {
        try {
            $spell->fill($request->toArray())->save();
            return response()->json(['status' => 'Success', 'message' => 'Feitiço alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status'=> 'error', 'error'=> (array)$err], 500);
        }
    }

    public function destroy(Spell $spell): object
    {
        try {
            $spell->delete();
            return response()->json(['status' => 'Success', 'message' => 'Feitiço alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status'=> 'error', 'error'=> (array)$err], 500);
        }
    }
}
