<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ClassesController extends Controller
{
    public function index(): object
    {
        return response()->json(Classes::with('proficiencies')->get()->toArray());
    }

    public function store(Request $request): JsonResponse
    {
        try {
            Classes::create([
                ...$request->toArray(),
                "proficiencies" => json_encode($request->proficiencies),
                "saving_throws" => json_encode($request->saving_throws),
                "starting_equipment" => json_encode($request->starting_equipment)
            ])->proficiencies()->attach($request->proficiencies);
            return response()->json(['status' => 'Success', 'message' => 'Classe criada com sucesso']);
        } catch (\Throwable $err) {

            return response()->json(['status' => 'error', 'error' =>  (array) $err], 500);
        }
    }

    public function update(Request $request, Classes $Classes): JsonResponse
    {
        try {
            $Classes->fill([
                ...$request->toArray(),
                "proficiencies" => json_encode($request->proficiencies),
                "saving_throws" => json_encode($request->saving_throws),
                "starting_equipment" => json_encode($request->starting_equipment)
            ])->save();
            $Classes->proficiencies()->sync($request->proficiencies);
            return response()->json(['status' => 'Success', 'message' => 'Classe alterada com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }

    public function destroy(Classes $classes): JsonResponse
    {
        try {
            $classes->proficiencies()->detach();
            $classes->delete();
            return response()->json(['status' => 'Success', 'message' => 'Classe excluida com sucesso']);
        } catch (\Throwable $err) {
            return response()->json(['status' => 'error', 'error' => (array) $err], 500);
        }
    }
}
