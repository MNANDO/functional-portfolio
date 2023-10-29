<?php get_header(); ?>

<section class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h1>Project Archive</h1>
        <a href="<?php echo home_url() ?>">Return to site</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead>

            <tr>
            <th>Title</th>
            <th>Description</th>
            <th>GitHub</th>
            <th>Link</th>
            <th>Date Completed</th> <!-- New column for Date -->
            </tr>
        </thead>
        <tbody>
            <?php
            $portfolio = new WP_Query(array(
                'post_type' => 'portfolio-item',
            ));

            while ($portfolio->have_posts()) : ?>
            <?php $portfolio->the_post(); ?>
            <tr>
                <td><?php the_field('project_title') ?></td>
                <td><?php the_field('description') ?></td>
                <td><a href="<?php the_field('github') ?>">GitHub</a></td>
                <td><a href="<?php the_field('link') ?>">Link</a></td>
                <td><?php the_field('date_completed') ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</section>

<?php get_footer(); ?>