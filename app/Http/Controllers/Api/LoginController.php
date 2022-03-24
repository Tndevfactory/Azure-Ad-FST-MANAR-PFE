<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

class LoginController extends Controller
{

 public function register(Request $request)
 {



   $validator = Validator::make($request->all(), [
     "nom" => "required|max:55",
     "prenom" => "required|max:55",
     "adresse" => "nullable",
     "phone" => "nullable",
     "email" => "email|required|unique:users",
     "password" => "required|confirmed",
      ]);

      if ($validator->fails()) {

              $data=[
                "user" => null,
                "access_token" => null,
                "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
                "response_code" => 403,
            ];
              return response()->json($data,243);
      }


   $validated = $validator->validated();

   $validated["nom"] = Str::lower($request->nom);
   $validated["password"] = bcrypt($request->password);

   $user = User::create($validated);

   $accessToken = $user->createToken("authToken")->accessToken;

   $data = [
     "user" => $user,
     "access_token" => $accessToken,
   ];
       return response()->json($data,200);

 }

 public function login(Request $request)
 {


      $validator = Validator::make($request->all(), [
        'email' => 'email|required|max:255',
        'password' => 'required|min:8',
    ]);

    if ($validator->fails()) {

        $data=[
          "user" => null,
          "access_token" => null,
          "backend_response" => Arr::first(Arr::flatten($validator->messages()->get('*'))),
          "response_code" => 403,
      ];
        return response()->json($data,243);
    }

    $validated = $validator->safe()->only(['email', 'password']);


   if (!auth()->attempt($validated)) {
     $data = [ "error" => 'not authentified',   "response_code" => 403, ];
         return response()->json($data,200);
   }

   $accessToken = auth()->user()->createToken("authToken")->accessToken;

      $data = [
        "user" => $user,
        "access_token" => $accessToken,
      ];
          return response()->json($data,200);

 }


 public function logout(Request $request)
 {

   if (Auth::check()) {
     $logoutStatus = Auth::user()->token()->revoke();

     $data = [
       "logout" => 'logout successfuly',
       ];
         return response()->json($data,200);
   }

}
