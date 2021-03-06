<?php
/**
 * Template wrapper.
 *
 * @package ClassiPress\Templates
 * @author  AppThemes
 * @since   3.2.0
 * @since   3.6.0 Updated head section for modern standards.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php wp_title(''); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php appthemes_before(); ?>

<div class="container">

    <?php if ($cp_options->debug_mode) { ?>
        <div class="debug"><h3><?php _e('Debug Mode On', APP_TD); ?></h3><?php print_r($wp_query->query_vars); ?>
        </div><?php } ?>

    <?php appthemes_before_header(); ?>
    <?php get_header(app_template_base()); ?>
    <?php appthemes_after_header(); ?>

    <?php get_template_part('searchbar'); ?>

    <?php load_template(app_template_path()); ?>

    <?php appthemes_before_footer(); ?>
    <?php get_footer(app_template_base()); ?>
    <?php appthemes_after_footer(); ?>

</div><!-- /container -->

<?php wp_footer(); ?>

<?php appthemes_after(); ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".maincat i").click(function () {
            var isVisible = $(this).attr("class");
            var subList = $(this).parent().find(".subcat-list");
            if (isVisible == "fa fa-angle-down") {
                subList.css("display", "block");
                $(this).removeClass("fa-angle-down");
                $(this).addClass("fa-angle-up");
            }
            else {
                subList.css("display", "none");
                $(this).removeClass("fa-angle-up");
                $(this).addClass("fa-angle-down");
            }
        });
    });
</script>
<?php if (is_single()) : ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var modalDialog = $(".modalDialog");
            var modalBody = modalDialog.find(".modal-body");
            var close = modalDialog.find(".close");
            var numberText = $("#show-number").parent().attr("data-number");
            var numberPlace =  modalBody.find("#number");
                $("#show-number").click(function () {
                    modalDialog.css({"display":"block", "opacity":"1","pointer-events": "auto"});
                    numberPlace.append(numberText);
                    $(this).replaceWith(numberText);
                    return false;
                });
               close.click(function () {
                    modalDialog.css({"display":"none","opacity":"0","pointer-events":"none"});
                    return false;
                });
        });
    </script>
<?php endif; ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter46432197 = new Ya.Metrika({
                    id: 46432197,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46432197" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'LbKWLZOTsP';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>

</html>
