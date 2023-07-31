<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('user.index');
    }

    public function json(Request $request)
    {
        // datatable source via ajax
        if ($request->ajax()) {
            $model = User::query();
            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->editColumn('created_at', function(User $user) {
                    return date('d-m-y, H:i',strtotime($user->created_at));
                })
                ->addColumn('show_url', function(User $user) {
                    return route('user.show',$user->id);
                })
                ->addColumn('edit_url', function(User $user) {
                    return route('user.edit',$user->id);
                })
                ->addColumn('destroy_url', function(User $user) {
                    return route('user.destroy',$user->id);
                })
                ->toJson();
        }
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => ['required','string','min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/'],
        ]);

        User::create($request->post());
        return redirect()->route('user.index')->with('success','User has been created successfully.');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => ['sometimes','nullable','string','min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                //'regex:/[@$!%*#?&]/'
            ],
        ]);

        $user->fill($request->post())->save();
        return redirect()->route('user.index')->with('success','User has been updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User has been deleted.');
    }
}
