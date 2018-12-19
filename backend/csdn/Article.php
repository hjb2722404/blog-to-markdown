<?php
/**
 * Created by PhpStorm.
 * User: hjb2722404
 * Date: 2016/5/30
 * Time: 15:05
 */

namespace Article;


class Article
{
    private  $regconfig;

    function __construct($url,$regconfig){
        $this-> regconfig = $regconfig;
    }

    private function getValue ($regPre,$regBeh,$reg,$output){

        preg_match($reg,$output,$match);
        $souceCode = $match[0];
        $str = preg_replace($regPre,"",$souceCode);
        $str = preg_replace($regBeh,"",$str);
        return $str;
    }

    function getArticleDate($output) {

        $reg = $this->regconfig['date_reg'];

        $regPre = $this->regconfig['date_pre'];

        $regBeh = $this->regconfig['date_beh'];

        $date = $this-> getValue($regPre,$regBeh,$reg,$output);

        return $date;
    }

    function getTitle($output) {
        $reg = $this->regconfig['title_reg'];

        $regPre = $this->regconfig['title_pre'];

        $regBeh = $this->regconfig['title_beh'];

        $title = $this-> getValue($regPre,$regBeh,$reg,$output);

        return $title;
    }

    function getContent($output) {
        $reg = $this->regconfig['content_reg'];

        $regPre = $this->regconfig['content_pre'];

        $regBeh = $this->regconfig['content_beh'];

        $content = $this-> getValue($regPre,$regBeh,$reg,$output);

        return $content;
    }

}