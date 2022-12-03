<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repository\Interface\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Request;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $category = $this->categoryRepository->all();
        return $category;
    }

    public function create()
    {
        //
    }

    public function store(Request $request): JsonResponse
    {
        // $storeCategory = $this->$categoryRepository->store($data);
        // return "yes";

        $orderDetails = $request->only([
            'name',
            'code'
        ]);

        return response()->json(
            [
                'data' => $this->categoryRepository->createOrder($orderDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
