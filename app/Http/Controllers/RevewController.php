<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;

use App\Model\Product;

use App\Model\Revew;

use App\Http\Controllers\RevewController;

use Illuminate\Http\Request;

class RevewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return ReviewResource::collection($product->reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Revew  $revew
     * @return \Illuminate\Http\Response
     */
    public function show(Revew $revew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Revew  $revew
     * @return \Illuminate\Http\Response
     */
    public function edit(Revew $revew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Revew  $revew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Revew $revew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Revew  $revew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revew $revew)
    {
        //
    }
}
