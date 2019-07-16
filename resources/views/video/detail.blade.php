<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
    <title>视频播放</title>
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.2/skins/default/aliplayer-min.css" />
    <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-min.js"></script>
</head>
<body>
<div class="prism-player" id="player-con"></div>
<script>
    var player = new Aliplayer({
            "id": "player-con",
            "source": "{{env('CDN_HOST')}}/{{$data['path']}}",
            "width": "100%",
            "height": "500px",
            "autoplay": true,
            "isLive": false,
            "rePlay": false,
            "playsinline": true,
            "preload": true,
            "controlBarVisibility": "hover",
            "useH5Prism": true
        }, function (player) {
            console.log("The player is created");
        }
    );
</script>

{{--<div style="border: 1px solid grey">--}}
    {{--<video src="{{env('CDN_HOST')}}/{{$data['path']}}" controls="controls"></video>--}}
{{--</div>--}}
</body>
</html>


