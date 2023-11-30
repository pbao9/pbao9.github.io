<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthorRegisterForm extends Component
{

    public $username, $email, $password, $type;

    public function registerHandler()
    {

        $this->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ], [
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Địa chỉ email không hợp lệ!',
            'email.unique' => 'Email đã được sử dụng!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu phải có ít nhất 5 ký tự!',
        ]);

        User::create([
            'name' => '',
            'username' => '',
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'picture' => '',
            'biography' => '',
            'type' => 2,
        ]);
        return redirect()->route('author.login');
    }

    public function render()
    {
        return view('livewire.author-register-form');
    }
}
