<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Profile\UpdatePswRequest;
use App\Http\Requests\Web\Profile\UpdateRequest;
use App\Http\Requests\Web\Profile\UploadImgRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $user = auth()->user();

        return view('screens.web.profile.index', get_defined_vars());
    }

    public function update(UpdateRequest $request): JsonResponse
    {

        auth()->user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return response()->json([
            'status' => 'true',
            'message' => 'Profile details updated Successfully.'
        ]);
    }

    public function updatePsw(UpdatePswRequest $request): JsonResponse
    {


        auth()->user()->update([
            'password' => $request->password
        ]);


        return response()->json([
            'status' => 'true',
            'message' => 'Password Updated Successfully.'
        ]);
    }
    public function updatePfp(UploadImgRequest $request): JsonResponse
    {

        if ($request->has('upload_profile')) {
            $imageName = time() . '.' . $request->upload_profile->getClientOriginalExtension();

            $request->upload_profile->move(public_path('images/pfp/'), $imageName);
        }

        auth()->user()->update([
            'avatar' => $imageName
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Avatar Uploaded Successfully.',
            'avatar' => auth()->user()->avatar
        ]);
    }
}
