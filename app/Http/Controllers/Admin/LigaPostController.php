<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LigaPostRequest;
use App\Models\Liga_category;
use App\Models\Liga_post;
use App\Models\State_category;
use App\Services\LigaPostService;

class LigaPostController extends Controller
{

    private $ligaPostService;

    public function __construct(LigaPostService $ligaPostService)
    {
        $this->ligaPostService = $ligaPostService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligaPost = $this->ligaPostService->index();
        return view('admin.ligaPost.index',[
            'ligaPost' => $ligaPost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ligaPost.create',[
            'stateCategory' => State_category::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaPostRequest $request)
    {
        $this->ligaPostService->createLigaPost($request->validated());
        return redirect()->route('admin.ligaPost.index');
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
    public function edit(Liga_post $ligaPost)
    {
        return view('admin.ligaPost.edit',[
            'ligaPost' => $ligaPost,
            'stateCategory' => State_category::query()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LigaPostRequest $request, Liga_post $ligaPost)
    {
        $this->ligaPostService->updateLigaPost($request->validated(), $ligaPost);
        return redirect()->route('admin.ligaPost.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga_post $ligaPost)
    {
        $this->ligaPostService->deleteLigaPost($ligaPost);
        return redirect()->route('admin.ligaPost.index');
    }
}
