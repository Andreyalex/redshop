<?php if (!empty($reviews)) { ?>
<div class="module module-reviews">
    <h3><?php echo $heading_title; ?></h3>
    <div class="row review-layout">
      <?php foreach ($reviews as $review) { ?>
        <div class="product-item col-lg-12">
            <a class="image" href="<?php echo $review['href']; ?>">
                <?php if ($review['thumb']) { ?>
                    <img src="<?php echo $review['thumb']; ?>" alt="<?php echo $review['product_name']; ?>" title="<?php echo $review['product_name']; ?>" class="img-responsive image-tail image-tail-small" />
                <?php } ?>
            </a>
            <h4 class="title"><a href="<?php echo $product['href']; ?>"><?php echo $review['product_name']; ?></a></h4>
            <span class="text-description"><?php echo $review['text'] ?></span>
            <div class="rating">
                <?php for($i=0; $i < 5; $i++) { ?>
                <span class="fa fa-stack">
                    <?php if ($i < $review['rating']) { ?>
                        <i class="fa fa-star fa-stack-2x"></i>
                    <?php } ?>
                    <i class="fa fa-star-o fa-stack-2x"></i>
                </span>
                <?php } ?>
            </div>
        </div>
      <?php } ?>
    </div>
</div>
<?php } ?>