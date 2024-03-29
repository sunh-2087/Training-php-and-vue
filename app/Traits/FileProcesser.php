<?php

namespace App\Traits;

use Storage;
use Carbon\Carbon;

trait FileProcesser
{
    /**
     * Upload image file
     *
     * @param File $file
     * @param string $pathUpload
     * @return string
     */
    public function uploadImage($file, $pathUpload)
    {
        $randomName = uniqid() . time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->move($pathUpload, $randomName);

        return basename($filePath);
    }

    /**
     * Upload image and save to storage
     * @param  $request
     * @param string $name
     * @param string $pathUpload
     *
     * @return string $filePath
     */
    public function uploadUserAvatar($request, $name, $pathUpload)
    {
        $file = $request->file($name);
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;
        $filePath = $file->store($pathUpload . '/' . $year . '/' . $month);

        return $filePath;
    }
}
