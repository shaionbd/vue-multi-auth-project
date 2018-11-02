<?php

namespace App\Http\Controllers\TeacherAuth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Teacher;

use Config;
use JWTAuth;
use JWTAuthException;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','getInfo']]);

        Config::set('jwt.user', "App\Teacher");
        Config::set('auth.providers.users.model', \App\Teacher::class);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        // $credentials = request(['email', 'password']);
        $email = request('email');
        $password = request('password');

        $identity = $this->_username($email);

        $credentials = [];
        $credentials[$identity] = $email;
        $credentials['password'] = $password;
        $credentials['is_activate'] = 1;

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }


    private function _username($identity)
    {
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        return $fieldName;
        // return 'email';
    }

    public function getInfo($id){
        return response()->json([
            'user' => Teacher::where('id', $id)->first()
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth('api')->user());
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $user = $this->guard()->user();
        $user->userType = 'teacher';
        return response()->json([
            'access_token' => $token,
            'user'  => $user,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
    public function guard(){
        return \Auth::Guard('api');
    }
}