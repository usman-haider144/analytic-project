<?php 

function your_load_more()
{
        // $one_post .= "<div class='row'>";
    $count = $_POST["count"];

    $cpt = 1;

    $args = array(
        'posts_per_page' => -1,
        'post_type' =>  array( 'service'), //, '' 
        // 'post_type'   => 'post', // change the post type if you use a custom post type
        'post_status' => 'publish'
    );

    $articles = new WP_Query( $args );

    $ar_posts = array();



    if( $articles->have_posts() )
    {
        while( $articles->have_posts() )
        {
            $articles->the_post();

            $one_post = "";

            if( $cpt > $count && $cpt < $count+6 )
            {


                $one_post .= "<div class='col-md-6 col-sm-12 bg-post'>";
                $one_post .= "<div class='blog-post'>"; 
                $one_post .= "<img src='" . get_the_post_thumbnail_url() . "' class='polyg img-fluid'>"; 
                $one_post .= "<div class='pad-text'>"; 
                $one_post .= "<h3><a href='".get_the_permalink()."'> " . get_the_title() . "</a></h3>";
                $one_post .= "<p>" . get_the_excerpt() . "</p>";                                               
                $one_post .= "<p class='byline'>" ;
                $one_post .= "Author : " ;
                $one_post .= "<a href='" . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . "'> " . get_the_author() . "</a> | ";
                $one_post .= "Categories : ".  get_the_category();

                $one_post .= "</p>";
                $one_post .= "</div>";
                $one_post .= "</div>";
                $one_post .= "</div>";

                

                $ar_posts[] = $one_post;

                if( $cpt == $articles->found_posts )
                    $ar_posts[] = "0";

            }
            $cpt++;
        }
    }
    echo json_encode($ar_posts);
    die();
}
add_action( 'wp_ajax_your_load_more', 'your_load_more' );
add_action( 'wp_ajax_nopriv_your_load_more', 'your_load_more' );