/**


**/

function gaf_polls_show_polls() {
    include_once __DIR_ .'/gaf_polls_show_polls.phtml';
}

add_shortcode( 'gaf_polls_show_polls', 'gaf_polls_show_polls' );
