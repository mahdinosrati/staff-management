<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Encouragement;
use Illuminate\Http\Request;

class EncouragementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encouragements = Encouragement::query();

        if($keyword = request('search')) {
            $encouragements
            ->where('karmand_id', 'LIKE', "%{$keyword}%")
            ->orWhere('description', 'LIKE', "%{$keyword}%")
            ->orWhere('number', 'LIKE', "%{$keyword}%");
        }

        $encouragements = $encouragements->latest()->paginate(100);
        return view('admin.encouragements.all', compact('encouragements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.encouragements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'date' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
        ]);

        Encouragement::create($data);

        return redirect(route('admin.encouragements.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Encouragement $encouragement)
    {
        return view('admin.encouragements.show', compact('encouragement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Encouragement $encouragement)
    {
        return view('admin.encouragements.edit', compact('encouragement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Encouragement $encouragement)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'description' => ['required', 'string', 'max:255'],
            'number' => ['required', 'integer'],
        ]);

        if(! is_null($request->date)) {
            $request->validate([
                'date' => ['required', 'string', 'max:255'],
            ]);

            $data['date'] = $request->date;
        }

        $encouragement->update($data);

        return redirect(route('admin.encouragements.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Encouragement $encouragement)
    {
        $encouragement->delete();
        return redirect(route('admin.encouragements.index'));
    }
}
