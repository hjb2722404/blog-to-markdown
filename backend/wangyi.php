<?php
	/**
	 * 将网易博客导出的xml转换为markdown文件
	 * Created by PhpStorm.
	 * User: hjb2722404
	 * Date: 2018-12-17
	 * Time: 17:25
	 */
	include 'Markdown.php';
	require 'vendor/autoload.php';
	use League\HTMLToMarkdown\HtmlConverter;

	set_time_limit(0);
	$converter = new HtmlConverter();
	$xml = simplexml_load_file('./blog.xml');
	foreach($xml->children() as $period) {
		$study[] = get_object_vars($period);//获取对象全部属性，返回数组
	}
	echo '<pre>';
	foreach($study as $k => $v){
		$title = $v["title"];
		$time = $v["publishTime"];
		$date = date("Y-m-d H:i:s",$time);
		$htmlBody = $v["content"];
		$markdown = $converter->convert($htmlBody);
		$md = new Markdown($title,$date,$markdown);
		$md-> writeMd();
		echo "<h4>".$title."</h4>";
		echo "<h5>".$date."</h5>";
		echo "<p>".$markdown."</p>";
	}