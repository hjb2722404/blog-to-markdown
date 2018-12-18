<?php
/**
 * Created by PhpStorm.
 * User: hjb2722404
 * Date: 2016/5/31
 * Time: 10:08
 */

$csdnRegConfig = array(

    'title_pre' => "/<span class=\"link_title\".*?><a.*?>/ims",
    'title_beh' => "/<\/a>.*?<\/span>/ims",
    'title_reg' => "/<span class=\"link_title\".*?><a.*?>.*?<\/a>.*?<\/span>/ims",

    'content_reg' => "/<div class=\"markdown_views\">.*?<\/div>/ims",
    'content_pre' => "/<div class=\"markdown_views\">/ims",
    'content_beh' => "/<\/div>/ims",

    'date_reg' => "/<span class=\"link_postdate\">.*?<\/span>/ims",
    'date_pre' => "/<span class=\"link_postdate\">/ims",
    "date_beh" => "/<\/span>/ims",
    
    "page_size_reg" => "#共\d+页#ims",
    "url_list_reg" => "#<span class=\"link_title\"><a.*?>.*?</a></span>#ims",
    "list_title_reg_pre" => "#<span.*?href=\"#ims",
    "list_title_reg_beh" => "#\">.*?</a></span>#ims",
    
    "article_list_url" =>  "http://blog.csdn.net/username/article/list/"
);

