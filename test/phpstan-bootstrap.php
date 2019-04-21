<?php

// Add missing constants etc. here
define( 'ABSPATH', dirname( __DIR__ ) . '/' );
define( 'WP_DEBUG', true );
define( 'MINUTE_IN_SECONDS', 60 );
define( 'HOUR_IN_SECONDS',   60 * MINUTE_IN_SECONDS );
define( 'DAY_IN_SECONDS',    24 * HOUR_IN_SECONDS );
define( 'WEEK_IN_SECONDS',    7 * DAY_IN_SECONDS );
define( 'MONTH_IN_SECONDS',  30 * DAY_IN_SECONDS );
define( 'YEAR_IN_SECONDS',  365 * DAY_IN_SECONDS );
define( 'OBJECT', 'OBJECT' );
define( 'OBJECT_K', 'OBJECT_K' );
define( 'ARRAY_A', 'ARRAY_A' );
define( 'ARRAY_N', 'ARRAY_N' );

define( 'TM_EPO_PLUGIN_FILE', dirname( __DIR__ ) . '/tm-woo-extra-product-options.php' );
define( 'TM_EPO_ABSPATH', dirname( TM_EPO_PLUGIN_FILE ) . '/' );
define( 'TM_EPO_VERSION', '1.0' );
define( 'TM_EPO_WP_VERSION', '1.0' );
define( 'TM_EPO_WC_VERSION', '1.0' );
define( 'TM_EPO_PLUGIN_ID', '7908619' );
define( 'TM_EPO_LOCAL_POST_TYPE', "tm_product_cp" );
define( 'TM_EPO_GLOBAL_POST_TYPE', "tm_global_cp" );
define( 'TM_EPO_GLOBAL_POST_TYPE_PAGE_HOOK', "tm-global-epo" );
define( 'TM_EPO_WPML_LANG_META', "tm_meta_lang" );
define( 'TM_EPO_WPML_PARENT_POSTID', "tm_meta_parent_post_id" );
define( 'TM_EPO_PLUGIN_PATH', untrailingslashit( plugin_dir_path( TM_EPO_PLUGIN_FILE ) ) );
define( 'TM_EPO_TEMPLATE_PATH', TM_EPO_PLUGIN_PATH . '/templates/' );
define( 'TM_EPO_PLUGIN_URL', untrailingslashit( plugins_url( '/', TM_EPO_PLUGIN_FILE ) ) );
define( 'TM_EPO_PLUGIN_NAME_HOOK', plugin_basename( TM_EPO_PLUGIN_FILE ) );
define( 'TM_EPO_ADMIN_SETTINGS_ID', 'tm_extra_product_options' );
define( 'TM_EPO_DIRECTORY', dirname( plugin_basename( TM_EPO_PLUGIN_FILE ) ) );
define( 'TM_EPO_PLUGIN_SLUG', TM_EPO_DIRECTORY . '/' . basename( TM_EPO_PLUGIN_FILE ) );
define( 'TM_EPO_FILE_SLUG', basename( TM_EPO_PLUGIN_FILE, ".php" ) );

class WC_Product_Booking {}
