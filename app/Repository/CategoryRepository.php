<?php
namespace App\Repository;

use App\Models\Category;
use App\Repository\Interface\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface{

    public function all() {
        $category = Category::all();
        return view('category', compact('category'));
    }

    public function createOrder(array $orderDetails)
    {
        return Category::create($orderDetails);
    }
}
