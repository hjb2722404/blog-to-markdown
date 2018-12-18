<?php
/**
 * Created by PhpStorm.
 * User: hjb2722404
 * Date: 2016/5/27
 * Time: 16:53
 */
include 'RegConf.php';

$url = "http://blog.csdn.net/hjb2722404/article/details/50731035";

$RegConfig = $csdnRegConfig;

function getOutPut ($url){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url);

    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

    $output = curl_exec($ch);

    curl_close($ch);

    return $output;
}
$output = getOutPut($url);

function getValue ($regPre,$regBeh,$reg,$output){

    preg_match($reg,$output,$match);
    $souceCode = $match[0];
    $str = preg_replace($regPre,"",$souceCode);
    $str = preg_replace($regBeh,"",$str);
    return $str;
}

function getArticleDate($output,$RegConfig) {

    $reg = $RegConfig['date_reg'];

    $regPre = $RegConfig['date_pre'];

    $regBeh = $RegConfig['date_beh'];

    $date = getValue($regPre,$regBeh,$reg,$output);

    return $date;
}

function getTitle($output,$RegConfig) {
    $reg = $RegConfig['title_reg'];

    $regPre = $RegConfig['title_pre'];

    $regBeh = $RegConfig['title_beh'];

    $title = getValue($regPre,$regBeh,$reg,$output);

    return $title;
}

function getContent($output,$RegConfig) {
    $reg = $RegConfig['content_reg'];

    $regPre = $RegConfig['content_pre'];

    $regBeh = $RegConfig['content_beh'];

    $content = getValue($regPre,$regBeh,$reg,$output);

    return $content;
}

$title = getTitle($output,$RegConfig);
$date = getArticleDate($output,$RegConfig);
$content = getContent($output,$RegConfig);

print_r($title);
print_r($date);
print_r($content);