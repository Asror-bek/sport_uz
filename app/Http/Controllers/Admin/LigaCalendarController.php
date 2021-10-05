<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LigaCalendarRequest;
use App\Models\Liga_calendar;
use App\Models\Liga_category;
use App\Services\LigaCalendarService;


class LigaCalendarController extends Controller
{

    private $ligaCalendarService;

    public function __construct(LigaCalendarService $ligaCalendarService)
    {
        $this->ligaCalendarService = $ligaCalendarService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligaCalendar = $this->ligaCalendarService->index();
        return view('admin.ligaCalendar.index',[
            'ligaCalendar' => $ligaCalendar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ligaCalendar.create',[
            'ligaCategory' => Liga_category::query()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LigaCalendarRequest $request)
    {
        $this->ligaCalendarService->createLigaCalendar($request->validated());
        return redirect()->route('admin.ligaCalendar.index');
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
    public function edit(Liga_calendar $ligaCalendar)
    {
        return view('admin.ligaCalendar.edit',[
            'ligaCalendar' => $ligaCalendar,
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
    public function update(LigaCalendarRequest $request, Liga_calendar $ligaCalendar)
    {
        $this->ligaCalendarService->updateLigaCalendar($request->validated(), $ligaCalendar);
        return redirect()->route('admin.ligaCalendar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liga_calendar $ligaCalendar)
    {
        $this->ligaCalendarService->deleteLigaCalendar($ligaCalendar);
        return redirect()->route('admin.ligaCalendar.index');
    }
}
