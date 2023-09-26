<?php

namespace App\Http\Controllers;

use App\Models\Spell;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use ReflectionClass;

class SpellController extends Controller
{
    public function index(): object
    {
        return response()->json(Spell::with(['magic_school', 'class'])->get()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {

            $spell = Spell::create($request->toArray());
            $spell->magic_school()->attach($request->schools);
            $spell->class()->attach($request->classes);

            return response()->json(['status' => 'Success', 'message' => 'Feitiço criado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array)$err], 500);
        }
    }

    public function update(Request $request, Spell $spell): JsonResponse
    {
        try {
            $spell->fill($request->toArray())->save();
            $spell->magic_school()->sync($request->schools);
            $spell->class()->sync($request->classes);

            return response()->json(['status' => 'Success', 'message' => 'Feitiço alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array)$err], 500);
        }
    }

    public function destroy(Spell $spell): object
    {
        try {
            $spell->magic_school()->detach();
            $spell->class()->detach();
            $spell->delete();

            return response()->json(['status' => 'Success', 'message' => 'Feitiço alterado com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array)$err], 500);
        }
    }
}
