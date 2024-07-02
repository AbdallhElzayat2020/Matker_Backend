<?php

namespace App\traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait FileUploadTrait
{

//    public function handleFileUpload(Request $request, string $fileName, ?string $oldPath = null, string $dir = 'uploads'): ?string
//    {
//
//        //check if file exists
//        if ($oldPath && File::exists(public_path($oldPath))) {
//            File::delete(public_path($oldPath));
//        }
//
//        //check if request have img
//        if (!$request->hasFile($fileName)) {
//            return null;
//        }
//
//
//
//        $file = $request->file($fileName);
//
//        $extension = $file->getClientOriginalExtension();
//
//        $updatedFileName = Str::random(20) . '.' . $extension;
//
//        $file->move(public_path($dir), $updatedFileName);
//
//        $filePath = $dir . '/' . $updatedFileName;
//
//        return $filePath;
//    }
    public function handleFileUpload(Request $request, string $fileName, ?string $oldPath = null, string $dir = 'uploads'): ?string
    {
        // Check if request has the file
        if (!$request->hasFile($fileName)) {
            return $oldPath; // Return the old path if no new file uploaded
        }

        // Delete old file if exists
        if ($oldPath && File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }

        // Get the file from the request
        $file = $request->file($fileName);

        // Generate a unique file name
        $extension = $file->getClientOriginalExtension();
        $updatedFileName = Str::random(20) . '.' . $extension;

        // Move the file to the specified directory
        $file->move(public_path($dir), $updatedFileName);

        // Build the file path
        $filePath = $dir . '/' . $updatedFileName;

        return $filePath;
    }

    //Handle File Delete
    public function deleteFile(string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
