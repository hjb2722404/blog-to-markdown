<?php
/**
 * Created by PhpStorm.
 * User: yp
 * Date: 2016/5/31
 * Time: 15:52
 */
include 'parseHtml.php';

class Markdown
{
    private $title;
    private $date;
    private $content;
    private $filename;
    private $myfile;
    private $yaml;


    function __construct($title,$date,$content)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content =$content;
        $this->yaml = "---\n";

    }

    function writeMd(){
        $this->filename = "2016-05-31-".iconv("UTF-8", "GBK", $this->title).".md";
        $this->myfile = @fopen($this->filename,"w");
        @fwrite($this->myfile,$this->yaml);
        @fwrite($this->myfile,"title: \"".$this->title."\"\r\n");
        @fwrite($this->myfile,"layout: post\r\n");
        @fwrite($this->myfile,"categories: life\r\n");
        @fwrite($this->myfile,$this->yaml);
        @fclose($this->myfile);
        $this->myfile = @fopen($this->filename,"a");
        @fwrite($this->myfile,parseHtml($this->content));
        @fclose($this->myfile);
    }


}