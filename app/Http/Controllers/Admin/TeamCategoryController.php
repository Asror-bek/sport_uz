<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team_category;
use App\Http\Controllers\Controller;
use App\Services\TeamCategoryService;
use App\Http\Requests\TeamCategoryRequest;
use Illuminate\Http\Request;

class TeamCategoryController extends Controller
{
    /**
     * Bu yerda jamoa kategoriyasini service qismi chaqiriladi
     */
    private $teamCategoryService;

    public function __construct(TeamCategoryService $teamCategoryService)
    {
        $this->teamCategoryService = $teamCategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamCategory = $this->teamCategoryService->index();
        return view('admin.teamCategory.index',[
            'teamCategory' => $teamCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamCategory.create', [
            'teamCategory' => Team_category::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamCategoryRequest $request)
    {
        $this->teamCategoryService->createTeamcategory($request->validated());
        return redirect()->route('admin.teamCategory.index');
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
    public function edit(Team_category $teamCategory)
    {
        return view('admin.teamCategory.edit',[
            'teamCategory' => $teamCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamCategoryRequest $request, Team_category $teamCategory)
    {
        $this->teamCategoryService->updateTeamcategory($request->validated(), $teamCategory);
        return redirect()->route('admin.teamCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team_category $teamCategory)
    {
        $this->teamCategoryService->deleteTeamcategory($teamCategory);
        return redirect()->route('admin.teamCategory.index');
    }
}
