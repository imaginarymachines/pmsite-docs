<?php

add_action(
    'rest_api_init',
    function () {
        register_rest_field(
            'doc',
            'helpLinks',
           [
                'get_callback'    => function ( $object ) {
                    $links = [];
                    $parsed = parse_blocks( $object['content']['raw']);
                    foreach($parsed as $block){
                        if( 'pmsite-docs/helpful-links' === $block['blockName']){
                            foreach ($block['innerBlocks'] as $innerBlock) {
                                if( 'pmsite-docs/help-link' === $innerBlock['blockName']){
                                    $links[] = $innerBlock['attrs'];
                                }
                            }
                        }
                    }
                    return $links;
                },
                'update_callback' => null,
                'schema'          => [
                    'type'        => 'array',
                ],
           ]
        );
        register_rest_field(
            'doc',
            'shortVersion',
           [
                'get_callback'    => function ( $object ) {
                    $theBlock = [];
                    $parsed = parse_blocks( $object['content']['raw']);

                    foreach($parsed as $block){
                        if( 'pmsite-docs/help-short-version' === $block['blockName']){
                           $theBlock = $block;
                        }
                    }
                    return  $theBlock;
                },
                'update_callback' => null,
                'schema'          => [
                    'type'        => 'array',
                ],
           ]
        );
    }
);
