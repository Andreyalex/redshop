<div class="module module-latest">
    <h3><?php echo $heading_title; ?></h3>
    <div class="row product-layout">
      <?php foreach ($products as $product) { ?>
      <div class="product-item col-lg-12 col-md-3 col-sm-6 col-xs-12">
          <a class="image" href="<?php echo $product['href']; ?>"><img class="image-tail image-tail-small" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
          <h4 class="title"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
          <span class="text-description"><?php echo ($product['description'] != '..')? $product['description'] : ''; ?></span>
    <!--      <div class="button-group">-->
    <!--        <button type="button" onclick="addToCart('--><?php //echo $product['product_id']; ?><!--');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">--><?php //echo $button_cart; ?><!--</span></button>-->
    <!--      </div>-->
      </div>
      <?php } ?>
    </div>
</div>