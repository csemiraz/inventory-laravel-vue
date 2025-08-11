<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Repositories\Category\CategoryInterface;
use App\Trait\ApiResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    use ApiResponse;
    private $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }
    /**
     * Display a listing of the resource without pagination.
     */
    public function allCategory()
    {
       $data = $this->categoryInterface->all();
       $metadata['count'] = count($data);
       if(!$data){
        return $this->ResponseError([], null, 'No data found!', 200, 'error');
       }
       return $this->ResponseSuccess(CategoryResource::collection($data), $metadata);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = request('per_page');
        $data = $this->categoryInterface->allPaginate($perPage);
        $metadata['count'] = count($data);
        if(!$data) {
            return $this->ResponseError([], null, 'Data not found!', 400, 'error');
        }
        return $this->ResponseSuccess(CategoryResource::collection($data), $metadata);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $data = $this->categoryInterface->store($request);
            return $this->ResponseSuccess(new CategoryResource($data), null, 'Data store successfully.', 201);
        } catch (\Exception $e) {
            return $this->ResponseError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->categoryInterface->show($id);
        if(!$data) {
            return $this->ResponseError([], null, 'Data not found!', 400, 'error');
        }
        return $this->ResponseSuccess(new CategoryResource($data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        try {
            $data = $this->categoryInterface->update($request, $id);
            return $this->ResponseSuccess(new CategoryResource($data), null, 'Data Updated Successfully.', 201);
        } catch (\Exception $e) {
            return $this->ResponseError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = $this->categoryInterface->delete($id);
            return $this->ResponseSuccess(new CategoryResource($data), null, 'Data deleted successfully.', 204);
        } catch (\Exception $e) {
            $this->ResponseError($e->getMessage());
        }
    }

    /**
     * Change Status the specified resource from storage.
     */
    public function status(string $id)
    {
        try {
            $data = $this->categoryInterface->status($id);
            return $this->ResponseSuccess(new CategoryResource($data), null, 'Status changed successfully.', 204);
        } catch (\Exception $e) {
            return $this->ResponseError($e->getMessage());
        }
    }
}
