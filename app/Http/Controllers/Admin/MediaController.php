<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\MediaUploadRequest;
use App\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($part = 30)
    {
        $medias = Media::paginate($part);
        //$json = json_encode($medias->toArray());
        return view('admin.media.index',compact('medias'));
    }

    public function upload(MediaUploadRequest $request){
        $photo = $request->file('photo');
        $data  = $request->only(['name']);
        $name =  (Carbon::now()->format('YmdHis')).'_'.$photo->getClientOriginalName();
        $path =  $photo->storeAs('images', $name);
        $data['url'] = $path;
        Media::create($data);
        return redirect()->route('admin.media');
    }


    public function destroy($url)
    {
        $media = Media::where(['url' => $url ])->first();
        $media->delete();
        return redirect()->route('admin.media.index');
    }
}
