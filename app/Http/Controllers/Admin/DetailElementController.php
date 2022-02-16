<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\DetailElement;
use App\Models\Element;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Builder\Function_;

class DetailElementController extends Controller
{
    public function index()
    {
        $getDetailElements = DetailElement::with(['element', 'type', 'area'])->get();
        return view('pages.detailElement.index', compact('getDetailElements'));
    }
    public function create()
    {
        $getTypes = Type::all();
        $getElemets = Element::all();
        $getAreas = Area::all();
        return view('pages.detailElement.create', compact('getTypes', 'getElemets', 'getAreas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'element_id' => 'required',
            'area_id' => 'required',
            'video' => 'required',
            'source' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        DetailElement::create([
            'type_id' => $request->type_id,
            'element_id' => $request->element_id,
            'area_id' => $request->area_id,
            'video' => $request->video,
            'source' => $request->source,
            'description' => $request->description,
            'image' => $request->image ? $request->file('image')->store('assets/image_detail_element', 'public') : null,
        ]);
        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element created successfully.');
    }
    public function edit($id)
    {
        $getDetailElement = DetailElement::findOrFail($id);
        $getTypes = Type::all();
        $getElemets = Element::all();
        $getAreas = Area::all();
        return view('pages.detailElement.edit', compact('getDetailElement', 'getTypes', 'getElemets', 'getAreas'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_id' => 'required',
            'element_id' => 'required',
            'area_id' => 'required',
            'video' => 'required',
            'source' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
        $getDetailElement = DetailElement::findOrFail($id);
        if (request('image')) {
            Storage::disk('public')->delete($getDetailElement->image);
            $thumbnail = request()->file('image')->store('assets/image_detail_element', 'public');
        } else {
            $thumbnail = $getDetailElement->getRawOriginal('image');
        }

        $getDetailElement->update([
            'type_id' => $request->type_id,
            'element_id' => $request->element_id,
            'area_id' => $request->area_id,
            'video' => $request->video,
            'source' => $request->source,
            'description' => $request->description,
            'image' => $thumbnail,
        ]);
        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element updated successfully.');
    }
    public function destroy($id)
    {
        $getDetailElement = DetailElement::findOrFail($id);
        Storage::disk('public')->delete($getDetailElement->image);
        $getDetailElement->delete();
        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element deleted successfully.');
    }
}
