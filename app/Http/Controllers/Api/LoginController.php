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
use Symfony\Component\Console\Output\ConsoleOutput;

class LoginController extends Controller
{

 public function register(Request $request)
 {
  

   $validator = Validator::make($request->all(), [
     "lname" => "required|max:55",
     "fname" => "required|max:55",
     "address" => "nullable",
     "fonction" => "required",
     "group" => "required",
     "phone1" => "required",
     "phone2" => "nullable",
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

  

   $validated["fname"] = Str::lower($validated["fname"] );
   $validated["lname"] = Str::lower($validated["lname"] );
   $validated["password"] = bcrypt($request->password);
   $output->writeln('ch debug validated after hash');
   $output->writeln($validated);

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
        "user" => auth()->user(),
        "access_token" => $accessToken,
      ];
          return response()->json($data,200);

 }


 public function logout(Request $request)
 {
  $output = new ConsoleOutput();
  $output->writeln('ch debug logout');
  
  $output->writeln($request->all());
  $output->writeln(Auth::check());


   if (Auth::check()) {
     $logoutStatus = Auth::user()->token()->revoke();

     $data = [
       "backend_response" => 'logout successfuly',
       "response_code" => 200,
       ];
         return response()->json($data,200);
   }else{
    $data = [
      "backend_response" => 'non authentified',
      "response_code" => 403,
      ];
        return response()->json($data,200);
   }

}
 public function users(Request $request)
 {

   $users=User::get();

     $data = [
       "users" => $users,
       ];

         return response()->json($data,200);
   

}
}