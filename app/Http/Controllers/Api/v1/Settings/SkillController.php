<?php

namespace App\Http\Controllers\Api\v1\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Skill::class);

        $per_page = $request->input('per_page', 100);
        $sort_by = $request->input('sort_by', 'name');
        $sort_dir = $request->input('sort_dir', 'asc');
        $search = $request->input('search');
        $archived = $request->input('archived');
        $datatable_draw = $request->input('draw'); // if any

        $archived = $archived == 'yes' ? true : ($archived == 'no' ? false : null);
        
        $skills = Skill::where( function ($query) use ($archived) {
            if ($archived !== null ) {
                if ($archived === true ) {
                    $query->whereNotNull('archived_at');
                } else {
                    $query->whereNull('archived_at');
                }                 
            }
        })->where( function($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%");
        })->orderBy($sort_by, $sort_dir);

        if ($per_page === 'all' || $per_page <= 0 ) {
            $results = $skills->get();
            $skills = new \Illuminate\Pagination\LengthAwarePaginator($results, $results->count(), -1);
        } else {
            $skills = $skills->paginate($per_page);
        }
        
        $response = collect([
            'status' => true, 
            'message' => "Successful."
        ])->merge($skills)->merge(['draw' => $datatable_draw]);
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Http\Requests\SkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request)
    {
        // Authorization is declared in the Form Request

        // Retrieve the validated input data...
        $validatedData = $request->validated();
        $skill = Skill::create($validatedData);
        if ($skill) {
            return response()->json([
                'status' => true, 
                'message' => "Skill \"{$skill->name}\" created successfully.",
                'data' => Skill::find($skill->id)
            ], 201);
        } else {
            return response()->json([
                'status' => false, 
                'message' => "Could not complete request.",
            ], 400);
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::findOrFail($id);

        $this->authorize('view', [Skill::class, $skill]);
        
        return response()->json([
            'status' => true, 
            'message' => "Successful.",
            'data' => $skill
        ], 200);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Http\Requests\SkillRequest  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillRequest $request, $id)
    {
        // Authorization is declared in the SkillRequest

        // Retrieve the validated input data....
        $validatedData = $request->validated();
        $skill = Skill::findOrFail($id);
        $skill->update($validatedData);
        return response()->json([
            'status' => true, 
            'message' => "Skill \"{$skill->name}\" updated successfully.",
            'data' => Skill::find($skill->id)
        ], 200);
    }

    /**
     * Archive the specified resource from active list.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function archive($id)
    {
        $skill = Skill::findOrFail($id);

        $this->authorize('delete', [Skill::class, $skill]);

        $skill->archived_at = now();
        $skill->save();

        return response()->json([
            'status' => true, 
            'message' => "Skill \"{$skill->name}\" archived successfully.",
            'data' => Skill::find($skill->id)
        ], 200);
    }

    /**
     * Unarchive the specified resource from archived storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function unarchive($id)
    {
        $skill = Skill::findOrFail($id);

        $this->authorize('delete', [Skill::class, $skill]);

        $skill->archived_at = null;
        $skill->save();

        return response()->json([
            'status' => true, 
            'message' => "Skill \"{$skill->name}\" unarchived successfully.",
            'data' => Skill::find($skill->id)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);

        $this->authorize('delete', [Skill::class, $skill]);

        $name = $skill->name;
        // check if the record is linked to other records
        $relatedRecordsCount = related_records_count(Skill::class, $skill);

        if ($relatedRecordsCount <= 0) {
            $skill->delete();
            return response()->json([
                'status' => true, 
                'message' => "Skill \"{$name}\" deleted successfully.",
            ], 200);
        } else {
            return response()->json([
                'status' => false, 
                'message' => "The \"{$name}\" record cannot be deleted because it is associated with {$relatedRecordsCount} other record(s). You can archive it instead.",
            ], 400);
        }              
    }
}
