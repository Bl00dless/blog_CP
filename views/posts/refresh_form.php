<p>Update:</p>

<form method="post" action="?controller=posts&action=refresh&id=<?php echo $post->id; ?>">
    <label>Title: </label><input type="text" name="post_author" value="<?php echo $post->author ?>"/>
    <label>Article: </label><textarea name="post_cont"><?php echo $post->content ?></textarea>
    <input type="submit" value='Update' autocomplete="off" />
</form>