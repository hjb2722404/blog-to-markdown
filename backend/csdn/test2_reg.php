<?php
/**
 * Created by PhpStorm.
 * User: hjb2722404
 * Date: 2016/5/31
 * Time: 10:11
 */
include 'RegConf.php';
include 'Tool.php';
include 'Article.php';
include 'getUrls.php';
include 'Markdown.php';

for($i = 0 ; $i < count($urlsArr); $i++){
    for($j = 0; $j < count($urlsArr[$i]); $j++){
        $url = "http://blog.csdn.net/".$username."/article/details/".$urlsArr[$i][$j];
        $article = new \Article\Article($url,$RegConfig);
        $output = $tool -> getOutput($url);
        $title = trim($article -> getTitle($output));
        $date = $article -> getArticleDate($output);
        $content = $article -> getContent($output);
        $md = new Markdown($title,$date,$content);
        $md-> writeMd();
    }
}

echo "导出完成";



