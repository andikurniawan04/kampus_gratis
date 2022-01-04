<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index() {
        $banner = Banner::all();
        return view('admin.banner', compact('banner'));
    }

    public function create() {
        return view('admin.banner.create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'heading' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $upload = $request->gambar;
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/". $file_name;
            $request->gambar->storeAs('public/banner', $file_name);
        } else {
            $file_name = null;
        }

        Banner::create([
            'heading' => $request->heading,
            'deskripsi' => $request->deskripsi,
            'gambar' => $txt,
        ]);
        return redirect()->route('/banner')
            ->with('success', 'Banner Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {


        $banner = Banner::findOrFail($id);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $file_name = time().'.'.$extention;
            $txt = "storage/banner/". $file_name;
            $request->gambar->storeAs('public/banner', $file_name);
            $banner->gambar = $txt;
            $banner->deskripsi = $request->deskripsi;
            $banner->heading = $request->heading;
        }else{}

        $banner->save();
        return redirect()->route('/banner')
        ->with('edit', 'Banner Berhasil Diedit');
    }

    public function destroy($id)
    {
        Banner::where('id', $id)->delete();
        return redirect()->route('/banner')
        ->with('delete', 'Banner Berhasil Dihapus');
    }


}
