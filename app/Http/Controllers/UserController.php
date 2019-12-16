<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ProfileUserRequest;

use App\Http\Services\UserServiceInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }


    public function updatePassword(ChangePasswordRequest $request)
    {
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return back()->with('success', 'Change Password Success');
    }

    public function profile($id) {
        $user = $this->userService->findById($id);

        return view('users.profile', compact('user'));
    }

    public function edit($id) {
        if (Gate::allows('crud-users')) {
            $user = $this->userService->findById($id);

            return view('users.edit', compact('user'));
        }
        abort(403, 'You are not authorized to access');
    }

    public function update(ProfileUserRequest $request, $id) {
        $this->userService->update($request, $id);

        return back()->with('success', 'User Update Success');
    }

    public function updateImage(Request $request, $id) {
        $this->userService->updateImage($request, $id);

        return back()->with('success', 'Change Image Success');
    }

    public function getAll() {
       if (Gate::allows('crud-users')) {
           $users = $this->userService->getAll();

           return view('users.list', compact('users'));
       }
       abort(403, 'You are not authorized to access');
    }

    public function delete($id) {
        if (Gate::allows('crud-users')) {
            $this->userService->delete($id);

            return back()->with('warning', 'Delete User Success');
        }
        abort(403, 'You are not authorized to access');
    }
}
