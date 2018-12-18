<?php
	/**
	 * Created by PhpStorm.
	 * User: yp
	 * Date: 2018-12-18
	 * Time: 16:26
	 */
	require 'vendor/autoload.php';
	use League\HTMLToMarkdown\HtmlConverter;

	$converter = new HtmlConverter();

	$html = "---
title: \"[原创作品]第一次的失恋\"
layout: post
categories: life
---

<font face=\"楷体_GB2312\"> <font color=\"#ffcc00\">月儿在笑,</font></font><font color=\"#ffcc00\"> </font>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>笑我傻,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>第一次的失恋,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>如此龌龊.</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"> </font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>群星哭了,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>哭我的痴,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>第一次的失恋,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>无尽的心痛.</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"> </font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>天空无言,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>在沉默,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>等待,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>明日的阳光,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>依旧灿烂.</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"> </font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>落叶载浮尘,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>碧草吹清风,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>第一次的失恋,</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>爱将何去何从?</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"> </font></span>

<span style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\">寻找劲友<span lang=\"EN-US\"></span></font></span>

<span style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\">他或是她在哪？<span lang=\"EN-US\"></span></font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>我独自弹奏，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>没有乐友，没有交流，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>没有日晕，没有喜悦。</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"> </font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>孤独，深埋，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>剩下我，剩下单调的音符，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>独自忍受，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>劲乐团的寂寞。</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"> </font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>劲友，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>来吧，</font></span>

<span lang=\"EN-US\" style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\"><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span><span style=\"mso-spacerun: yes\"> </span>把光辉，</font></span>

<span style=\"COLOR: black; FONT-FAMILY: 楷体_GB2312\"><font color=\"#ffcc00\">带给我。<span lang=\"EN-US\"></span></font></span>
";
	$markdown = $converter->convert($html);

	echo $markdown;


