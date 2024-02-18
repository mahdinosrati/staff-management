<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karmand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KarmandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karmands = Karmand::query();

        if($keyword = request('search')) {
            $karmands
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('family', 'LIKE', "%{$keyword}%")
            ->orWhere('father_name', 'LIKE', "%{$keyword}%")
            ->orWhere('kodmeli', 'LIKE', "%{$keyword}%");
        }

        $karmands = $karmands->latest()->paginate(100);
        return view('admin.karmands.all', compact('karmands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.karmands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'sh_shenas' => ['required', 'string', 'max:255'],
            'sodoor_loc' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'string', 'max:255'],
            'birth_loc' => ['required', 'string', 'max:255'],
            'kodmeli' => ['required', 'string', 'max:255'],
            'blood_type' => ['required', 'string', 'max:255'],
            'edu_level' => ['required', 'string', 'max:255'],
            'edu_field' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:255'],
            'home_phone' => ['required', 'string', 'max:255'],
        ]);

        if ($request->file('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'max:2048'],
            ]);

            if (File::exists(public_path($request->avatar)))
                File::delete(public_path($request->avatar));

            $file = $request->file('avatar');
            $destinationPath = 'images/karmands/';
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            $data['avatar'] = $destinationPath . $file->getClientOriginalName();
        }

        Karmand::create($data);

        return redirect(route('admin.karmands.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Karmand $karmand)
    {
        return view('admin.karmands.show', compact('karmand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karmand $karmand)
    {
        return view('admin.karmands.edit', compact('karmand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karmand $karmand)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'sh_shenas' => ['required', 'string', 'max:255'],
            'sodoor_loc' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'string', 'max:255'],
            'birth_loc' => ['required', 'string', 'max:255'],
            'kodmeli' => ['required', 'string', 'max:255'],
            'blood_type' => ['required', 'string', 'max:255'],
            'edu_level' => ['required', 'string', 'max:255'],
            'edu_field' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:255'],
            'home_phone' => ['required', 'string', 'max:255'],
        ]);

        if(! is_null($request->birth)) {
            $request->validate([
                'birth' => ['required', 'string', 'max:255'],
            ]);

            $data['birth'] = $request->birth;
        }

        if ($request->file('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'max:2048'],
            ]);

            if (File::exists(public_path($karmand->avatar)))
                File::delete(public_path($karmand->avatar));

            $file = $request->file('avatar');
            $destinationPath = 'images/karmands/';
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            $data['avatar'] = $destinationPath . $file->getClientOriginalName();
        }

        $karmand->update($data);
        return redirect(route('admin.karmands.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karmand $karmand)
    {
        $karmand->delete();
        return redirect(route('admin.karmands.index'));
    }
}
