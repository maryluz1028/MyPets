<?php
function main_image_url($size){
    global $post;
    $image_id = get_post_thumbnail_id($post);
    $image_url = wp_get_attachment_image_src($image_id,$size);
    return $image_url[0];
}

function set_post_views(){
  if(is_single()){
      $post_Id=get_the_ID();
      $count_views=get_post_meta($post_Id,'post_views',true);
      if($count_views==''){
          delete_post_meta($post_Id,'post_views');
          add_post_meta($post_Id,'post_views',1);
      }else{
          update_post_meta($post_Id,'post_views',++$count_views);
      }
  }
}
add_action('wp','set_post_views');

function get_post_views($post_Id){
    $count_views=get_post_meta($post_Id,'post_views',true);
    if($count_views==''){
        delete_post_meta($post_Id,'post_views');
        add_post_meta($post_Id,'post_views',0);
        return 0;
    }
    return $count_views;
}
