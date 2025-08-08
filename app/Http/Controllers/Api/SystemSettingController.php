<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSystemSettingRequest;
use App\Repositories\SystemSetting\SystemSettingInterface;
use App\Trait\ApiResponse;
use PhpParser\Node\Stmt\TryCatch;

class SystemSettingController extends Controller
{
    use ApiResponse;
    private $systemSettingRepository;

    public function __construct(SystemSettingInterface $systemSettingRepository)
    {
        $this->systemSettingRepository = $systemSettingRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->systemSettingRepository->all();
        if(!$data) {
            return $this->ResponseError([], null, 'No data found', 200, 'error');
        }
        return $this->ResponseSuccess($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSystemSettingRequest $request, string $id)
    {
        try {
            $data = $this->systemSettingRepository->update($request, $id);
            return $this->ResponseSuccess($data, null, 'Data updated successfully.');
        } catch (\Exception $e) {
            return $this->ResponseError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Change Status the specified resource from storage.
     */
    public function status(string $id)
    {
        //
    }
}
