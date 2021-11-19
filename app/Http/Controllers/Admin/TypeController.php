<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Element;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::with('element')->orderBy('created_at', 'DESC')->get();
        return View('pages.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getElement = Element::all();
        return View('pages.type.create', compact('getElement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_type' => 'required',
            'element_id' => 'required'
        ]);

        $type = Type::create(
            [
                'name_type' => $request->name_type,
                'element_id' => $request->element_id
            ]
        );

        return redirect()->route('type.index')->with('success', 'Successfully created new type');
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
        $type = Type::findOrFail($id);
        $getElement = Element::all();
        return View('pages.type.edit', compact('type', 'getElement'));
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
        $request->validate([
            'name_type' => 'required',
            'element_id' => 'required'
        ]);

        $type = Type::findOrFail($id);
        $type->update($request->all());

        return redirect()->route('type.index')->with('success', 'Successfully updated type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('type.index')->with('success', 'Successfully deleted type');
    }
}
