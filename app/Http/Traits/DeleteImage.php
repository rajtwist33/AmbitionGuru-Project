<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait DeleteImage
{
    public function deleteImage($path, $disk = 'public')
    {
        if ($path != null && Storage::disk($disk)->exists($path)) {
            Storage::disk($disk)->delete($path);
        }
    }
}
