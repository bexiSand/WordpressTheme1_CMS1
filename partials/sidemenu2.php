<?php 
    global $post;
    $children = get_pages([
        "child_of" => $post->ID
    ]);
?>
<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
	<ul class="side-menu">
    <?php 
        $postID; 

        if($post->post_parent){
            // Is childpage
            $ancestors=get_post_ancestors($post->ID);
            $root=count($ancestors)-1;
            $postID = $ancestors[$root];
        } else {
            // Is parent page
            $postID = $post->ID; 
        }

        wp_list_pages([
            "child_of" => $postID,
            "title_li" => ""
        ]);
    ?>
    </ul>
</aside>

    