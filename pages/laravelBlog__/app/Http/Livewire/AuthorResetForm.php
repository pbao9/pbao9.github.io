<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorResetForm extends Component
{
    public $email, $token, $new_password, $confirm_new_password;

    public function mount() {
        $this->email = request() -> email; 
        $this->token = request() -> token;
    }
    public function ResetHandler(){
        // $this->validate(
        //     [
        //         'email' => 'required|email|exists:users,email',
        //         'new_password' => 'required|min:5',
        //         'confirm_new_password' => 'same:new_password',
        //     ], [
        //         'email.required' => 'Chưa nhập email',
        //         'email.email' => 'Email không hợp lệ',
        //         'email.exists' => 'Email chưa đăng ký',
        //         'new_password.required' => 'Chưa nhập mật khẩu mới',
        //     ]
        //     );

            $check_token = DB::table('password_resets')->where([
                'email'=>$this->email, 
                'token'=>$this->token,
            ])->first();

            if(!$check_token) {
                session()->flash('fail', 'Token không hợp lệ');
            } else {
                DB::table('users')
                ->where(['email'=>$this->email])
                ->update(['password'=>Hash::make($this->new_password)]);

                DB::table('password_resets')->where([
                    'email'=>$this->email
                ])->delete();
                
                $success_token = Str::random(64);
                session()->flash('success', 'Mật khẩu của bạn đã được cập nhật');

                $this->redirectRoute('author.login', ['tkn'=>$success_token, 'UEmail'=>$this->email]);  

            }
    }

    public function render()
    {
        return view('livewire.author-reset-form');
    }
}
