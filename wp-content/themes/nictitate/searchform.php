<?php
$current_value = is_search() ? esc_attr(get_search_query()) : __('', kopa_get_domain());
?>

<div class="search-box clearfix">
    <form method="get" id="search-form" class="search-form clearfix" action="<?php echo esc_url(home_url('/')); ?>">                            
        <input type="text"  placeholder="Zoeken..." value="<?php echo $current_value; ?>" name="s" class="search-text" maxlength="20">
        <input type="submit" value="" name="" class="search-submit">
    </form><!-- search-form -->   
</div><!--end:search-box-->