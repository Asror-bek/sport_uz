<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Bu funksiya jamoalar kategoriyasini olib beradi
     */
    public function index()
    {
        return Category::query()->get();
    }

    public function createCategory(array $validated)
    {
        $category = new Category();
        $category->name = $validated['name'];
        $category->save();
        return $category;
    }

    public function updateCategory(array $validated, Category $category)
    {
        $category->name = $validated['name'];
        $category->save();
        return $category;
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
    }


}


?>
