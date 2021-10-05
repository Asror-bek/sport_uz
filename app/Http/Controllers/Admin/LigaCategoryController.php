<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\LigaCategoryService;
use App\Http\Requests\LigaCategoryRequest;
use App\Models\Liga_category;

class LigaCategoryController extends Controller
{

    private $ligaCategoryService;

    public function __construct(LigaCategoryService $ligaCategoryService)
    {
        $this->ligaCategoryService = $ligaCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligaCategory = $this->ligaCategoryService->index();
        return view('admin.ligaCategory.index',[
            'ligaCategory' => $ligaCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ligaCategory.create', [
            'ligaCategory' => Liga_category::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaCategoryRequest $request)
    {
        $this->ligaCategoryService->createLigaCategory($request->validated());
        return redirect()->route('admin.ligaCategory.index');
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
    public function edit(Liga_category $ligaCategory)
    {
        return view('admin.ligaCategory.edit',[
            'ligaCategory' => $ligaCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LigaCategoryRequest $request, Liga_category $ligaCategory)
    {
        $this->ligaCategoryService->updateLigaCategory($request->validated(),$ligaCategory);
        return redirect()->route('admin.ligaCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga_category $ligaCategory)
    {
        $this->ligaCategoryService->deleteLigaCategory($ligaCategory);
        return redirect()->route('admin.ligaCategory.index');
    }
}
