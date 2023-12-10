<!-- Portfolio -->
<section id="portfolio" class="portfolio-section mb-5 container">
<h2 class="text-center mb-5">Portfolio</h2>

<!-- Portfolio Card -->
<?php
$featured_portfolio_items = get_field('featured_portfolio_items');
if( $featured_portfolio_items ): ?>
<div class="row justify-content-center">
    <?php foreach( $featured_portfolio_items as $portfolio_items ): 
        $thumbnail = get_field( 'thumbnail', $portfolio_items->ID );
        $project_title = get_field( 'project_title', $portfolio_items->ID ); 
        $description = get_field( 'description', $portfolio_items->ID ); 
        ?>
        <div class="card m-2" style="width: 18rem;">
            <img class="card-img-top mt-2" src="<?php echo $thumbnail; ?>" alt="Card image cap" style="height: 200px; width: 100%; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $project_title; ?></h5>
                <p class="card-text"><?php echo $description; ?></p>
                <div class="row">
                    <div class="col-6 text-start">
                        <?php if ($github = get_field( 'github', $portfolio_items->ID )) : ?>
                            <a href="<?php echo $github; ?>" class="btn btn-link">
                                <i class="bi bi-github" style="font-size: 20px; color: #5A5A5A;"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 ">
                        <?php if ($link = get_field( 'link', $portfolio_items->ID )) : ?>
                            <a href="<?php echo $link; ?>" class="btn btn-primary">View More</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<!-- End Portfolio Card -->

<div class="row mx-auto text-center mt-4">
    <p>For a full list of projects please visit my <a href="<?php echo home_url('/portfolio-archive')?>">archive</a></p>
</div>

</section>