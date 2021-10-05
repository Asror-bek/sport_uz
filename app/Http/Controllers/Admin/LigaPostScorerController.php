<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LigaPostScorerRequest;
use App\Models\Liga_post;
use App\Models\Liga_post_scorers;
use App\Services\LigaPostScorerService;

class LigaPostScorerController extends Controller
{

    private $ligaPostScorerService;

    public function __construct(LigaPostScorerService $ligaPostScorerService)
    {
        $this->ligaPostScorerService = $ligaPostScorerService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligaPostScorer = $this->ligaPostScorerService->index();
        return view('admin.ligaPostScorer.index',[
            'ligaPostScorer' => $ligaPostScorer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ligaPostScorer.create',[
            'ligaPost' => Liga_post::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaPostScorerRequest $request)
    {
        $this->ligaPostScorerService->createLigaPostScorer($request->validated());
        return redirect()->route('admin.ligaPostScorer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Liga_post_scorers $ligaPostScorer)
    {
        return view('admin.ligaPostScorer.edit',[
            'ligaPostScorer' => $ligaPostScorer,
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
    public function update(LigaPostScorerRequest $request, Liga_post_scorers $ligaPostScorer)
    {
        $this->ligaPostScorerService->updateLigaPostScorer($request->validated(), $ligaPostScorer);
        return redirect()->route('admin.ligaPostScorer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga_post_scorers $ligaPostScorer)
    {
        $this->ligaPostScorerService->deleteLigaPostScorer($ligaPostScorer);
        return redirect()->route('admin.ligaPostScorer.index');
    }
}
