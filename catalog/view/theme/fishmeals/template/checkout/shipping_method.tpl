<?php if ($error_warning) { ?>
<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
<?php } ?>
<?php if ($shipping_methods) { ?>
<p><?php echo $text_shipping_method; ?></p>
<?php foreach ($shipping_methods as $shipping_method) { ?>
<?php if (!$shipping_method['error']) { ?>
<?php foreach ($shipping_method['quote'] as $quote) { ?>
<div class="radio">
  <label>
    <?php if ($quote['code'] == $code || !$code) { ?>
    <?php $code = $quote['code']; ?>
    <input type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>" />
    <?php } ?>
    <?php echo $quote['title']; ?><?php if(intval($quote['text']) > 0) echo ' - '.$quote['text']; ?></label>
</div>
<?php } ?>
<?php } else { ?>
<div class="alert alert-danger"><?php echo $shipping_method['error']; ?></div>
<?php } ?>
<?php } ?>
<?php } ?>
<div class="shipping-method-addition" id="shipping-method-addition-newpost-newpost">
    <p><strong>Укажите номер склада Новой Почты</strong></p>
    <input type="text" name="comment" value="" id="input-shipping-address-1" class="form-control" />
</div>
<div class="shipping-method-addition" id="shipping-method-addition-courier-courier">
    <p><strong><?php echo $text_comments; ?></strong></p>
    <p>
        <textarea name="comment" rows="8" class="form-control"><?php echo $comment; ?></textarea>
    </p>
</div>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo $button_continue; ?>" id="button-shipping-method" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary" />
  </div>
</div>
<script type="text/javascript">
    $('#collapse-shipping-method').on('click', '[type="radio"]', function(){
        var val = $(this).val().replace('.', '-');
        $('.shipping-method-addition').hide().attr('disabled', 'disabled');
        $('#shipping-method-addition-'+val).show().removeAttr('disabled');
    })
    $($('#collapse-shipping-method [type="radio"]')[0]).click();
</script>