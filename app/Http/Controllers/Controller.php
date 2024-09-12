<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function save_file(Request $request, $menu_name, $column_name = 'file')
    {
        if ($request->hasFile($column_name)) {
            $file = $request->file($column_name);
            $filename = Str::random(16).'_' . $column_name . '.'. $file->extension();

            $path = $file->storeAs('uploads/'.$menu_name, $filename, 'public');
            return $path;
        }
        return '';
    }

    public function delete_file($nama_file)
    {
        try {
            Storage::delete($nama_file);
        } catch (\Exception $e) {}
    }
}
