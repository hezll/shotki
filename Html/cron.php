<?php    
set_time_limit(120);
$b = file_get_contents("http://www.shotki.com/index.php?s=/Admin-Collect-Feifei-action-day-fid-3-xmlurl-http://data.adncms.cn/-reurl--pic--vodids--cid--wd--h-24-p-1-page-2-inputer-kuaibo-play-");//http://www.shotki.com/index.php?s=Admin-Collect-Mainbyday-id-http://union.ff84.com/-play--cid-qvodzy
$a = file_get_contents("http://www.shotki.com/index.php?s=/Admin-Collect-Feifei-action-day-fid-3-xmlurl-http://data.adncms.cn/-reurl--pic--vodids--cid--wd--h-24-p-1-page-1-inputer-kuaibo-play-");//http://www.shotki.com/index.php?s=Admin-Collect-Mainbyday-id-http://union.ff84.com/-play--cid-qvodzy
$c = file_get_contents("http://www.shotki.com/index.php?s=Admin-Collect-Feifei-action-day-fid-23-xmlurl-http://www.bdyyzy.com/-h-24");//http://www.shotki.com/index.php?s=Admin-Collect-Mainbyday-id-http://union.ff84.com/-play--cid-qvodzy


function tapi($url, $method = 'get', $params = array()){
    $c = new Curl_Class;
    $c->timeout = 600;
    $result_json = $c->execute($method, $url, $params);
    $result_json = mb_convert_encoding($result_json, 'utf-8', 'gbk');
    $result = json_decode($result_json, true);

    return $result;
}
?>