<?php

/**
 * Register help-short-version block
 */
add_action('init', function () {

    register_block_type_from_metadata(__DIR__);
});
