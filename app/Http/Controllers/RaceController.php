<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index(): object
    {
        return response()->json(Race::all()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Race::create([
                ...$request->toArray(),
                "ability_bonuses" => json_encode($request->ability_bonuses),
                "starting_proficiencies" => json_encode($request->starting_proficiencies),
                "languages" => json_encode($request->languages),
                "traits" => json_encode($request->traits),
                "subraces" => json_encode($request->subraces),

            ]);
            return response()->json(['status' => 'Success', 'message' => 'Raça criada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function update(Request $request, Race $race): JsonResponse
    {
        try {
            $race->fill([
                ...$request->toArray(),
                "ability_bonuses" => json_encode($request->ability_bonuses),
                "starting_proficiencies" => json_encode($request->starting_proficiencies),
                "languages" => json_encode($request->languages),
                "traits" => json_encode($request->traits),
                "subraces" => json_encode($request->subraces),
            ])->save();
            return response()->json(['status' => 'Success', 'message' => 'Raça alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Race $race): object
    {
        try {
            $race->delete();
            return response()->json(['status' => 'Success', 'message' => 'Raça alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
