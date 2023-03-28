<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{


//    public function __construct()
//    {
//  $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contents = Content::all();
//ddd($contents);
        return view('contents.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $contents = User::orderBy('name')->get();
//        return view('contents.create',compact(['contents']));

        return view('contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>['required', 'unique:contents,name', 'max:100'],
                'description'=>['max:500'],
                'image'=>['max:255']
            ]
        );


        //save the data as a new country
//        dd($request);
        Content::create([
            'name'=>$request->name,
            'image'=> $request->image,
            'description'=> $request->description,
//            'type'=>intval($request->type)
        ]);
        return redirect(route('contents.index'))->with('status', 'has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
//        //
//        dd($content);
        return view('contents.edit',compact(['content']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        //
        $request->validate(
            [
                'name'=>['required','unique:contents,name,'.$content->id,'max:100'],
                'image'=>['max:255'],
                'description'=>['required','max:500'],
//                'password'=>['required','max:255']
            ]
        );


//        $userId = Auth::id();

        $content->name= $request->name;
        $content->image = $request->image;
        $content->description= $request->description;
//        $post->updated_by= $request->$userId;
        $content->updated_at= Carbon::now()->toDateTimeString();
        $content->save();
//        $post->roles()->sync($request->role_ids);


        return redirect(route('contents.index'))->with('status', 'Content has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
        $content->delete();
        return redirect(route('contents.index'))->with('status', 'has been deleted!');
    }
}
