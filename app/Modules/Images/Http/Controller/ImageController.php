<?php

namespace App\Modules\Images\Http\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Images\ImageService;

class ImageController extends Controller
{
    function __construct(ImageService $image_service)
    {
        $this->image_service = $image_service;
    }

    public function optimize(Request $request)
    {
        return response()->json([
            "image" => $this->image_service->optimize($request->toArray()),
        ]);
    }
}
