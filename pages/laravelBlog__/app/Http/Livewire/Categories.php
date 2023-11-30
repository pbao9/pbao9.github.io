<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class Categories extends Component
{


    public $category_name;
    public $selected_category_id;


    public $subcategory_name;

    public  $parent_category;
    public $selected_subcategory_id;
    public $updateCategoryMode = false;
    public $updateSubCategoryMode = false;



    protected $listeners = [
        'resetModalForm',
        'deleteCategoryAction',
        'deleteSubCategoryAction'
    ];

    public function resetModalForm()
    {
        $this->resetErrorBag();
        $this->category_name = null;
        $this->subcategory_name = null;
        $this->parent_category = null;
    }

    public function addCategory()
    {
        $this->validate([
            'category_name' => 'required|unique:categories,category_name,'
        ]);

        $category = new Category();
        $category->category_name = $this->category_name;
        $saved = $category->save();

        if ($saved) {
            $this->dispatchBrowserEvent('hideCategoriesModal');
            $this->category_name = null;

            $this->emit('show-toast', ['message' => 'Đã thêm mới danh mục thành công!']);
        } else {
            $this->emit('show-toast', ['message' => 'Đã xảy ra lỗi!']);
        }
    }


    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        $this->selected_category_id = $category->id;
        $this->category_name = $category->category_name;
        $this->updateCategoryMode = true;
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('showcategoriesModal');
    }

    public function updateCategory()
    {
        if ($this->selected_category_id) {
            $this->validate([
                'category_name' => 'required|unique:categories,category_name,' . $this->selected_category_id,
            ]);

            $category = Category::findOrFail($this->selected_category_id);
            $category->category_name = $this->category_name;
            $updated = $category->save();


            if ($updated) {
                $this->dispatchBrowserEvent('hideCategoriesModal');
                $this->updateCategoryMode = false;
                $this->emit('show-toast', ['message' => 'Đã cập nhật thành công!']);
            } else {
                $this->emit('show-toast', ['message' => 'Đã xảy ra lỗi']);
            }
        }
    }

    public function addSubCategory()
    {
        $this->validate([
            'parent_category' => 'required',
            'subcategory_name' => 'required|unique:sub_categories,subcategory_name',
        ]);

        $subcategory = new SubCategory();
        $subcategory->subcategory_name = $this->subcategory_name;
        $subcategory->slug = Str::slug($this->subcategory_name);
        $subcategory->parent_category = $this->parent_category;
        $saved = $subcategory->save();

        if ($saved) {
            $this->dispatchBrowserEvent('hideSubCategoriesModal');
            $this->parent_category = null;
            $this->subcategory_name = null;
            $this->emit('show-toast', ['message' => 'Đã thêm danh mục con thành công!']);
        } else {
            $this->emit('show-toast', ['message' => 'Đã xảy ra lỗi!']);
        }
    }


    public function editSubCategory($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $this->selected_subcategory_id = $subcategory->id;
        $this->parent_category = $subcategory->parent_category;
        $this->subcategory_name = $subcategory->subcategory_name;
        $this->updateSubCategoryMode = true;
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('showSubCategoriesModal');
    }

    public function updateSubCategory()
    {
        if ($this->selected_subcategory_id) {
            $this->validate([
                'parent_category' => 'required',
                'subcategory_name' => 'required|unique:sub_categories,subcategory_name,' . $this->selected_subcategory_id,
            ]);

            $subcategory = SubCategory::findOrFail($this->selected_subcategory_id);
            $subcategory->subcategory_name = $this->subcategory_name;
            $subcategory->slug = Str::slug($this->subcategory_name);
            $subcategory->parent_category = $this->parent_category;
            $updated = $subcategory->save();

            if ($updated) {
                $this->dispatchBrowserEvent('hideSubCategoriesModal');
                $this->updateSubCategoryMode = false;
                $this->emit('show-toast', ['message' => 'Đã chỉnh sửa danh mục con thành công!']);
            } else {
                $this->emit('show-toast', ['message' => 'Đã xảy ra lỗi!']);
            }
        }
    }

    public function deleteSubCategory($id)
    {
        $subcategory = SubCategory::find($id);
        $this->dispatchBrowserEvent('deleteSubCategory', [
            'title' => 'Bạn có chắc không?',
            'html' => 'Bạn muỗn xoá <b>' . $subcategory->subcategory_name . '</b> khỏi danh mục?',
            'id' => $id
        ]);
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $this->dispatchBrowserEvent('deleteCategory', [
            'title' => 'Bạn có chắc không?',
            'html' => 'Bạn muốn xoá <b>' . $category->category_name . '</b> khỏi danh mục?',
            'id' => $id
        ]);
    }

    public function deleteCategoryAction($id)
    {
        $category = Category::where('id', $id)->first();
        $subcategories = SubCategory::where('parent_category', $category->id)->whereHas('posts')->with('posts')->get();

        if (!empty($subcategories) && count($subcategories) > 0) {
            $totalPosts = 0;
            foreach ($subcategories as $subcat) {
                $totalPosts += Post::where('category_id', $subcat->id)->get()->count();
            }
            $this->emit('show-toast-error', ['message' => 'Danh mục này có (' . $totalPosts . ') bài viết, không thể xoá!']);
        } else {
            Subcategory::where('parent_category', $category->id)->delete();
            $category->delete();
            $this->emit('show-toast', ['message' => 'Đã xoá thành công!']);
        }
    }
    public function deleteSubCategoryAction($id)
    {
        $subcategory = SubCategory::where('id', $id)->first();
        $posts = Post::where('category_id', $subcategory->id)->get()->toArray();

        if (!empty($posts) && count($posts) > 0) {
            $this->emit('show-toast-error', ['message' => 'Danh mục này có (' . count($posts) . ') bài viết, không thể xoa']);
        } else {
            $subcategory->delete();
            $this->emit('show-toast', ['message' => 'Đã xoá thành công!']);
        }
    }



    public function render()
    {
        return view('livewire.categories', [
            'categories' => Category::orderBy('ordering', 'asc')->get(),
            'subcategories' => SubCategory::orderBy('ordering', 'asc')->get(),
        ]);
    }
}
