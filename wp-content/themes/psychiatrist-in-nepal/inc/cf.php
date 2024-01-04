<?php
//Custom Query
function gd_custom_posts($post_type, $posts_per_page)
{
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
    );
    return new WP_Query($args);
}

function gd_custom_posts_by_offset($posts_per_page, $offset = 0)
{
    $args = array(
        'post_type' => 'service',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
    );
    return new WP_Query($args);

}

//Exclude Current Post
function gd_exclude_current($posts_per_page = 10)
{
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'post__not_in' => array(get_the_ID()),
    );
    return new WP_Query($args);

}

//Customm Pagination
function gd_pagination()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '<i class="ri-arrow-drop-left-line"></i>',
        'next_text' => '<i class="ri-arrow-drop-right-line"></i>',
        'type' => 'array',
    ));

    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<ul class="edu-pagination">';
        foreach ($pages as $page) {
            echo '<li>' . $page . '</li>';

        }

        echo '</ul>';

    }

}

//Custom Query By Cateogry
function gd_custom_posts_by_category($post_type, $taxonomy, $posts_per_page, $cat_slug)
{
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $cat_slug,

            ),

        ),

    );

    return new WP_Query($args);

}

//Header Image
function gd_logo()
{
    return wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');

}

//wp_nav_menu
function gd_menu($menu, $theme_location, $menu_class, $menu_id)
{
    wp_nav_menu(array(
        'menu' => $menu,
        'theme_location' => $theme_location,
        'menu_class' => $menu_class,
        'menu_id' => $menu_id,
        'container' => false,
    )
    );

}

//Cuctom Dropdown Menu
function gd_custom_dd_menu($type = "")
{
    ?>
<?php if ($type == "3rd-level"): ?>
<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
    <?php $locations = get_nav_menu_locations();
    // if there's a location for the primary menu
    if (isset($locations['menu-1'])) {
        $menu = get_term($locations['menu-1'], 'nav_menu');
        // if there are items in the primary menu
        if ($items = wp_get_nav_menu_items($menu->name)) {
            // loop through all menu items to display their content
            foreach ($items as $item) {
                // if the current item is not a top level item, skip it
                if ($item->menu_item_parent != 0) {
                    continue;
                }
                // get the ID of the current nav item
                $curNavItemID = $item->ID;
                // get the custom classes for the item
                // (determined within the WordPress Appearance > Menu section)
                $classList = implode(" ", $item->classes);
                $current = ($item->object_id == get_queried_object_id()) ? 'active' : '';
                if (in_array('dropdown', $item->classes)) {?>
    <li class="nav__item has-dropdown">
        <a href="<?php echo $item->url; ?>" data-toggle="dropdown"
            class="dropdown-toggle nav__item-link"><?php echo $item->title; ?></a>

        <?php
} else {
                    echo '<li class="nav__item">';
                    echo "<a href=\"{$item->url}\" class=\"nav__item-link\">{$item->title}</a>";
                }

                // build the mega-menu
                // if 'mega-menu'  exists within the class
                if (in_array('dropdown', $item->classes)) {?>
        <?php
foreach ($items as $subnav) {
                    if ($subnav->menu_item_parent == $curNavItemID) {
                        ?>

        <?php if (in_array('3-level', $subnav->classes)): ?>
        <ul class="dropdown arrow-top">
            <li class="has-children">
                <a href="#"><?php echo $subnav->title; ?></a>
                <ul class="dropdown">
                    <?php // cycle through the menu items and get the subnav
                        $curNavItemID1 = $subnav->ID;
                        foreach ($items as $subnav) {
                            if ($subnav->menu_item_parent == $curNavItemID1) {
                                echo '<li><a href="' . $subnav->url . '" clsss="nav-link">' . $subnav->title . '</a></li>';
                            }
                        }?>
                </ul>
            <li>

        </ul>
        <?php else: ?>
        <ul class="dropdown-menu">
            <li class="nav__item"><a href="<?php echo $subnav->url; ?>"
                    class="nav__item-link"><?php echo $subnav->title; ?></a></li>
            <?php endif;
                    }}
                }?>
    </li>
    <?php }} else {}}?>

</ul>

<?php else: ?>
<ul class="navbar-nav ml-auto">
    <?php
$locations = get_nav_menu_locations();
    if (isset($locations['menu-1'])) {
        $menu = get_term($locations['menu-1'], 'nav_menu');
        if ($items = wp_get_nav_menu_items($menu->name)) {
            //var_dump($items);
            foreach ($items as $item) {
                if ($item->menu_item_parent != 0) {
                    continue;
                }
                $curNavItemID = $item->ID;
                $classList = implode(" ", $item->classes);
                $current = ($item->object_id == get_queried_object_id()) ? 'active' : '';

                ?>

    <?php
if (!in_array('dropdown', $item->classes)) {
                    ?>

    <li class="nav__item <?php echo $current; ?>">
        <a href="<?php echo $item->url; ?>" class="nav__item-link"><?php echo $item->title; ?></a>
        <?php } else {?>
    <li class="nav-item dropdown <?php echo $current; ?>">
    <li class="nav__item has-dropdown">
        <a href="<?php echo $item->url; ?>" data-toggle="dropdown"
            class="dropdown-toggle nav__item-link"><?php echo $item->title; ?></a>
        <?php
}
                if (in_array('dropdown', $item->classes)) {?>
        <ul class="dropdown-menu">
            <?php
foreach ($items as $subnav) {
                    if ($subnav->menu_item_parent == $curNavItemID) {
                        //$current1 = ($subnav->object_id == get_queried_object_id()) ? 'active' : '';

                        ?>
            <li class="nav__item"><a href="<?php echo $subnav->url; ?>"
                    class="nav__item-link"><?php echo $subnav->title; ?></a></li>
            <?php }}?>
        </ul>
        <?php } else {?>
        <?php }?>
    </li>
    <?php
}
        }
    }
    ?>
</ul>
<?php
endif;
}

//Next and Previous Posts

function filter_single_post_pagination($output, $format, $link, $post)
{
    $title = get_the_title($post);
    $url = get_permalink($post->ID);
    $prevthumbnail = get_the_post_thumbnail_url($post->ID, 'thumbnail');
    $ret = '<div class="post-thumb">
                <a href="' . $url . '"><img src="' . $prevthumbnail . '" alt="Image"></a>
            </div>
            <div class="content">
                <h6><a href="' . $url . '">' . $title . '</a></h6>
                <span><i class="far fa-calendar-alt"></i> ' . get_the_time("F j, Y") . '</span>
            </div>';

    if ('next_post_link' === current_filter()) {
        $ret = '<div class="post-thumb">
            <a href="' . $url . '"><img src="' . $prevthumbnail . '" alt="Image"></a>
        </div>
        <div class="content">
            <h6><a href="' . $url . '">' . $title . '</a></h6>
            <span><i class="far fa-calendar-alt"></i> ' . get_the_time("F j, Y") . '</span>
        </div>';
    }
    return $ret;
}
add_filter('previous_post_link', 'filter_single_post_pagination', 10, 4);
add_filter('next_post_link', 'filter_single_post_pagination', 10, 4);