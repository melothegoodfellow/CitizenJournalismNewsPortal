<?php foreach ($comment as $comment_item): ?>

    <div class="main container backgroundimage">
	    <span class="mname"><?php echo $this->session->userdata('fname')." ".$this->session->userdata('mname')." ".$this->session->userdata('lname') ?></span>
        <?php echo $comment_item['comment'] ?>
		<?php echo $comment_item['time']."  ".$comment_item['date'];?>
    </div>
 

<?php endforeach ?>
<br><br>

<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
<?php if($this->session->userdata('fname')){?>

	<form  id="forumCommentPost" name="forumCommentPost" action="commentPost" method="post"  enctype="multipart/form-data">

	<h4><span class="label label-info">Comment : </span></h4>
	<textarea rows="5" cols=30" name="comment"></textarea>

	<input type="hidden" id="fpost" name="fpost" value="<?php echo $forum_item['f_id'];?>"/>
	<input class="button medium gradient blue rnd8" type="submit" id="submit" name="submit" value="Post"/>
			 
	</form>
<?php
}
else{
     echo "<h4>Login to comment</h4>";
}
?>
	</div>
	<div class="imagesClear"></div>
	
  </div>

       
	
	
	
	</div>