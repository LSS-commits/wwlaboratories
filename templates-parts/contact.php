<?php
/*
* Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="contact-container">
    <!-- REFERENCES SECTION -->
    <div class="refs">
        <h2><?php echo get_field("refs_title"); ?></h2>
        <div class="refs-container">
            <!-- Grid -->
            <?php
            $rows = get_field("refs");

            if ($rows) {
                foreach ($rows as $row) {

                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["address"] . "</p>";
                    echo "<p>" . $row["phone"] . "</p>";
                }
            }

            ?>
        </div>
    </div>

    <!-- FORM SECTION -->
    <div class="form">
        <h2><?php echo get_field("form_title"); ?></h2>
        <p><?php echo get_field("form_text"); ?></p>

        <?php echo do_shortcode('[contact-form-7 id="29" title="Contact us"]'); ?>
    </div>
</div>


<?php get_footer(); ?>