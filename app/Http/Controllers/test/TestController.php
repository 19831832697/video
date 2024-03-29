<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;

class TestController extends Controller
{
    protected $accessKeyId = 'LTAICnxuiEEuT5UE';
    protected $accessKeySecret = 'WwU0of8X70kj0S5mVr2Qa6xEUbnAnx';
    protected $bucket='video1809';


    public function oss1()
    {
        $client = new OssClient($this->accessKeyId,$this->accessKeySecret,env('ALI_OSS_ENOPOINT'));
        $obj='video1809';
        $cont='Hello world';
        $res = $client->putObject($this->bucket,$obj,$cont);
        var_dump($res);
    }
    /**
     * 上传图片
     */
    public function oss2()
    {
        $client = new OssClient($this->accessKeyId,$this->accessKeySecret,env('ALI_OSS_ENOPOINT'));
        $obj=md5(time().mt_rand(1,99999)).'.jpg';
        $local_file='timg.jpg';
        $res=$client->uploadFile($this->bucket,$obj,$local_file);
        var_dump($res);
    }
}
