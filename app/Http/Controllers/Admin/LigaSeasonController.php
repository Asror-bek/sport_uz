<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LigaSeasonRequest;
use App\Models\Liga_category;
use App\Models\Liga_seasons;
use App\Services\LigaSeasonService;

class LigaSeasonController extends Controller
{


    private $ligaSeasonService;


    public function __construct(LigaSeasonService $ligaSeasonService)
    {
        $this->ligaSeasonService = $ligaSeasonService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligaSeason = $this->ligaSeasonService->index();
        return view('admin.ligaSeason.index',[
            'ligaSeason' => $ligaSeason
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ligaSeason.create',[
            'ligaCategory' => Liga_category::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaSeasonRequest $request)
    {
        $this->ligaSeasonService->createLigaSeason($request->validated());
        return redirect()->route('admin.ligaSeason.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Liga_seasons $ligaSeason)
    {
        return view('admin.ligaSeason.edit',[
            'ligaSeason' => $ligaSeason,
            'ligaCategory' => Liga_category::query()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LigaSeasonRequest $request, Liga_seasons $ligaSeason)
    {
        $this->ligaSeasonService->updateLigaSeason($request->validated(), $ligaSeason);
        return redirect()->route('admin.ligaSeason.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga_seasons $ligaSeason)
    {
        $this->ligaSeasonService->deleteLigaSeason($ligaSeason);
        return redirect()->route('admin.ligaSeason.index');
    }
}
