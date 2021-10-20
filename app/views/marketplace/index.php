<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/marketplace/includes/header.php';
?>
<div class="market">
    <div class="marketplace">
        <?php
        for ($i = 0; $i < 30; $i++) {
            include APPROOT . './views/marketplace/components/gigcard.php';
        }
        ?>
    </div>
</div>
<style>
    .market {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .marketplace {
        margin: auto;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
    }
</style>

<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>