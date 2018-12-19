<?php
/**
 * Created by PhpStorm.
 * User: yp
 * Date: 2016/5/31
 * Time: 16:01
 */
function parseHtml($html) {
    //\r to \n
    $html = "\n" . str_replace("\r", '', $html) . "\n";

    //h1/h2/h3
    $html = preg_replace('#<h1[^>]*?>(.*?)</h1>#is', '#\1', $html);
    $html = preg_replace('#<h2[^>]*?>(.*?)</h2>#is', '##\1', $html);
    $html = preg_replace('#<h3[^>]*?>(.*?)</h3>#is', '###\1', $html);
    $html = preg_replace('#<h4[^>]*?>(.*?)</h4>#is', '####\1', $html);
    $html = preg_replace('#<h5[^>]*?>(.*?)</h5>#is', '#####\1', $html);

    //hr
    $html = preg_replace('#<hr\s*/?>#is', '---', $html);

    //em
    $html = preg_replace('#<em[^>]*?>(.*?)</em>#is', '*\1*', $html);

    //pre code
    if(preg_match_all('#<pre><code[^>]*?>(.*?)</code></pre>#is', $html, $tabCodes)) {
        foreach($tabCodes[0] as $key => $value) {
            if(preg_match_all('#.*?\n#is', $tabCodes[1][$key], $lines)) {
                $space8 = str_repeat(' ', 8);
                $tabCodes[1][$key] = '';
                foreach($lines[0] as $k => $v) {
                    $tabCodes[1][$key] .= $space8 . $v;
                }
            }
            $html = str_replace($tabCodes[0][$key], $tabCodes[1][$key], $html);
        }
    }

    //pre ol code
    $liPattern = '#[ ]*<li>(.*?)</li>[ ]*#is';
    $preOlPattern = '#<pre class="([^"]*?)"><ol>(.*?)</ol></pre>#is';
    if(preg_match_all($preOlPattern, $html, $preOls)) {
        foreach($preOls[0] as $key => $value) {
            //li
            if(preg_match_all($liPattern, $preOls[2][$key], $lis)) {
                foreach($lis[0] as $k => $v) {
                    $index = $k + 1;
                    $html = str_replace($v, strip_tags($lis[1][$k]), $html);
                }
            }
            $html = preg_replace($preOlPattern, sprintf('```%s\2```', $preOls[1][$key]), $html, 1);
        }
    }

    //code
    $html = preg_replace('#<code[^>]*?>(.*?)</code>#is', '\1', $html);

    //strong
    $html = preg_replace('#<strong[^>]*?>(.*?)</strong>#is', '**\1**', $html);

    //img
    $html = preg_replace('#<img src="([^"]*?)" alt="([^"]*?)" title="([^"]*?)"\s*/?>#is', '![\2](\1 "\3")', $html);
    $html = preg_replace('#(!\[.*?\]\(.*?) ""(\))#is', '\1\2', $html);

    //a
    $linkPattern = '#<a (?:target="_blank" )?href="([^"]*?)">(.*?)</a>#is';
    if(preg_match_all($linkPattern, $html, $links)) {
        $html .= "\n";
        foreach($links[0] as $key => $value) {
            $index = $key + 1;
            $html = str_replace($value, sprintf('[%s][%d]', $links[2][$key], $index), $html);
            $html .= sprintf("[%d]: %s\n", $index, $links[1][$key]);
        }
    }

    //a 注脚
    $footnotePattern = '#<a href="\#fn:([^"]*?)" id="fnref:\1" title="[^"]*?" class="footnote">\[(\d+)\]</a>#is';
    if(preg_match_all($footnotePattern, $html, $footnotes)) {
        foreach($footnotes[0] as $key => $value) {
            $footnote = $footnotes[1][$key];        //code
            $footnoteNum = $footnotes[2][$key];        //1
            $footnoteStr = sprintf('[^%s]', $footnote);
            //part 1
            $html = str_replace($value, $footnoteStr, $html);
            //part 2
            $html = str_ireplace(sprintf('<span id="fn:%s">[%s] </span>', $footnote, $footnoteNum), $footnoteStr . ': ', $html);
            //part 3
            $html = preg_replace(sprintf('#<a href="\#fnref:%s" title="[^"]*?" class="reversefootnote">.*?</a>#is', $footnote), '', $html);
        }
    }
    $html = preg_replace('#<div class="footnotes">\s*---\s*<small>(.*?)</small>\s*</div>#is', '\1', $html);
    $html = preg_replace('#<a class="reversefootnote".*?><-</a><br>#is', '', $html);

    //blockquote
    $blockPattern = '#<blockquote[^>]*?>\s*<ul>(.*?)</ul>\s*</blockquote>#is';
    if(preg_match_all($blockPattern, $html, $blocks)) {
        foreach($blocks[0] as $key => $value) {    //Every blockquote
            //li
            if(preg_match_all($liPattern, $blocks[1][$key], $lis)) {
                foreach($lis[0] as $k => $v) {
                    $html = str_replace($v, '> * ' . $lis[1][$k], $html);
                }
            }
        }
    }

    //All blockquote html
    $html = preg_replace($blockPattern, '\1', $html);

    //ul/li
    $ulPattern = '#<ul>(.*?)</ul>#is';
    if(preg_match_all($ulPattern, $html, $uls)) {
        foreach($uls[0] as $key => $value) {    //Every blockquote
            //li
            if(preg_match_all($liPattern, $uls[1][$key], $lis)) {
                foreach($lis[0] as $k => $v) {
                    $html = str_replace($v, '* ' . $lis[1][$k], $html);
                }
            }
        }
    }
    //All ul html
    $html = preg_replace($ulPattern, '\1', $html);

    //ol/li
    $olPattern = '#<ol>(.*?)</ol>#is';
    if(preg_match_all($olPattern, $html, $ols)) {
        foreach($ols[0] as $key => $value) {
            //li
            if(preg_match_all($liPattern, $ols[1][$key], $lis)) {
                foreach($lis[0] as $k => $v) {
                    $index = $k + 1;
                    $html = str_replace($v, sprintf('%d.  %s', $index, $lis[1][$k]), $html);
                }
            }
        }
    }
    //All ol html
    $html = preg_replace($olPattern, '\1', $html);

    //br
    $html = preg_replace('#<br\s*/?>#is', str_repeat(' ', 4), $html);

    //p not before pre
    $html = preg_replace('#<p>(.*?)</p>#is', '\1', $html);

    return $html;
}