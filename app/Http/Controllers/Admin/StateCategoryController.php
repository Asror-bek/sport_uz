<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateCategoryRequest;
use App\Models\State_category;
use App\Services\StateCategoryService;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StateCategoryController extends Controller
{

    private $stateCategoryService;

    public function __construct(StateCategoryService $stateCategoryService)
    {
        $this->stateCategoryService = $stateCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stateCategory = $this->stateCategoryService->index();
        return view('admin.stateCategory.index',[
            'stateCategory' => $stateCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stateCategory.create',[
            'stateCategory' => State_category::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StateCategoryRequest $request)
    {
        $this->stateCategoryService->createStateCategory($request->validated());
        return redirect()->route('admin.stateCategory.index');
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
    public function edit(State_category $stateCategory)
    {
        return view('admin.stateCategory.edit',[
            'stateCategory' => $stateCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StateCategoryRequest $request, State_category $stateCategory)
    {
        $this->stateCategoryService->updateStateCategory($request->validated(), $stateCategory);
        return redirect()->route('admin.stateCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(State_category $stateCategory)
    {
        $this->stateCategoryService->deleteStateCategory($stateCategory);
        return redirect()->route('admin.stateCategory.index');
    }
}
