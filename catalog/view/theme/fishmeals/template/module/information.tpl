<div class="sidebar">
    <ul class="nav nav-tabs nav-stacked">
        <?php foreach ($informations as $information) { ?>
            <li>
                <a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a>
            </li>
        <?php } ?>
    </ul>
</div>