<?php

namespace App\Http\Controllers\cron;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use OSS\Core\OssException;
use OSS\OssClient;

class CronController extends Controller
{
    protected $accessKeyId = 'LTAICnxuiEEuT5UE';
    protected $accessKeySecret = 'WwU0of8X70kj0S5mVr2Qa6xEUbnAnx';
    protected $bucket='video1809';

    /**
     * 上传视频至OSS
     * @throws OssException
     */
    public function ToOss(){
        $client =new OssClient($this->accessKeyId,$this->accessKeySecret,env('ALI_OSS_ENOPOINT'));
        //获取目录中的文件
        $file_path = storage_path('app/public/files');
//        var_dump($file_path);
        $file_list = scandir($file_path);
        foreach($file_list as $k=>$v){
            if($v=='.' || $v=='..'){
                continue;
            }
            $file_name = Str::random(5).'.jpg';
            $local_file = $file_path . '/'.$v;
//            echo '本地文件：'.$local_file;
            try{
                $client->uploadFile($this->bucket,$file_name,$local_file);
            }catch(OssException $e){
                printf(__FUNCTION__ . ": FAILED\n");
                printf($e->getMessage() . "\n");
                return;
            }
            //上传成功后 删除本地文件
            unlink($local_file);
        }
    }
}
