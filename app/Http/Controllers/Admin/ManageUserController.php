<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::sortable()->paginate(10);

        return view('admin.manage-user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();

        return view('admin.manageuser.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $users = User::findOrFail($id);
            $branches = Branch::all();
            $this->authorize('edit-user');

            return view('admin.manageuser.edit', compact('users', 'branches'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the model was not found (e.g., show a 404 page)
            abort(404);
        }

        // Handle the case where the user was not found (e.g., show a 404 page)
        if (!$users) {
            return redirect('manage-user')->with('error', 'User not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user,email,' . $id,
            // Add more validation rules for other fields
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Find the user by ID
        $users = User::findOrFail($id);

        // Update user attributes
        $users->name = $validatedData['name'];
        $users->email = $validatedData['email'];


        // Save the updated user
        $users->save();

        return Redirect::route('admin.manageuser.edit', ['id' => $id])->with('status', 'profile-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
