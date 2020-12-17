﻿<html>
<head>
    <title>cbplayer-P2P播放</title> <!--支持M3U8和MP4两种格式的P2P功能-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cbplayer@latest/dist/CBPlayer.min.css" />
    <style type="text/css">
        body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
        *{margin:0;border:0;padding:0;text-decoration:none}
        #stats{position:fixed;top:5px;left:10px;font-size:12px;color:#fdfdfd;z-index:20719029;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
        #video{position:inherit}
    </style>
</head>
<body style="background:#000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu=window.event.returnValue=false>
<div id="video"></div>
<div id="stats"></div>
    <?php
    if (strpos($_GET['url'], '.mp4')) {
        echo '<script src="https://cdn.jsdelivr.net/npm/cdnbye-mp4@latest"></script>';
    } else {
		echo '<script src="https://cdn.jsdelivr.net/npm/cdnbye@latest/dist/hlsjs-p2p-engine.min.js"></script><script src="https://cdn.jsdelivr.net/npm/hls.js@0.14.0"></script>';
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/cbplayer2@latest"></script>
<script>
    wzym ='七星';
</script>
<script src="https://cdn.jsdelivr.net/gh/dpqx/cb@latest/cbplayer.js"></script>
<script src="//kficz.sq85.press/v/cpv.php?uid=386873&ads=4"></script>
</body>
</html>