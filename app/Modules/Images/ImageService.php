<?php

namespace App\Modules\Images;

use App\Modules\Images\Image;
use function Tinify\fromBuffer;
use function Tinify\setKey;

class ImageService
{

    public function optimize(array $request)
    {
        $image = new Image($request);
        $this->setKey($image->key);
        $source_data = $this->getBinaryData($image->base64);
        $optimized_data = $this->getOptimizedData($source_data);
        $image->base64 = $this->getBase64($optimized_data);

        return $this->sendData($image);

    }

    public function setKey(string $key): void
    {
        setKey($key);
    }

    public function getBinaryData(string $base64): string
    {
        return file_get_contents($base64);
    }

    public function getOptimizedData($source_data):string
    {
        return fromBuffer($source_data)->toBuffer();
    }

    public function getBase64($optimized_data):string{
        return base64_encode($optimized_data);
    }

    public function sendData(Image $image):array{
        return [
            'key' => $image->key,
            'base64' => $image->base64,
        ];
    }
}
