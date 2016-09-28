<?php
if(isset($atts['post_id'])){
    $postID = $atts['post_id'];   
}else{
     $postID = $post->ID;
}
global $wpdiscuz,$current_user;
// INIT AGAIN TEXT 
foreach($wpdiscuz->optionsSerialized->phrases as $key=>$val)
{
	$wpdiscuz->optionsSerialized->phrases[$key]=str_replace(array("Comment",'comment'),array("Question",'question'),$val);
}

$wpdiscuz->optionsSerialized->isEmailFieldRequired=0;
$wpdiscuz->optionsSerialized->phrases['wc_comment_join_text']='Enter the discussion';
$wpdiscuz->optionsSerialized->phrases['wc_reply_text']='Answer';


$commentsCount = $wpdiscuz->dbManager->getCommentsCount($postID);
$header_text = '<span class="wc_header_text_count">' . $commentsCount . '</span> ';
$header_text .= ($commentsCount > 1) ? $wpdiscuz->optionsSerialized->phrases['wc_header_text_plural'] : $wpdiscuz->optionsSerialized->phrases['wc_header_text'];
$header_text .= ' ' . $wpdiscuz->optionsSerialized->phrases['wc_header_on_text'];
$header_text .= ' "' . get_the_title($postID) . '"';
 ?>
 <div class="wpdiscuz-loading-bar <?php echo ($current_user->ID) ? 'wpdiscuz-loading-bar-auth' : 'wpdiscuz-loading-bar-unauth'; ?>"><img class="wpdiscuz-loading-bar-img" alt="<?php _e('wpDiscuz', 'wpdiscuz'); ?>" src="<?php echo plugins_url(WPDISCUZ_DIR_NAME . '/assets/img/loading.gif'); ?>" width="32" height="25" /></div>
<div id="questionComment" class="parentID">
<input type="hidden" id="postId" value="<?php echo $postID; ?>" />
<div id="wpcomm" class="wpdiscuz_unauth" style="border:none;">
	<!-- COMMENT BAR -->
	<?php if (!$wpdiscuz->optionsSerialized->headerTextShowHide) { ?>
                <div class="wc-comment-bar">
                    <p class="wc-comment-title">
                        <?php echo ($commentsCount) ? $header_text : $wpdiscuz->optionsSerialized->phrases['wc_be_the_first_text']; ?>
                    </p>
                    <div class="wpdiscuz_clear"></div>
                </div>
     <?php } ?>
	 <!-- FORM -->
	 <?php $wpdiscuz->helper->formBuilder('main', '0_0', $commentsCount, $current_user); ?>
      <div id="wpdiscuz_hidden_secondary_form" style="display: none;">
                <?php $wpdiscuz->helper->formBuilder(0, 'wpdiscuzuniqueid', $commentsCount, $current_user); ?>
      </div>
	  <!--SORTING-->
	  <div class="wpdiscuz-front-actions">
             <div class="wpdiscuz-sort-buttons" style="font-size:14px;"><?php echo $wpdiscuz->optionsSerialized->phrases['wc_sort_by']; ?>: &nbsp;
                            <span class="wpdiscuz-sort-button wpdiscuz-date-sort-desc"><?php echo $wpdiscuz->optionsSerialized->phrases['wc_newest']; ?></span> | 
                            <span class="wpdiscuz-sort-button wpdiscuz-date-sort-asc"><?php echo $wpdiscuz->optionsSerialized->phrases['wc_oldest']; ?></span>
                            <?php if (!$wpdiscuz->optionsSerialized->votingButtonsShowHide) { ?>
                                | <span rel="643" class="wpdiscuz-sort-button wpdiscuz-vote-sort-up"><?php echo $wpdiscuz->optionsSerialized->phrases['wc_most_voted']; ?></span>
					<?php } ?>
			</div>
	</div>
  <div id="wcQuestionWrapper" class="wc-thread-wrapper">

<?php
	$args = array();
	$args['orderby'] = 'comment_date_gmt';
	$args['order'] = 'desc';

	
	$showLoadeMore = 1;
	 if (isset($_GET['_escaped_fragment_'])) {
		parse_str($_GET['_escaped_fragment_'], $query_array);
		$lastParentId = isset($query_array['parentId']) ? intval($query_array['parentId']) : 0;
		if ($lastParentId) {
				$args['last_parent_id'] = $lastParentId--;
		}
	}

	if ($wpdiscuz->optionsSerialized->showSortingButtons && $wpdiscuz->optionsSerialized->mostVotedByDefault && !$wpdiscuz->optionsSerialized->votingButtonsShowHide) {
		$args['orderby'] = 'by_vote';
	}
    $args['postId'] =$postID;
	$commentData = $wpdiscuz->getWPCommentsNEW($args);

	// show list comment					
	echo $commentData['comment_list'];

	// show load more
	if($commentData['is_show_load_more']){
		$loadMoreButtonText = ($wpdiscuz->optionsSerialized->commentListLoadType == 1) ? $wpdiscuz->optionsSerialized->phrases['wc_load_rest_comments_submit_text'] : $wpdiscuz->optionsSerialized->phrases['wc_load_more_submit_text'];
	?> <div class="wpdiscuz-comment-pagination">
		<div class="wc-load-more-submit-wrap">
			<a class="wc-load-more-link" href="<?php echo get_permalink($postID) . '#!parentId=' . $commentData['last_parent_id']; ?>">
			<button name="submit"  class="wc-load-more-submit wc-loaded button">
			<?php echo $loadMoreButtonText; ?>
			</button>
		</a>
		</div>
			<input id="wpdiscuzHasMoreComments" type="hidden" value="<?php echo $commentData['is_show_load_more']; ?>" />
		</div>
	<?php } ?>
</div>
</div>
</div>