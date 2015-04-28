<p>Here is a list of all posts:</p>

<p><a href="?controller=posts&action=append_show">Create new article</a></p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->author; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>More</a>
    <a href='?controller=posts&action=remove&id=<?php echo $post->id; ?>'>Delete</a>
    <a href='?controller=posts&action=refresh_show&id=<?php echo $post->id; ?>'>Edit</a>
  </p>
<?php } ?>