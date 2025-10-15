<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('screens.admin.agents.index', get_defined_vars());
    }

    public function store(StoreRequest $request): JsonResponse
    {

        $agent = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role,
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Agent added Successfully.'
        ]);
    }

    function edit($id)
    {

        $user = User::find($id);

        // dd($user);

        return response()->json([
            'status' => 'true',
            'message' => 'data fetched successfully.',
            'publicuser' => $user
        ]);
    }

    public function update(UpdateRequest $request, $id)
    {

        // dd($request->all());

        $user = User::find($id);

        $updateData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role
        ];

        // Add password to update data if provided
        if ($request->has('password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        $user->update($updateData);

        return response()->json([
            'status' => 'true',
            'message' => 'User details updated successfully.'
        ]);
    }

    public function updateStatus(Request $request)
    {
        $user = User::find($request->id);

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found.'
            ], 404);
        }

        $user->update([
            'status' => $request->status
        ]);

        if ($user->status == 'inactive') {
            $user->assignments()->update(['user_id' => null]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Status Updated Successfully.'
        ]);
    }
}
