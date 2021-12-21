<?php

$PLAYLIST=[];

$PLAYLIST[]=["title"=>"Похожее видео которое запустится по окончании основного 1","stream_url"=>"https://test121d23.herokuapp.com/stream/magnet%3A%3Fxt%3Durn%3Abtih%3A48b1e1c185a40f6916ba9bb5df9aa7b84d8dad77%26dn%3DThe.Witcher.S02.1080p.NF.WEBRip.DDP5.1.Atmos.x264-TEPES%255Brartv%255D%26tr%3Dhttp%253A%252F%252Ftracker.trackerfix.com%253A80%252Fannounce%26tr%3Dudp%253A%252F%252F9.rarbg.me%253A2990%26tr%3Dudp%253A%252F%252F9.rarbg.to%253A2880%26tr%3Dudp%253A%252F%252Ftracker.slowcheetah.org%253A14800%26tr%3Dudp%253A%252F%252Ftracker.tallpenguin.org%253A15780?file=The.Witcher.S02.1080p.NF.WEBRip.DDP5.1.Atmos.x264-TEPES%5Brartv%5D%2FThe.Witcher.S02E02.Kaer.Morhen.1080p.NF.WEB-DL.DDP5.1.Atmos.x264-TEPES.mkv
"];

$PLAYLIST[]=["title"=>"Похожее видео которое запустится по окончании основного 2","stream_url"=>"http://www.youtube.com/watch?v=http://www.youtube.com/watch?v=ZNLZla2xHUQ"];

$_CH[]=["title"=>"Основное видео","stream_url"=>"http://www.youtube.com/watch?v=xhFCmwrSxCU","playlist"=>$PLAYLIST];

$_PL["channels"]=$_CH;

print json_encode($_PL);

?>
