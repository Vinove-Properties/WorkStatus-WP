<?php
$elmClass = (isset($args['elm-class']) && !empty($args['elm-class'])) ? $args['elm-class'] : ''; 
$bposts = get_field('rel-bposts');
if( $bposts ) :
    $Enable = $bposts['is_enabled'];
    if($Enable == "yes" ) { 
        $posts =  $bposts['purl'];
        pixelShowLatestPosts($bposts, $posts, $elmClass);
    } 
endif; 
?>