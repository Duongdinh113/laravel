<?php

namespace App\Http\Controllers;

use App\Models\Categoris;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class CategorisController extends Controller
{
    const PASH_VIEW = "categoris.";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Categoris::query()->paginate(6);
        return view(self::PASH_VIEW.__FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(self::PASH_VIEW.__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Categoris::query()->create  ($request->all());
        return back()->with('msg','thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoris $categoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoris $categoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoris $categoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoris $categoris)
    {
        //
    }
}
