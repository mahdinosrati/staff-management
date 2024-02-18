<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query();

        if($keyword = request('search')) {
            $users
            ->where('email', 'LIKE', "%{$keyword}%")
            ->orWhere('name', 'LIKE', "%{$keyword}%")
            ->orWhere('cellphone', 'LIKE', "%{$keyword}%")
            ->orWhere('id', $keyword);
        }

        $users = $users->latest()->paginate(100);
        return view('admin.users.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cellphone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'type' => ['required', 'integer'],
        ]);

        if ($request->file('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'max:2048'],
            ]);

            if (File::exists(public_path($request->avatar)))
                File::delete(public_path($request->avatar));

            $file = $request->file('avatar');
            $destinationPath = 'images/users/';
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            $data['avatar'] = $destinationPath . $file->getClientOriginalName();
        }

        User::create($data);

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ]);

        if(! is_null($request->password)) {
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $data['password'] = $request->password;
        }

        if ($request->file('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'max:2048'],
            ]);

            if (File::exists(public_path($user->avatar)))
                File::delete(public_path($user->avatar));

            $file = $request->file('avatar');
            $destinationPath = 'images/users/';
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            $data['avatar'] = $destinationPath . $file->getClientOriginalName();
        }

        $user->update($data);
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.users.index'));
    }
}
