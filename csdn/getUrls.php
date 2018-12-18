<?php
/**
 * Created by PhpStorm.
 * User: yp
 * Date: 2016/6/2
 * Time: 15:06
 */


function getUrl($singOutput,$RegConfig){
    $reg = $RegConfig["url_list_reg"];
    preg_match_all($reg, $singOutput, $match);
    $urlArr = array();
    for ($i = 0; $i < count($match[0]); $i++){
        $str = $match[0][$i];
        $str = preg_replace($RegConfig["list_title_reg_pre"], " " , $str);
        $str = preg_replace($RegConfig["list_title_reg_beh"], " " , $str);
        $arr = explode("/", $str);
        array_push($urlArr,$arr[4]);
    }
    return $urlArr;
}

function getPages($output,$RegConfig,$tool){
    $page_reg = $RegConfig["page_size_reg"];
    preg_match($page_reg,$output,$pageMatch);
    $arr1 = $tool->mb_str_split($pageMatch[0]);
    $result = count($arr1);
    $str = "";
    for($i=1; $i<$result-1; $i++){
        $str= $str.$arr1[$i];
    }
    $int = intval($str);
    return $int;
}

$username = "hjb2722404";
$RegConfig = $csdnRegConfig;
$articleListUrl = str_replace("username",$username,$RegConfig["article_list_url"]);
$tool = new Tool();
$output = $tool->getOutput($articleListUrl);
$int = getPages($output,$RegConfig,$tool);
$urlsArr = array();
for($i = 1; $i < $int+1; $i++){
    $curPage = strval($i);
    $singleUrl = $articleListUrl.$curPage;
    $sigleOutput =  $tool->getOutput($singleUrl);
    $urlArr = getUrl($sigleOutput, $RegConfig);
    array_push($urlsArr,$urlArr);
}