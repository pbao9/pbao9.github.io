<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthorChangePasswordForm extends Component
{

    public $current_password, $new_password, $confirm_new_password;

    public function changePassword()
    {
        $this->validate([
            'current_password' => [
                'required', function ($attribute, $value, $fail) {
                    if (!Hash::check($value, User::find(auth('web')->id())->password)) {
                        return $fail(__('Mật khẩu hiện tại không chính xác!'));
                    }
                },
            ],
            'new_password' => 'required|min:5|max:25',
            'confirm_new_password' => 'same:new_password'
        ], [
            'current_password.required' => 'Nhập mật khẩu hiện tại của bạn!',
            'new_password.required' => 'Nhập mật khẩu mới!',
            'confirm_new_password.same' => 'Mật khẩu xác nhận phải giống với mật khẩu mới!',
        ]);

        $query = User::find(auth('web')->id())->update([
            'password' => Hash::make($this->new_password)
        ]);

        if ($query) {
            $this->current_password = $this->new_password = $this->confirm_new_password = null;
            $this->emit('show-toast', ['message' => 'Mật khẩu đã được cập nhật thành công!']);
        } else {
            $this->emit('show-toast-error', ['message' => 'Có sai sót gì ở đây! Vui lòng kiểm tra lại!']);
        }
    }

    public function render()
    {
        return view('livewire.author-change-password-form');
    }
}
