<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class AllPosts extends Component
{
    use WithPagination;
    public $perpage = 8;
    public $search = null;
    public $orderBy = 'asc';

    protected $listeners = ['deletePostAction'];

    public function mount()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deletePost($id)
    {
        $this->dispatchBrowserEvent('deletePost', [
            'title' => 'Xoá bài viết?',
            'html' => 'Bạn có chắc rằng xoá bài này không?.',
            'id' => $id,
        ]);
    }

    public function deletePostAction($id)
    {
        $post = Post::find($id);
        $path = "images/post_images/";
        $featured_image = $post->featured_image;

        if ($featured_image != null && Storage::disk('public')->exists($path . $featured_image)) {
            if (Storage::disk('public')->exists($path . 'thumbnail/resized_' . $featured_image)) {
                Storage::disk('public')->delete($path . 'thumbnail/resized_' . $featured_image);
            }
            if (Storage::disk('public')->exists($path . 'thumbnail/thumb_' . $featured_image)) {
                Storage::disk('public')->delete($path . 'thumbnail/thumb_' . $featured_image);
            }

            Storage::disk('public')->delete($path . $featured_image);
        }

        $delete_post = $post->delete();


        if ($delete_post) {
            $this->emit('show-toast', ['message' => 'Đã xoá bài viết thành công!']);
        } else {
            $this->emit('show-toast-error', ['message' => 'Khong thanh cong!']);
        }
    }

    public function render()
    {
        return view('livewire.all-posts', [
            'posts' => auth()->user()->type == 1 ?
                Post::search(trim($this->search))
                ->when($this->orderBy, function ($query) {
                    $query->orderBy('id', $this->orderBy);
                })
                ->paginate($this->perpage) :
                Post::search(trim($this->search))
                ->where('author_id', auth()->id())
                ->when($this->orderBy, function ($query) {
                    $query->orderBy('id', $this->orderBy);
                })
                ->paginate($this->perpage)
        ]);
    }
}
