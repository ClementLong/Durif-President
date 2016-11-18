<?php

//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );

//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';

    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li class='waves-effect'><a",$out);
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li class='active'><a",$out);
    $out = str_replace("</span>","</a></li>",$out);
    $out = str_replace("</div>","",$out);

    return '<div class="center">
            <ul class="pagination">'.$out.'</ul>
        </div>';
}
