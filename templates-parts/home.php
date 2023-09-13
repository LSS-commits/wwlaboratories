<?php
/*
* Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- HOME BANNER -->
<div class="banner" style="background-image: url(<?php echo get_field("banner_img"); ?>)">

    <div class="banner-content">
        <h1><?php echo get_field("banner_title"); ?></h1>

        <p><?php echo get_field("banner_text"); ?></p>

        <a href="<?php echo get_field("banner_button"); ?>http://thefinalone.test/products/"> &mdash; discover</a>
    </div>

</div>

<!-- HOME PRESENTATION SECTION (WITH ACF REPEATER) -->
<div id="card" class="presentation">
    <!-- Titles -->
    <h2><?php echo get_field("presentation_title"); ?></h2>

    <div class="presentation-container">
        <!-- Grid -->
        <?php
        $rowsx = get_field("presentation");
        if ($rowsx) {
            foreach ($rowsx as $rowx) {
                echo "<div class='presentation'>";
                echo $rowx["icon"];
                echo "<div class='presentation-body'>";
                echo "<h3>" . $rowx["title"] . "</h3>";
                echo "<p>" . $rowx["text"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        }

        ?>
    </div>
</div>

<hr>

<!-- HOME PRODUCTS SECTION (WITH ACF REPEATER) -->
<div class="products">
    <!-- Titles -->
    <h2><?php echo get_field("products_title"); ?></h2>

    <div class="products-container">
        <!-- Grid -->
        <?php
        $rows = get_field("products");

        if ($rows) {
            foreach ($rows as $row) {

                echo "<div class='product'>";
                echo "<a href='http://thefinalone.test/products/'><img src=" . $row["image"] . " alt='img'></a>";
                echo "<div class='product-body'>";
                echo "<h3>" . $row["title"] . "</h3>";
                echo "<p>" . $row["text"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        }

        ?>
    </div>
</div>

<hr>

<!-- HOME LABORATORIES SECTION -->
<div class="labs">
    <!-- Section Title -->
    <h2><?php echo get_field("labs_title"); ?></h2>

    <div class="labs-img" style="background-image: url(<?php echo get_field("labs_img"); ?>)">
    <!-- Titles -->
        <div class="labs-titles">
            <h3><?php echo get_field("labs_subtitle"); ?></h3>
            <p><?php echo get_field("labs_text"); ?></p>
        </div>

    </div>


    <!-- Link to Contact Page -->
    <div class="labs-contact">
        <p><?php echo get_field("labs_contact_text"); ?></p>
        <img src="<?php echo get_field("labs_contact_img"); ?>" alt="img">
        <a href="<?php echo get_field("labs_contact_button"); ?>http://thefinalone.test/contact/"> &mdash; contact walter</a>
    </div>

</div>

<?php get_footer(); ?>