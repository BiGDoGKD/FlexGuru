<?php
include APPROOT . '/views/admin/components/admin-header.php';
?>



<div class="container">


    <?php foreach ($data['posts'] as $post) : ?>
        <div class="container-item">
           
              
            
            <h2>
                <?php echo $post['title']; ?>
            </h2>

            <h3>

                <?php echo $post['created_at']; ?>

            </h3>

            <p>
                <?php echo $post['body'] ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>