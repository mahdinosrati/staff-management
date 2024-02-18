<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hamsar;
use Illuminate\Http\Request;

class HamsarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hamsars = Hamsar::query();

        if($keyword = request('search')) {
            $hamsars
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('family', 'LIKE', "%{$keyword}%")
            ->orWhere('father_name', 'LIKE', "%{$keyword}%")
            ->orWhere('kodmeli', 'LIKE', "%{$keyword}%");
        }

        $hamsars = $hamsars->latest()->paginate(100);
        return view('admin.hamsars.all', compact('hamsars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hamsars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'name' => ['required','string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'kodmeli' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:255'],
        ]);

        Hamsar::create($data);

        return redirect(route('admin.hamsars.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hamsar $hamsar)
    {
        return view('admin.hamsars.show', compact('hamsar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hamsar $hamsar)
    {
        return view('admin.hamsars.edit', compact('hamsar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hamsar $hamsar)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'name' => ['required','string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'kodmeli' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:255'],
        ]);

        if(! is_null($request->birth)) {
            $request->validate([
                'birth' => ['required', 'string', 'max:255'],
            ]);

            $data['birth'] = $request->birth;
        }

        $hamsar->update($data);

        return redirect(route('admin.hamsars.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hamsar $hamsar)
    {
        $hamsar->delete();
        return redirect(route('admin.hamsars.index'));
    }
}
