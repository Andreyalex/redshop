<div class="module module-featured">
    <h3><?php echo $heading_title; ?></h3>
    <div class="row product-layout">
      <?php foreach ($products as $product) { ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="product-thumb transition">
          <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <?php if ($product['price']) { ?>
                <div class="price" style="padding-top:0">
                    <?php if (!$product['special']) { ?>
                        <?php echo $product['price']; ?>
                    <?php } else { ?>
                        <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
                    <?php } ?>
                    <?php if ($product['tax']) { ?>
                        <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="button-group" class="col-xs-12">
                <button style="width:100%" type="button" onclick="addToCart('<?php echo $product['product_id']; ?>');"><i class="fa fa-shopping-cart"></i> <span>Купить</span></button>
            </div>
        </div>
      </div>
      <?php } ?>
    </div>
</div>