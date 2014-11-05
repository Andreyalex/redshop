<div class="list-group">
    <?php foreach ($informations as $information) { ?>
    <a href="<?php echo $information['href']; ?>" class="list-group-item"><?php echo $information['title']; ?></a>
    <?php } ?>
</div>