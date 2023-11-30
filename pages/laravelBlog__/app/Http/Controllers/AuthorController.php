<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;


use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


use  Intervention\Image\Facades\Image;


use Illuminate\Support\Facades\Session;

use function Symfony\Component\String\b;

class AuthorController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('back.pages.home');
    }


    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }

    public function ResetForm(Request $request, $token = null)
    {
        $data = ['pageTitle' => 'Reset Password'];
        return view('back.pages.auth.reset', $data)->with(['token' => $token, 'email' => $request->email]);
    }


    public function createPost(Request $request)
    {
        $request->validate([
            'post_title' => 'required|unique:posts,post_title',
            'post_content' => 'required',
            'post_category' => 'required|exists:sub_categories,id',
            'featured_image' => 'required|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            $path = "images/post_images/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;

            $upload = Storage::disk('public')->put($path . $new_filename, (string) file_get_contents($file));

            $post_thumbnail_path = $path . 'thumbnail'; // Change 'thumbnails' to 'thumbnail'
            if (!Storage::disk('public')->exists($post_thumbnail_path)) {
                Storage::disk('public')->makeDirectory($post_thumbnail_path, 0755, true, true);
            }

            Image::make(storage_path('app/public/' . $path . $new_filename))
                ->fit(200, 200)
                ->save(storage_path('app/public/' . $path . 'thumbnail/' . 'thumb_' . $new_filename));

            Image::make(storage_path('app/public/' . $path . $new_filename))
                ->fit(500, 350)
                ->save(storage_path('app/public/' . $path . 'thumbnail/' . 'resized_' . $new_filename));

            if ($upload) {
                $post = new Post();
                $post->author_id = auth()->id();
                $post->category_id = $request->post_category;
                $post->post_title = $request->post_title;
                $post->post_slug = Str::slug($request->post_title);
                $post->post_content = $request->post_content;
                $post->featured_image = $new_filename;
                $saved = $post->save();

                if ($saved) {
                    session()->flash('show-toast', 'Đã thêm bài viết thành công!');
                    return back();
                } else {
                    session()->flash('show-toast', 'Lỗi cmnr');
                }
            } else {
                return back()->with('show-toast', 'Đã xảy ra lỗi khi upload hình ảnh');
            }
        }
    }

    public function editPost(Request $request)
    {
        if (!request()->post_id) {
            return abort(404);
        } else {
            $post = Post::find(request()->post_id);
            $data = [
                'post' => $post,
                'pageTitle' => 'Chỉnh sửa bài viết',
            ];
            return view('back.pages.edit_post', $data);
        }
    }

    public function updatePost(Request $request)
    {
        if ($request->hasFile('featured_image')) {
            $request->validate([
                'post_title' => 'required|unique:posts,post_title,' . $request->post_id,
                'post_content' => 'required',
                'post_category' => 'required|exists:sub_categories,id',
                'featured_image' => 'mimes:jpeg,jpg,png|max:2048',
            ]);

            $path = "images/post_images/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;

            $upload = Storage::disk('public')->put($path . $new_filename, (string) file_get_contents($file));

            $post_thumbnail_path = $path . 'thumbnail';

            if (!Storage::disk('public')->exists($post_thumbnail_path)) {
                Storage::disk('public')->makeDirectory($post_thumbnail_path, 0755, true, true);
            }

            Image::make(storage_path('app/public/' . $path . $new_filename))
                ->fit(200, 200)
                ->save(storage_path('app/public/' . $path . 'thumbnail/' . 'thumb_' . $new_filename));
            Image::make(storage_path('app/public/' . $path . $new_filename))
                ->fit(500, 350)
                ->save(storage_path('app/public/' . $path . 'thumbnail/' . 'resized_' . $new_filename));

            if ($upload) {
                $old_post_image = Post::find($request->post_id)->featured_image;
                if ($old_post_image != null && Storage::disk('public')->exists($path . $old_post_image)) {
                    Storage::disk('public')->delete($path . $old_post_image);

                    if (Storage::disk('public')->exists($path . 'thumbnail/resized_' . $old_post_image)) {
                        Storage::disk('public')->delete($path . 'thumbnail/resized_' . $old_post_image);
                    }
                    if (Storage::disk('public')->exists($path . 'thumbnail/thumb' . $old_post_image)) {
                        Storage::disk('public')->delete($path . 'thumbnail/thumb' . $old_post_image);
                    }
                }

                $post = Post::find($request->post_id);
                $post->category_id = $request->post_category;
                $post->post_title = $request->post_title;
                $post->post_slug = Str::slug($request->post_title);
                $post->post_content = $request->post_content;
                $post->featured_image = $new_filename;
                $saved = $post->save();

                if ($saved) {
                    session()->flash('show-toast', 'Đã chinh sua bài viết thành công!');
                    return back();
                } else {
                    session()->flash('show-toast', 'Loi con me no roi ban gia oi');
                    return back();
                }
            }
        } else {
            $request->validate([
                'post_title' => 'required|unique:posts,post_title,' . $request->post_id,
                'post_content' => 'required',
                'post_category' => 'required|exists:sub_categories,id'
            ]);

            $post = Post::find($request->post_id);
            $post->category_id = $request->post_category;
            $post->post_slug =  Str::slug($request->post_title);
            $post->post_content = $request->post_content;
            $post->post_title = $request->post_title;
            $saved = $post->save();

            if ($saved) {
                session()->flash('show-toast', 'Đã chinh sua bài viết thành công!');
                return back();
            } else {
                session()->flash('show-toast', 'Loi con me no roi ban gia oi');
                return back();
            }
        }
    }
}
