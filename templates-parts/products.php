<?php
/*
* Template Name: Products
*/
?>

<?php get_header(); ?>

<!-- BREADCRUMB SECTION-->
<div class="ariane">
    <p>you are here: <?php // Breadcrumb navigation
                        if (is_page() && !is_front_page() || is_single() || is_category()) {
                            echo '<ul>';
                            echo '<li><a title="home - WW" rel="nofollow" href="http://thefinalone.test/">Home /</a></li>';

                            if (is_page()) {
                                $ancestors = get_post_ancestors($post);

                                if ($ancestors) {
                                    $ancestors = array_reverse($ancestors);

                                    foreach ($ancestors as $crumb) {
                                        echo '<li><a href="' . get_permalink($crumb) . '">' . get_the_title($crumb) . '</a></li>';
                                    }
                                }
                            }

                            if (is_single()) {
                                $category = get_the_category();
                                echo '<li><a href="' . get_category_link($category[0]->cat_ID) . '">' . $category[0]->cat_name . '</a></li>';
                            }

                            if (is_category()) {
                                $category = get_the_category();
                                echo '<li>' . $category[0]->cat_name . '</li>';
                            }

                            // Current page
                            if (is_page() || is_single()) {
                                echo '<li>' . get_the_title() . '</li>';
                            }
                            echo '</ul>';
                        }
                        // elseif (is_front_page()) {
                        //     // Front page
                        //     echo '<ul>';
                        //     echo '<li><a title="Accueil - NOM DU SITE" rel="nofollow" href="http://VOTRE_SITE.com/">Accueil</a></li>';
                        //     echo '</ul>';
                        // }
                        ?></p>
</div>

<!-- TITLE SECTION-->
<div class="title">
    <h1><?php echo get_field("prods_title"); ?></h1>
</div>

<!-- PRODUCTS SECTION -->
<div class="prods">
    <div class="prods-container">
        <!-- Grid -->
        <?php
        $rows = get_field("prods");

        if ($rows) {
            foreach ($rows as $row) {

                echo "<div class='prod'>";
                echo "<a href='http://thefinalone.test/products/'><img src=" . $row["image"] . " alt='img'></a>";
                echo "<div class='prod-body'>";
                echo "<h3>" . $row["title"] . "</h3>";
                echo "<p>" . $row["text"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        }

        ?>
    </div>
</div>

<?php get_footer(); ?>