<form class="ast-search" role="search"  method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
    <input type="text" placeholder="<?php esc_attr_e('Search...', "sauron"); ?>" class="search-input" autocomplete="off" name="s" value="<?php echo get_search_query(); ?>" onkeyup="showResult(this.value, this, '<?php echo get_option( "home", get_site_url()).'/wp-admin/admin-ajax.php'; ?>' );" />
    <div id="livesearch"></div>
    <input type="submit" value="" id="search-submit" />
</form>
<!--<div class="col-lg-3 col-md-3 col-lg-push-9 col-md-push-9">
    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search for something">
        </div>
        <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
    </form>
</div>
<?php $core_actions_get='ajax-tag-search';