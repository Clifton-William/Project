<?php

namespace App\Http\Services;

use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;


class ImageService
{

    // resize, quality, convert image
    public function uploadImage(array $data, string $oldImage = null)
    {
        $file = $data['img'];
        $imageName = uniqid() . '.' . 'webp'; // jpg, png, jpeg
        $thumPath = storage_path() . '/app/public/back/';
        $oriPath = storage_path() . '/app/public/back/';
        $thumPath = storage_path() . '/app/public/back/thumbnail/';

        // Buat folder kalau belum ada

        // CARA MUBA
        // $oriPath = 'path/to/original';
        // $thumbPath = 'path/to/thumbnail'; // Pastikan thumbPath dideklarasikan lebih awal
        // if (!file_exists($oriPath) || !file_exists($thumbPath)) {
        //     mkdir($oriPath, 0755, true);
        //     mkdir($thumbPath, 0755, true);
        // }

        // CARA GPT
        // if (!file_exists($oriPath) || !file_exists($thumbPath)) {
        //     mkdir($oriPath, 0755, true);
        //     mkdir($thumbPath, 0755, true);
        // } elseif (file_exists($oriPath) || file_exists($thumbPath)) {

        // }

        // CARA GW
        if (!file_exists(dirname($oriPath))) {
            mkdir(dirname($oriPath), 0755, true);
        }
        if (!file_exists(dirname($thumPath))) {
            mkdir(dirname($thumPath), 0755, true);
        }
        // else {
        //     mkdir($thumPath, 0755, true);
        // }


        $intervention = new ImageManager(new Driver);

        // generate main image
        $intervention->read($file)->scale(width: 900)->toWebp(100)->save($oriPath . $imageName);
        $intervention->read($file)->scale(width: 300)->toWebp(100)->save($thumPath . $imageName);

        // delete OldImage
        if ($oldImage) {
            Storage::delete(['public/back/' . $oldImage, 'public/back/thumbnail/' . $oldImage]);
        }
        $data['img'] = $imageName;
        return $data['img'];
    }
}
