<?php
class LayoutSkeleton_Bootstrap {

    public static function init($bootstrap) {
        # Register assets
        Siberian_Assets::registerAssets("LayoutSkeleton", "/app/local/modules/LayoutSkeleton/resources/var/apps/");
        Siberian_Assets::addJavascripts(array(
            "modules/layout/home/layout_skeleton/hooks.js",
        ));
        Siberian_Assets::addStylesheets(array(
            "modules/layout/home/layout_skeleton/style.css",
        ));
    }
}
