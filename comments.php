<h2>Comments</h2>
<?php 
wp_list_comments(['avatar_size' => 80]);

$form_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment 
        // fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment">
        <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
        <br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">
        </textarea></p>',
); 

comment_form($form_args);