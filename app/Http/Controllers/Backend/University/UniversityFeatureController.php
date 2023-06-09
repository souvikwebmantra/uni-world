<?php

namespace App\Http\Controllers\Backend\University;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UniversityFeatureController extends Controller
{
    public function destroy($id): JsonResponse
    {
        return $this->service->destroy($id);
    }

    public function index(Request $request): JsonResponse
    {
        return $this->service->index($request);
    }

    public function restore($id): JsonResponse
    {
        return $this->service->restore($id);
    }

    public function show($id): JsonResponse
    {
        return $this->service->show($id);
    }

    public function store($request): JsonResponse
    {
        return $this->service->store($request);
    }

    public function trashed($id): JsonResponse
    {
        return $this->service->trashed($request);
    }

    public function update($request, $id): JsonResponse
    {
        return $this->service->update($request);
    }
}
