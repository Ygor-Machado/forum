<?php

namespace App\Http\Controllers\Api;

use App\DTO\Supports\CreateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupportRequest;
use App\Http\Resources\SupportResource;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function __construct(protected SupportService $service)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupportRequest $request)
    {
        $support = $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return new SupportResource($support);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
