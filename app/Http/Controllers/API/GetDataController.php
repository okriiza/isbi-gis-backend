<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\DetailElement;
use App\Models\Element;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GetDataController extends Controller
{
    public function getArea()
    {
        $areas = Area::all();

        if ($areas)
            return ResponseFormatter::success($areas, 'Data Daerah berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data daerah tidak ada', 404);
    }
    public function getAreaById($id)
    {
        $area = Area::find($id);

        if ($area)
            return ResponseFormatter::success($area, 'Data Daerah berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data daerah tidak ada', 404);
    }
    public function getElement()
    {
        $elements = Element::all();

        if ($elements)
            return ResponseFormatter::success($elements, 'Data Element berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Element tidak ada', 404);
    }
    public function getElementById($id)
    {
        $element = Element::find($id);

        if ($element)
            return ResponseFormatter::success($element, 'Data Element berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Element tidak ada', 404);
    }
    public function gettype()
    {
        $types = Type::with('element')->get();

        if ($types)
            return ResponseFormatter::success($types, 'Data Type berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Type tidak ada', 404);
    }
    public function gettypeById($id)
    {
        $type = Type::find($id);

        if ($type)
            return ResponseFormatter::success($type, 'Data Type berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Type tidak ada', 404);
    }
    public function getDetailElementById($idElement, $idArea, $idType)
    {
        $getDetailElement = DetailElement::with('element', 'type', 'area', 'detailImages', 'detailVideos', 'detailAudios')
            ->where('element_id', $idElement)
            ->where('area_id', $idArea)
            ->where('type_id', $idType)
            ->first();

        if ($getDetailElement)
            return ResponseFormatter::success($getDetailElement, 'Data Detail Element berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Detail Element tidak ada', 404);
    }
    public function getTypeElementAreaById($idElement, $idArea)
    {
        $getTypeElementArea = Type::with([
            'element' => function ($query) use ($idElement) {
                $query->where('id', $idElement);
            },
            'area' => function ($query) use ($idArea) {
                $query->where('id', $idArea);
            }
        ])
            ->where('element_id', $idElement)
            ->where('area_id', $idArea)
            ->get();

        if ($getTypeElementArea)
            return ResponseFormatter::success($getTypeElementArea, 'Data Type Element berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Type Element tidak ada', 404);
    }
}
