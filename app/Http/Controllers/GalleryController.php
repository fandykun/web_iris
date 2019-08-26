<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('updated_at', 'desc')->get();
        return view('admin.pages.gallery', compact('galleries'));
    }

    public function getGallery($id)
    {
        try {
            $Gallery = Gallery::find($id);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }

        return response()->json($Gallery);
    }

    public function store(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/gallery', $fileNameToStore);
            } else
                return redirect()->back();
            $data = new Gallery();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->image = $fileNameToStore;
            $data->save();
        } catch (\Exception $e) {
            $eMessage = 'Add gallery, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('success', 'success');
    }

    public function update(Request $request)
    {
        try {
            $gallery = Gallery::find($request->id);
            $gallery->title = $request->title;
            $gallery->description = $request->description;
            $gallery->save();
        } catch (\Exception $e) {
            $eMessage = 'Add gallery, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('success', 'success');
    }

    public function delete(Request $request)
    {
        try {
            $gallery = Gallery::find($request->id);
            Storage::delete('public/gallery/' . $gallery->image);
            Gallery::where('id', $request->id)->delete();
        } catch (\Exception $e) {
            $eMessage = 'delete gallery, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('message', 'success');
    }
}
