<?php

$PLAYLIST=[];

$PLAYLIST[]=["title"=>"Похожее видео которое запустится по окончании основного 1","stream_url"=>"http://www.youtube.com/watch?v=http://www.youtube.com/watch?v=ZNLZla2xHUQ"];

$PLAYLIST[]=["title"=>"Похожее видео которое запустится по окончании основного 2","stream_url"=>"http://www.youtube.com/watch?v=http://www.youtube.com/watch?v=ZNLZla2xHUQ"];

$_CH[]=["title"=>"Основное видео","stream_url"=>"http://www.youtube.com/watch?v=xhFCmwrSxCU","playlist"=>$PLAYLIST];

$_PL["channels"]=$_CH;

print json_encode($_PL);

?>
