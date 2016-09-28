<?php 
global $wpdb;
$advs=$wpdb->get_results("select * from ".$wpdb->prefix."adrotate where type='active'");
if($advs){
echo '<div class="adv_box">';
    foreach($advs as $ad){
        echo do_shortcode('[adrotate banner="'.$ad->id.'"]');
    }
echo '</div>';
}
?>