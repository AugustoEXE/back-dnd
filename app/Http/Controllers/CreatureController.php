<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreatureController extends Controller
{
    public function index(): object
    {
        return response()->json(Creature::with('creature_types')->get()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Creature::create([
                ...$request->toArray(),
                "armor_class" => json_encode($request->armor_class),
                "proficiencies" => json_encode($request->proficiencies),
            ])->creature_types()->attach($request->types);


            return response()->json(['status' => 'Success', 'message' => 'Criatura criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Creature $creature): JsonResponse
    {
        try {
            $creature
                ->fill([
                    ...$request->toArray(),
                    "armor_class" => json_encode($request->armor_class),
                    "proficiencies" => json_encode($request->proficiencies),
                ])
                ->save();

            $creature
                ->creature_types()
                ->sync($request->types);

            return response()->json(['status' => 'Success', 'message' => 'Criatura alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Creature $creature): object
    {
        try {
            $creature
                ->creature_types()
                ->detach();

            $creature->delete();
            return response()->json(['status' => 'Success', 'message' => 'Criatura alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
