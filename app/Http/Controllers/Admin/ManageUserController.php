<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ManageUserController extends Controller
{
    use AuthorizesRequests;

    public function index(){
        $user = User::all();

        return view('admin.manage-user', compact('user'));
    }

    // public function show($id) {
    //     $user = User::find($id);
    //     return view('admin.manageuser.edit',['user'=>$user]);
    // }

    /**
     * Display the user's profile form.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $branches = Branch::all();

        // Memeriksa apakah user ditemukan
        if (!$user) {
            return redirect()->route('admin.manageuser')->with('error', 'User not found');
        }

        $this->authorize('edit user');

        return view('admin.manageuser.edit', compact('user', 'branches'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('admin.manageuser.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
