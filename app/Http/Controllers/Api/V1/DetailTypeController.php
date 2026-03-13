<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\V1\StoreDetailTypeRequest;
use App\Http\Requests\Api\V1\UpdateDetailTypeRequest;
use App\Http\Resources\DetailTypeResource;
use App\Models\DetailType;
use Spatie\QueryBuilder\QueryBuilder;

final class DetailTypeController extends ApiController
{
    /**
     * Detail Types
     *
     * Produce a paginated JSON collection of detail types.
     *
     */
    public function index()
    {
        $detailTypes = QueryBuilder::for(DetailType::class)
            ->allowedFilters(['title'])
            ->allowedSorts(['title', 'created_at'])
            ->paginate(3);

        return $this->success(DetailTypeResource::collection($detailTypes));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetailTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailType $detailType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailTypeRequest $request, DetailType $detailType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailType $detailType)
    {
        //
    }
}
