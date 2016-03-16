<section class="contact-buttons">
    <div class="container">
        <div class="row">
            <?php
            // ToDO Repeater ???
            $iconPhone = get_field('icon-phone');
            $iconMail = get_field('icon-mail');
            $iconHome = get_field('icon-home');
            $textTel = get_field('text-tel');
            $textMail = get_field('text-mail');
            $textHome = get_field('text-home');
            ?>
            <div>
                <?php if ($iconPhone): ?>
                    <img class="icon" src="<?php echo $iconPhone; ?>" alt="phone"/>
                <?php endif; ?>
                <?php
                if ($textTel):
                    echo $textTel;
                endif;
                ?>
            </div>
            <div>
                <?php if ($iconMail): ?>
                    <img class="icon" src="<?php echo $iconMail; ?>" alt="mail"/>
                <?php endif; ?>
                <?php
                if ($textMail):
                    echo $textMail;
                endif;
                ?>
            </div>
            <div>
                <?php if ($iconHome): ?>
                    <img class="icon" src="<?php echo $iconHome; ?>" alt="home"/>
                <?php endif; ?>
                <?php
                if ($textHome):
                    echo $textHome;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>