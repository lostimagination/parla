<?php
/**
 * Disable XMLRPC
 *
 * @package parla
 */
add_filter( 'xmlrpc_enabled', '__return_false' );
