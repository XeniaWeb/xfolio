<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWork;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return inertia('Admin/Works/Works', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('Admin/Works/AddWork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // If upload image with custom Name $fileName use saveAs(). Example:
//        $ext = $request->file('work_image_file')->getClientOriginalExtension();
//        $fileName = 'work_' . Str::random(40) . '.' . $ext;
//        $card = $request->file('work_image_file')->storeAs('/', $fileName ,'photos');

        // If upload image with automatically generated Name use save()
        if ($request->file('work_image_file')) {
            $card = '/storage/photos/' . $request->file('work_image_file')->store('/', 'photos');
            if (!$card) {
                return response(['message' => 'Error file upload'], 500);
            }
        }

        $work = new Work();
        $work->title = $request->get('title');
        $work->description = $request->get('description');
        $work->link = $request->get('link');
        $work->github_link = $request->get('github_link');
        $work->comment = $request->get('comment');
//        $work->technologies = $request->get('technologies');
        $work->save();

        if ($card) {
            $work->update(['work_image' => $card]);
        }
        return redirect()->route('admin.works.index')->withSuccess(['message' => 'Work' . $work->title . ' added successfully!']);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
