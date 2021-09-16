<?php

//Enqueue assets for Help Key plugin
add_action('enqueue_block_editor_assets', function () {
    if(! pmsite_docs_is_doc_cpt()){
        return;
    }
    $handle = 'help-key';
    $assets = include dirname(__FILE__, 3). "/build/block-$handle.asset.php";
    $dependencies = $assets['dependencies'];
    wp_enqueue_script(
        $handle,
        plugins_url("/build/block-$handle.js", dirname(__FILE__, 2)),
        $dependencies,
        $assets['version']
    );
});

//Register meta fields for plugin
add_action( 'init', function() {
    register_post_meta( 'doc', 'pmserverhelpkey', [
        'type' => 'string',
        'single' => true,
        'show_in_rest' => true,
    ] );
} );
