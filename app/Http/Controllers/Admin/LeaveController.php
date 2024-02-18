<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaves = Leave::query();

        if($keyword = request('search')) {
            $leaves
            ->where('leave_code', 'LIKE', "%{$keyword}%")
            ->orWhere('number', 'LIKE', "%{$keyword}%");
        }

        $leaves = $leaves->latest()->paginate(100);
        return view('admin.leaves.all', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leaves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'leave_code' => ['required', 'string', 'max:255'],
            's_date' => ['required', 'string', 'max:255'],
            'e_date' => ['required', 'string', 'max:255'],
            'day_num' => ['required', 'string', 'max:255'],
            'type_of_leave' => ['required', 'string', 'max:255'],
            'reason' => ['required', 'string', 'max:255'],
        ]);

        Leave::create($data);

        return redirect(route('admin.leaves.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leaf)
    {
        return view('admin.leaves.show', compact('leaf'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leaf)
    {
        return view('admin.leaves.edit', compact('leaf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leaf)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'leave_code' => ['required', 'string', 'max:255'],
            'day_num' => ['required', 'string', 'max:255'],
            'type_of_leave' => ['required', 'string', 'max:255'],
            'reason' => ['required', 'string', 'max:255'],
        ]);

        if(! is_null($request->s_date)) {
            $request->validate([
                's_date' => ['required', 'string', 'max:255'],
            ]);

            $data['s_date'] = $request->s_date;
        }

        if(! is_null($request->e_date)) {
            $request->validate([
                'e_date' => ['required', 'string', 'max:255'],
            ]);

            $data['e_date'] = $request->e_date;
        }

        $leaf->update($data);

        return redirect(route('admin.leaves.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leaf)
    {
        $leaf->delete();
        return redirect(route('admin.leaves.index'));
    }
}
