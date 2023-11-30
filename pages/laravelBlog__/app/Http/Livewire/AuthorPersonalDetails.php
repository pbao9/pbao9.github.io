<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AuthorPersonalDetails extends Component
{


    public  $author;

    public $name, $username, $email, $biography;

    public function toastMsg()
    {
        $this->emit('show-toast', ['message' => 'Thông tin đã được cập nhật thành công!']);
    }

    public function mount()
    {
        $this->author = User::find(auth('web')->id());
        $this->name = $this->author->name;
        $this->username = $this->author->username;
        $this->email = $this->author->email;
        $this->biography = $this->author->biography;
    }

    public function UpdateDetails()
    {
        $this->validate([
            'name' => 'required|string',
            'username' => 'required|unique:users,username,' . auth('web')->id()
        ]);

        User::where('id', auth('web')->id())->update([
            'name' => $this->name,
            'username' => $this->username,
            'biography' => $this->biography
        ]);

        $this->emit('updateAuthorProfileHeader');
        $this->emit('updateTopHeader');
        $this->emit('show-toast', ['message' => 'Đã cập nhật dữ liệu thành công!']);
    }

    public function render()
    {
        return view('livewire.author-personal-details');
    }
}
