<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personals = Personal::query();

        if($keyword = request('search')) {
            $personals
            ->where('name', 'LIKE', "%{$keyword}%")
            ->where('family', 'LIKE', "%{$keyword}%")
            ->where('father_name', 'LIKE', "%{$keyword}%")
            ->where('kodmeli', 'LIKE', "%{$keyword}%")
            ->orWhere('cellphone', 'LIKE', "%{$keyword}%");
        }

        $personals = $personals->latest()->paginate(100);
        return view('admin.personals.all', compact('personals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.personals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'sh_personeli' => ['required', 'string', 'max:255'],
            'sh_class' => ['required', 'string', 'max:255'],
            'current_rank' => ['required', 'string', 'max:255'],
            'lastp' => ['required', 'string', 'max:255'],
            'org_rank' => ['required', 'string', 'max:255'],
            'hdate' => ['required', 'string', 'max:255'],
            'recruitment_type' => ['required', 'string', 'max:255'],
            'register_type' => ['required', 'string', 'max:255'],
            'last_edu_degree' => ['required', 'string', 'max:255'],
            'edu_field' => ['required', 'string', 'max:255'],
            'sh_shenas' => ['required', 'string', 'max:255'],
            'duty_status' => ['required', 'string', 'max:255'],
            'physical_condition' => ['required', 'string', 'max:255'],
        ]);

        Personal::create($data);

        return redirect(route('admin.personals.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        return view('admin.personals.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view('admin.personals.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'sh_personeli' => ['required', 'string', 'max:255'],
            'sh_class' => ['required', 'string', 'max:255'],
            'current_rank' => ['required', 'string', 'max:255'],
            'org_rank' => ['required', 'string', 'max:255'],
            'recruitment_type' => ['required', 'string', 'max:255'],
            'register_type' => ['required', 'string', 'max:255'],
            'last_edu_degree' => ['required', 'string', 'max:255'],
            'edu_field' => ['required', 'string', 'max:255'],
            'sh_shenas' => ['required', 'string', 'max:255'],
            'duty_status' => ['required', 'string', 'max:255'],
            'physical_condition' => ['required', 'string', 'max:255'],
        ]);

        if(! is_null($request->lastp)) {
            $request->validate([
                'lastp' => ['required', 'string', 'max:255'],
            ]);

            $data['lastp'] = $request->lastp;
        }

        if(! is_null($request->hdate)) {
            $request->validate([
                'hdate' => ['required', 'string', 'max:255'],
            ]);

            $data['hdate'] = $request->hdate;
        }

        $personal->update($data);

        return redirect(route('admin.personals.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect(route('admin.personals.index'));
    }
}
