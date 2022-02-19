<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\DetailAudio;
use App\Models\DetailElement;
use App\Models\DetailImage;
use App\Models\DetailVideo;
use App\Models\Element;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function createImage($id)
    {
        $getDetailElement = DetailElement::find($id);
        return view('pages.detailElement.createImage', compact('getDetailElement'));
    }

    public function createAudio($id)
    {
        $getDetailElement = DetailElement::find($id);
        return view('pages.detailElement.createAudio', compact('getDetailElement'));
    }

    public function createVideo($id)
    {
        $getDetailElement = DetailElement::find($id);
        return view('pages.detailElement.createVideo', compact('getDetailElement'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'element_id' => 'required',
            'area_id' => 'required',
            'source' => 'required',
            'description' => 'required',
            'path_video' => 'required',
            'path_image' => 'required',
            'path_audio' => 'required',
        ]);

        $detailElement = DetailElement::create([
            'type_id' => $request->type_id,
            'element_id' => $request->element_id,
            'area_id' => $request->area_id,
            'description' => $request->description,
            'source' => $request->source,
        ]);

        //create multiple image
        if ($request->hasFile('path_image')) {
            $images = [];
            $files = $request->file('path_image');
            foreach ($files as $file) {
                $images[] = $file->store('assets/image_detail_element', 'public');
            }
            foreach ($images as $image) {
                DetailImage::create([
                    'path_image' => $image,
                    'detail_element_id' => $detailElement->id
                ]);
            }
        }

        //create multiple audio
        if ($request->hasFile('path_audio')) {
            $files = $request->file('path_audio');
            foreach ($files as $file) {
                $name_audio = $file->getClientOriginalName();
                $path_audio = $file->store('assets/audio_detail_element', 'public');
                DetailAudio::create([
                    'name_audio' => $name_audio,
                    'path_audio' => $path_audio,
                    'detail_element_id' => $detailElement->id
                ]);
            }
        }

        //create video dynamic input
        if ($request->path_video) {
            foreach ($request->path_video as $video => $value) {
                DetailVideo::create([
                    'path_video' => $value,
                    'detail_element_id' => $detailElement->id
                ]);
            }
        }

        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element created successfully.');
    }

    public function storeImage(Request $request, $id)
    {
        $request->validate([
            'path_image' => 'required',
        ]);

        $detailElement = DetailElement::find($id);

        //create multiple image
        if ($request->hasFile('path_image')) {
            $images = [];
            $files = $request->file('path_image');
            foreach ($files as $file) {
                $images[] = $file->store('assets/image_detail_element', 'public');
            }
            foreach ($images as $image) {
                DetailImage::create([
                    'path_image' => $image,
                    'detail_element_id' => $detailElement->id
                ]);
            }
        }

        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element created successfully.');
    }

    public function storeVideo(Request $request, $id)
    {
        $request->validate([
            'path_video' => 'required',
        ]);

        $detailElement = DetailElement::find($id);

        //create video dynamic input
        if ($request->path_video) {
            foreach ($request->path_video as $video => $value) {
                DetailVideo::create([
                    'path_video' => $value,
                    'detail_element_id' => $detailElement->id
                ]);
            }
        }

        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element created successfully.');
    }

    public function storeAudio(Request $request, $id)
    {
        $request->validate([
            'path_audio' => 'required',
        ]);

        $detailElement = DetailElement::find($id);

        //create multiple audio
        if ($request->hasFile('path_audio')) {
            $files = $request->file('path_audio');
            foreach ($files as $file) {
                $name_audio = $file->getClientOriginalName();
                $path_audio = $file->store('assets/audio_detail_element', 'public');
                DetailAudio::create([
                    'name_audio' => $name_audio,
                    'path_audio' => $path_audio,
                    'detail_element_id' => $detailElement->id
                ]);
            }
        }

        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element created successfully.');
    }

    public function show($id)
    {
        $detailElement = DetailElement::with(['element', 'type', 'area', 'detailImages', 'detailVideos', 'detailAudios'])
            ->findOrFail($id);
        return view('pages.detailElement.show', compact('detailElement'));
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
            'source' => 'required',
            'description' => 'required',
        ]);
        $getDetailElement = DetailElement::findOrFail($id);
        // if (request('image')) {
        //     Storage::disk('public')->delete($getDetailElement->image);
        //     $thumbnail = request()->file('image')->store('assets/image_detail_element', 'public');
        // } else {
        //     $thumbnail = $getDetailElement->getRawOriginal('image');
        // }

        $getDetailElement->update([
            'type_id' => $request->type_id,
            'element_id' => $request->element_id,
            'area_id' => $request->area_id,
            'source' => $request->source,
            'description' => $request->description,
        ]);
        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element updated successfully.');
    }
    public function destroy($id)
    {
        $getDetailElement = DetailElement::with('detailImages', 'detailVideos', 'detailAudios')->findOrFail($id);
        $getDetailElement->detailImages()->each(function ($detailImage) {
            Storage::disk('public')->delete($detailImage->getRawOriginal('path_image'));
        });
        $getDetailElement->detailVideos()->each(function ($detailVideo) {
            Storage::disk('public')->delete($detailVideo->getRawOriginal('path_video'));
        });
        $getDetailElement->detailAudios()->each(function ($detailAudio) {
            Storage::disk('public')->delete($detailAudio->getRawOriginal('path_audio'));
        });
        $getDetailElement->delete();
        return redirect()->route('detail.element.index')
            ->with('success', 'Detail Element deleted successfully.');
    }

    public function destroyImage($id)
    {
        $getDetailImage = DetailImage::findOrFail($id);
        Storage::disk('public')->delete($getDetailImage->getRawOriginal('path_image'));
        $getDetailImage->delete();
        return redirect()->back()
            ->with('success', 'Image deleted successfully.');
    }

    public function destroyAudio($id)
    {
        $getDetailAudio = DetailAudio::findOrFail($id);
        Storage::disk('public')->delete($getDetailAudio->getRawOriginal('path_audio'));
        $getDetailAudio->delete();
        return redirect()->back()
            ->with('success', 'Audio deleted successfully.');
    }

    public function destroyVideo($id)
    {
        $getDetailVideo = DetailVideo::findOrFail($id);
        $getDetailVideo->delete();
        return redirect()->back()
            ->with('success', 'Video deleted successfully.');
    }
}
