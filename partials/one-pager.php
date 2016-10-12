<main id="primary" role="main">
    <section id="portfolio">
        <?php
        $query = new WP_Query('pagename=portfolio');
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="container">';
                the_content();
                echo '</div>';
            }
        }
        wp_reset_postdata();
        ?>
    </section>
    <section id="team">
        <?php
        $query = new WP_Query('pagename=team');
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="container">';
                the_content();
                echo '</div>';
            }
        }
        wp_reset_postdata();
        ?>
    </section>
    <section id="leistungen">
        <?php
        $query = new WP_Query('pagename=leistungen');
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="container">';
                the_content();
                echo '</div>';
            }
        }
        wp_reset_postdata();
        ?>
    </section>
    <section id="kontakt">
        <?php
        $query = new WP_Query('pagename=kontakt');
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="container">';
                the_content();
                echo '</div>';
            }
        }
        wp_reset_postdata();
        ?>
    </section>
</main>