<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $children = Child::query();

        if($keyword = request('search')) {
            $children
            ->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('family', 'LIKE', "%{$keyword}%")
            ->orWhere('father_name', 'LIKE', "%{$keyword}%")
            ->orWhere('father_name', 'LIKE', "%{$keyword}%");
        }

        if (request('search')) {
            $children
                ->where('name', 'like', '%' . request('search') . '%')
                ->where('family', 'like', '%' . request('search') . '%')
                ->where('father_name', 'like', '%' . request('search') . '%')
                ->where('kodmeli', 'like', '%' . request('search') . '%');
        }

        $children = $children->latest()->paginate(100);
        return view('admin.children.all', compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.children.create');
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

        Child::create($data);

        return redirect(route('admin.children.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Child $child)
    {
        return view('admin.children.show', compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Child $child)
    {
        return view('admin.children.edit', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Child $child)
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

        $child->update($data);

        return redirect(route('admin.children.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Child $child)
    {
        $child->delete();
        return redirect(route('admin.children.index'));
    }
}
