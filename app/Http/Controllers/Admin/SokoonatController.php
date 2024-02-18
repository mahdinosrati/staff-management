<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sokoonat;
use Illuminate\Http\Request;

class SokoonatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sokoonats = Sokoonat::query();

        if($keyword = request('search')) {
            $sokoonats
            ->where('homing_status', 'LIKE', "%{$keyword}%")
            ->where('homing_status_org', 'LIKE', "%{$keyword}%")
            ->where('karmand_address', 'LIKE', "%{$keyword}%")
            ->where('bank_name', 'LIKE', "%{$keyword}%")
            ->orWhere('shaba_num', 'LIKE', "%{$keyword}%");
        }

        $sokoonats = $sokoonats->latest()->paginate(100);
        return view('admin.sokoonats.all', compact('sokoonats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sokoonats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'homing_status' => ['required','string', 'max:255'],
            'homing_status_org' => ['required', 'string', 'max:255'],
            'karmand_address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
            'bank_name' => ['required', 'string', 'max:255'],
            'shaba_num' => ['required', 'string', 'max:255'],
        ]);

        Sokoonat::create($data);

        return redirect(route('admin.sokoonats.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Sokoonat $sokoonat)
    {
        return view('admin.sokoonats.show', compact('sokoonat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sokoonat $sokoonat)
    {
        return view('admin.sokoonats.edit', compact('sokoonat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sokoonat $sokoonat)
    {
        $data = $request->validate([
            'karmand_id' => ['required'],
            'homing_status' => ['required','string', 'max:255'],
            'homing_status_org' => ['required', 'string', 'max:255'],
            'karmand_address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
            'bank_name' => ['required', 'string', 'max:255'],
            'shaba_num' => ['required', 'string', 'max:255'],
        ]);

        $sokoonat->update($data);

        return redirect(route('admin.sokoonats.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sokoonat $sokoonat)
    {
        $sokoonat->delete();
        return redirect(route('admin.sokoonats.index'));
    }
}
