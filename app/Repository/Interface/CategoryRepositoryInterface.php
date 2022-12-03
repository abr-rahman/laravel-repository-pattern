<?php
namespace App\Repository\Interface;

use App\Http\Requests\StoreCategoryRequest;

interface CategoryRepositoryInterface{
    public function all();
    public function createOrder(array $orderDetails);
}
