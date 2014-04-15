<?php /*
*************************************************************************
Plugin Name:  convert-japanese-punctuation
Plugin URI:   http://loumo.jp
Version:      0.1
Description:  convert japanese punctuation to comma and periods
Author:       ryomatsu
Author URI:   http://loumo.jp
**************************************************************************/


// convert subtitles to hn tag
add_filter( 'the_content', 'convert_japanese_punctuation' );

function convert_japanese_punctuation($content) {
    $content = preg_replace('/。([^。])/u', '. $1', $content);
    $content = preg_replace('/、([^、])/u', ', $1', $content);
    $content = str_replace(array('。','、'), array('.',','), $content);
    return $content;
}

