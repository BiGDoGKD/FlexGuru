<?php
   require APPROOT . '/views/includes/header.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation-visitor.php';
    ?>
</div>

<html>

    <style>
        
        /* Blog */
        .dark {
            background-color: #000000;
            box-shadow: 0px 0px 10px #000000;
        }
        
        .container {
            margin: 0 auto;
            width: 80%;
            padding: 100px 0px;
        }
        
        .container-item {
            border-bottom: 1px solid #dcdcdc;
        }
        
        </style>

</html>

<div class="container">
    <?php if(isLoggedIn()): ?>
        <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
            Create
        </a>
    <?php endif; ?>

    <?php foreach($data['posts'] as $post): ?>
        <div class="container-item">
            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
                <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">
                    Update
                </a>
                <form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn red">
                </form>
            <?php endif; ?>
            <h2>
                <?php echo $post->title; ?>
            </h2>

            <h3>
                <?php echo 'Created on: ' . date('F j h:m', strtotime($post->created_at)) ?>
            </h3>

            <p>
                <?php echo $post->body ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>
