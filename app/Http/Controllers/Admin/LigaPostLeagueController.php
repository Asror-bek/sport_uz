<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LigaPostLeagueRequest;
use App\Services\LigaPostLeagueService;
use App\Models\Liga_post;
use App\Models\Liga_post_league;

class LigaPostLeagueController extends Controller
{

    private $ligaPostLeagueService;

    public function __construct(LigaPostLeagueService $ligaPostLeagueService)
    {
        $this->ligaPostLeagueService = $ligaPostLeagueService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligaPostLeague = $this->ligaPostLeagueService->index();
        return view('admin.ligaPostLeague.index',[
            'ligaPostLeague' => $ligaPostLeague
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ligaPostLeague.create',[
            'ligaPost' => Liga_post::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaPostLeagueRequest $request)
    {
        $this->ligaPostLeagueService->createLigaPostLeague($request->validated());
        return redirect()->route('admin.ligaPostLeague.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Liga_post_league $ligaPostLeague)
    {
        return view('admin.ligaPostLeague.edit',[
            'ligaPostLeague' => $ligaPostLeague,
            'ligaPost' => Liga_post::query()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LigaPostLeagueRequest $request, Liga_post_league $ligaPostLeague)
    {
        $this->ligaPostLeagueService->updateLigaPostLeague($request->validated(),$ligaPostLeague);
        return redirect()->route('admin.ligaPostLeague.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga_post_league $ligaPostLeague)
    {
        $this->ligaPostLeagueService->deleteLigaPostLeague($ligaPostLeague);
        return redirect()->route('admin.ligaPostLeague.index');
    }
}
