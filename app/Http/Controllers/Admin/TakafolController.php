<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Takafol;
use Illuminate\Http\Request;

class TakafolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $takafols = Takafol::query();

        if($keyword = request('search')) {
            $takafols
            ->where('relation_stats', 'LIKE', "%{$keyword}%")
            ->where('takafol_people_count_and_gender', 'LIKE', "%{$keyword}%");
        }

        $takafols = $takafols->latest()->paginate(100);
        return view('admin.takafols.all', compact('takafols'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.takafols.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'hamsar_id' => ['required'],
            'child_id' => ['required'],
            'relation_stats' => ['required', 'string', 'max:255'],
            'takafol_people_count_and_gender' => ['required', 'string', 'max:255'],
        ]);

        Takafol::create($data);

        return redirect(route('admin.takafols.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Takafol $takafol)
    {
        return view('admin.takafols.show', compact('takafol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Takafol $takafol)
    {
        return view('admin.takafols.edit', compact('takafol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Takafol $takafol)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'hamsar_id' => ['required'],
            'child_id' => ['required'],
            'relation_stats' => ['required', 'string', 'max:255'],
            'takafol_people_count_and_gender' => ['required', 'string', 'max:255'],
        ]);

        $takafol->update($data);

        return redirect(route('admin.takafols.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Takafol $takafol)
    {
        $takafol->delete();
        return redirect(route('admin.takafols.index'));
    }
}
