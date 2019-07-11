<?php

namespace App\Http\Controllers\video;

use App\Model\VideoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;
class VideoController extends Controller
{
    /**
     * 视频播放
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function videoShow(){
        $vid = $_GET['vid'];

        $data=VideoModel::where('vid',$vid)->first()->toArray();

        return view('video.detail',['data'=>$data]);
    }
}