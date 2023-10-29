<!-- Footer Section -->
<footer class="bg-dark text-light py-4">
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h4>Contact Information</h4>
        <ul class="list-unstyled">
            <?php if ($email = get_field('email')) : ?>
            <li><?php echo $email ?></li>
            <?php endif; ?>
            <?php if ($phone = get_field('phone')) : ?>
            <li><?php echo $phone ?></li>
            <?php endif; ?>
            <?php if ($address = get_field('address')) : ?>
            <li><?php echo $address ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="col-md-6">
        <h4>Links</h4>
        <ul class="list-unstyled">
            <?php 
            $link1 = get_field('link_1');
            if( $link1 ): 
                $link_url = $link1['url'];
                $link_title = $link1['title'];
                $link_target = $link1['target'] ? $link1['target'] : '_self'; 
            ?>
            <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
            <?php endif; ?>
            <?php 
            $link2 = get_field('link_2');
            if( $link2 ): 
                $link_url = $link2['url'];
                $link_title = $link2['title'];
                $link_target = $link2['target'] ? $link2['target'] : '_self'; 
            ?>
            <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
            <?php endif; ?>
            <?php 
            $link3 = get_field('link_3');
            if( $link3 ): 
                $link_url = $link3['url'];
                $link_title = $link3['title'];
                $link_target = $link3['target'] ? $link3['target'] : '_self'; 
            ?>
            <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
            <?php endif; ?>
        </ul>
    </div>
    </div>
</div>
</footer>