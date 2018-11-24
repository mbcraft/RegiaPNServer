<?php
$current_tab_nav = $GLOBALS["total_tab_navs"]++;
$GLOBALS["tab_navs"][] = "tab_".$current_tab_nav;
if ($GLOBALS["first_nav"]) 
{
    $GLOBALS["first_nav"] = false;
    $active_class = "class=\"active\"";
} else
{
    $active_class = "";
}

?>
<li <?= $active_class ?>>
    <a href="#tab_{!! $current_tab_nav !!}" data-toggle="tab">{!! $name !!}</a>
</li>