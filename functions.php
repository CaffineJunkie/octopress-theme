<?php

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

function hide_admin_bar_settings() {
?>
<style type="text/css">
    .show-admin-bar {
        display: none;
    }
</style>
<?php
}