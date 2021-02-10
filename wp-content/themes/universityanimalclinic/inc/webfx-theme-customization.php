<?php

function webfx_cta_top_header( string $value ){

    switch( $value ) {
        
        case "label":
            $label = get_field('phone_label','option'); 
            return __( $label, 'universityanimalclinic');
            break;
        
        case "pnumber":
            $pnumber = get_field('phone_number','option');
            return $pnumber;
            break;
        
        case "telpnumber":
            $tel = get_field('phone_number','option');
            $tel = str_replace('-','',$tel);
            return $tel;
            break;
        
        case "online-pharmacy":
            $label = get_field('online_pharmacy_label','option');
            return __( $label, 'universityanimalclinic' );
            break;
        
        case "pharmacy-link":
            $link = get_field('pharmacy_link','option');
            return $link;
            break;
            
        case "request-appointment":
            $label = get_field('request_appointment_label','option');
            return __( $label, 'universityanimalclinic' );
            break;
            
        case "request-appointment-link":
            $link = get_field('request_appointment_link','option');
            return $link;
            break;
        
        default:
            return false;

    }

}

/**
 * Use this inside an for each loop or any loop.
 */
function webfx_are_external_internal_link( array $item ) {

    $link_option = [];

    if( $item['external_or_internal_link'] == 'internal' ) {
        $link_option['link']    = $item['internal_link'];
        $link_option['target']  = '_self';
    }

    if( $item['external_or_internal_link'] == 'external' ) {
        $link_option['link'] = $item['external_link'];
        $link_option['target'] = '_blank';
    }

    return $link_option;

}

/**
 * This fn will work only with external internal link choice alone.
 * 
 */
function webfx_get_link_option( string $link ) {

    $link_option = [];

    if( $link == 'internal' ) {
        $link_option['link']    = get_field('internal_link_welcome_section');
        $link_option['target']  = '_self';
    }

    if( $link == 'external' ) {
        $link_option['link']    = get_field('external_link_welcome_section');
        $link_option['target']  = '_self';
    }

    return $link_option;
}

function webfx_get_veterinary_services( $offset = 0){

    $args = array(
        'post_type'         => 'veterinary-services',
        'posts_per_page'    => 12,
        'offset'            => $offset,
        'order'           => 'ASC'
    );

    return get_posts( $args );

}

function webfx_get_our_team( $page = 3 ){

    $args = array(
        'post_type'         => 'our-team',
        'posts_per_page'    => $page,
        'order'           => 'ASC'
    );

    return get_posts( $args );

}

function webfx_get_fun_facts_posts() {

    $args = array(
        'post_type'         => 'fun-facts',
        'posts_per_page'    => 12,
        'order'           => 'ASC'
    );

    return get_posts( $args );

}

function webfx_get_testimonial_posts() {
    $args = array(
        'post_type'         => 'testimonials',
        'posts_per_page'    => -1,
        'order'           => 'ASC'
    );

    return get_posts( $args );
}

function webfx_get_blog_posts() {
    $args = array(
        'post_type'         => 'post',
        'category'          => 3,
        'posts_per_page'    => 1,
        'order'           => 'ASC'
    );

    return get_posts( $args );
}

function webfx_trim_phone_numbers_hypens( $phoneNumber ) {

    $tel = str_replace('-','',$phoneNumber);
    
    return $tel;
    
}