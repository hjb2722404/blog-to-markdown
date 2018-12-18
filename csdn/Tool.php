<?php

/**
 * Created by PhpStorm.
 * User: yp
 * Date: 2016/6/2
 * Time: 15:11
 */
class Tool
{
    function getOutput($url){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$url);

        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    function mb_str_split($str,$split_length=1,$charset="UTF-8"){
        if(func_num_args()==1){
            return preg_split('/(?<!^)(?!$)/u', $str);
        }
        if($split_length<1)return false;
        $len = mb_strlen($str, $charset);
        $arr = array();
        for($i=0;$i<$len;$i+=$split_length){
            $s = mb_substr($str, $i, $split_length, $charset);
            $arr[] = $s;
        }
        return $arr;
    }
}