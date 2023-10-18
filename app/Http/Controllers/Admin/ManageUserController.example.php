<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ManageUserController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        //
    }
    public function show()
    {
        $users = User::all();
        return view('admin.manage-user', compact('users'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit($id)
    {
        try {
            $users = User::find($id);
            $branches = Branch::all();
            $this->authorize('edit-user');

            $data = compact('users', 'branches');

            return view('admin.manageuser.edit', $data);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the model was not found (e.g., show a 404 page)
            abort(404);
        }

        // Handle the case where the user was not found (e.g., show a 404 page)
        if (!$users) {
            return redirect('manageuser')->with('error', 'User not found');
        }
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
