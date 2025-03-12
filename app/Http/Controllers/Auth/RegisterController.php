<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/email/verify';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'account_type' => ['required', 'string', 'in:client,partnership,vendor'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        Log::info('Creating user with data:', $data);
        try {
            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'user_name' => $data['user_name'],
                'user_type' => $data['account_type'],
                'role' => $data['account_type'],
                'email' => $data['email'],
                'account_type' => $data['account_type'],
                'password' => Hash::make($data['password']),
                'referral_code' => $data['referral_code'] ?? null,
                'last_login' => now(),
                'is_first_time' => now(),
                'deleted' => 0,
            ]);

            $user->sendEmailVerificationNotification(); // Ensure the verification email is sent
            return $user;
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            throw $e;
        }
    }

    protected function registered(Request $request, $user)
    {
        return redirect('/email/verify'); // Redirect to verification page after registration
    }
}
