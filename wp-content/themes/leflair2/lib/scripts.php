<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.11.1.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr.min.js
 * 3. /theme/assets/js/scripts.js
 *
 * Google Analytics is loaded after enqueued scripts if:
 * - An ID has been defined in config.php
 * - You're not logged in as an administrator
 */


function roots_scripts() {
    $assets = array(
        'merged_css' => '/assets/css/merged.css',
        'sprites_css' => '/assets/css/sprites.css',
        'gogame_css' => '/assets/css/gogame.css',
        'jquery'    => '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
        'isotope_js' => '/assets/js/isotope.pkgd.js',
        'isotope_min_js' => '/assets/js/isotope.pkgd.min.js',
        'gogame_js' => '/assets/js/gogame.js',

    );
    $assets['css-tooltip']  = '/assets/css/tooltipster.css';
    $assets['toan']  = '/assets/css/toan.css';

    wp_enqueue_style( 'toan', 'http://localhost/leflair/wp-content/themes/leflair2/assets/css/toan.css', false, null );
    wp_enqueue_style( 'css-tooltip', get_template_directory_uri().$assets['css-tooltip'], false, null );
    wp_enqueue_style( 'merged_css', get_template_directory_uri().$assets['merged_css'], false, null );
    wp_enqueue_style( 'sprites_css', get_template_directory_uri().$assets['sprites_css'], false, null );
    wp_enqueue_style( 'gogame_css', get_template_directory_uri().$assets['gogame_css'], false, null );


    $assets['js-tooltip']  = '/assets/js/jquery.tooltipster.min.js';
    $assets['js-ui']  = '/assets/js/jquery-ui.js';
    $assets['js-ui-min']  = '/assets/js/jquery-ui.min.js';

    /**
     * jQuery is loaded using the same method from HTML5 Boilerplate:
     * Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
     * It's kept in the header instead of footer to avoid conflicts with plugins.
     */
    if (!is_admin() && current_theme_supports('jquery-cdn')) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', $assets['jquery'], array(), null, true);
        add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
    }

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('jquery');
    wp_enqueue_script('isotope_js', get_template_directory_uri() . $assets['isotope_js'], array(), null, true);
    wp_enqueue_script('isotope_min_js', get_template_directory_uri() . $assets['isotope_min_js'], array(), null, true);
    wp_enqueue_script('js-tooltip', get_template_directory_uri() . $assets['js-tooltip'], array(), null, true);
    wp_enqueue_script('gogame_js', get_template_directory_uri() . $assets['gogame_js'], array(), null, true);
    // Localize the script with new data
    $translation_array = array(
        'ajax_url' => admin_url( 'admin-ajax.php'),
    );
    wp_localize_script( 'gogame_js', 'jsdata', $translation_array );


}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js?1.11.1"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
    $add_jquery_fallback = true;
  }

  return $src;
}
add_action('wp_head', 'roots_jquery_local_fallback');

/**
 * Google Analytics snippet from HTML5 Boilerplate
 *
 * Cookie domain is 'auto' configured. See: http://goo.gl/VUCHKM
 */
function roots_google_analytics() { ?>
<script>
  <?php if (WP_ENV === 'production') : ?>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  <?php else : ?>
    function ga() {
      console.log('GoogleAnalytics: ' + [].slice.call(arguments));
    }
  <?php endif; ?>
  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>','auto');ga('send','pageview');
</script>

<?php }
if (GOOGLE_ANALYTICS_ID && (WP_ENV !== 'production' || !current_user_can('manage_options'))) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}
