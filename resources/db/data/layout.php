<?php
# Layout 1007
$datas = array(
    'name' => 'Layout Skeleton',
    'visibility' => Application_Model_Layout_Homepage::VISIBILITY_HOMEPAGE,
    'code' => 'layout_skeleton',
    'preview' => '/customization/layout/homepage/layout_skeleton.png',
    'use_more_button' => 1,
    'use_horizontal_scroll' => 0,
    'number_of_displayed_icons' => 8,
    'position' => "bottom",
    "order" => 1200,
    "can_uninstall" => 1,
    "is_active" => 1,
);

$layout = new Application_Model_Layout_Homepage();
$layout
    ->setData($datas)
    ->insertOrUpdate(array("code"));

Siberian_Assets::copyAssets("/app/local/modules/LayoutSkeleton/resources/var/apps/");