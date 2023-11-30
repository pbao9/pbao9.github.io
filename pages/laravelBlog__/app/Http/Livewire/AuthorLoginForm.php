<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Validator;

class AuthorLoginForm extends Component
{
    public $login_id, $password;

    public function LoginHandler()
    {

        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if ($fieldType == 'email') {
            $this->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|min:5',
            ], [
                'login_id' => 'Email và tên đăng nhập không được trống!',
                'login_id.email' => 'Email không đúng!',
                'loign_id.exists' => 'Email không tồn tại!',
                'password.required' => 'Mật khẩu không được trống!',
            ]);
        } else {
            $this->validate([
                'login_id' => 'required|exists:users,username',
                'password' => 'required|min:5',
            ], [
                'login_id.required' => 'Email hoặc tên đăng nhập không được trống!',
                'login_id.exists' => 'Tên đăng nhập chưa được đăng ký!',
                'password.required' => 'Mật khẩu không được để trống'
            ]);
        }

        $creds = array($fieldType => $this->login_id, 'password' => $this->password);
        $checkUser = User::where($fieldType, $this->login_id)->first();
        if (Auth::guard('web')->attempt($creds)) {
            if ($checkUser->blocked == 1) {
                return redirect()->route('author.login')->with('fail', 'Tài khoản của bạn đã bị khoá!');
            } else {
                return redirect()->route('author.home');
            }
        } else {
            session()->flash('fail', 'Sai email/ tên đăng nhập hoặc mật khẩu!');
        }
    }


    public function render()
    {
        return view('livewire.author-login-form');
    }
}
