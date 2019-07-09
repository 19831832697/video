<?php

namespace App\Http\Controllers\video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;
class VideoController extends Controller
{

    protected $accessKeyId = 'LTAItUOfkRs1QP2x';
    protected $accessKeySecret = 'ncqVH8ULabLKr8gv4VmL8sw7qREqzC';
    protected $bucket='video1809a';

    /**
     * 上传文字
     */
    public function oss1()
    {
        $client = new OssClient($this->accessKeyId,$this->accessKeySecret,env('ALI_OSS_ENOPOINT'));
        $obj='video1809a';
        $cont='Hello world';
        $res = $client->putObject($this->bucket,$obj,$cont);
        var_dump($res);
    }
    /**
     * 上传图片
     */
    public function oss2(){
        $client = new OssClient($this->accessKeyId,$this->accessKeySecret,env('ALI_OSS_ENOPOINT'));
        $obj=md5(time().mt_rand(1,99999)).'.jpg';
        $local_file='timg.jpg';
        $res=$client->uploadFile($this->bucket,$obj,$local_file);
        var_dump($res);
    }
}