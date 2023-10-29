<!-- About -->
<section class="about-section container mb-5">
<h2 class="text-center mb-5">About me</h2>
<div class="row mb-4">

    <!-- Summary Subsection -->
    <?php if ($summary = get_field('summary')) : ?>
    <div class="col-md-6">
        <h3 class="mb-3">Summary</h3>
        <p><?php echo $summary ?></p>
    </div>
    <?php endif; ?>

    <!-- Skills Subsection -->
    <?php if ($skills = get_field('skills')) : ?>
    <div class="col-md-6">
        <h3 class="mb-3">Skills</h3>
        <div class="row skills">
            <div class="col-lg-4 col-sm-6">
            <ul style="margin: 0;">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    $skill = $skills['skill_' . $i];
                    if (!empty($skill)) {
                        echo '<li>' . $skill . '</li>';
                    }
                }
                ?>
            </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
            <ul style="margin: 0;">
                <?php
                for ($i = 4; $i <= 6; $i++) {
                    $skill = $skills['skill_' . $i];
                    if (!empty($skill)) {
                        echo '<li>' . $skill . '</li>';
                    }
                }
                ?>
            </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
            <ul style="margin: 0;">
                <?php
                for ($i = 7; $i <= 9; $i++) {
                    $skill = $skills['skill_' . $i];
                    if (!empty($skill)) {
                        echo '<li>' . $skill . '</li>';
                    }
                }
                ?>
            </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>

<div class="row">

<!-- Experience Subsection -->
<?php
$featured_experience = get_field('featured_experience');
if( $featured_experience ): ?>
    <div class="col-md-6">
    <h3 class="mb-3">Experience</h3>
    <?php foreach( $featured_experience as $experience ): 
        $position = get_field( 'position', $experience->ID );
        $company = get_field( 'company', $experience->ID ); 
        $start_date = get_field( 'start_date', $experience->ID ); 
        $end_date = get_field( 'end_date', $experience->ID ); 
        $summary = get_field( 'experience_summary', $experience->ID ); 
        ?>
        <!-- Experience Card -->
        <div class="experience-card mb-3">
            <u><?php echo $position; ?></u>
            <div class="row mb-2">
                <div class="col-6 text-start">
                    <?php echo $company; ?>
                </div>
                <div class="col-6 text-end">
                    <?php echo $start_date; ?> - <?php echo $end_date; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $summary; ?> 
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>


<!-- Education Subsection -->
<?php
$featured_education = get_field('featured_education');
if( $featured_education ): ?>
    <div class="col-md-6">
    <h3 class="mb-3">Education</h3>
    <?php foreach( $featured_education as $education ): 
        $school = get_field( 'school', $education->ID );
        $degree = get_field( 'degree', $education->ID ); 
        $date_started = get_field( 'date_started', $education->ID ); 
        $date_ended = get_field( 'date_ended', $education->ID ); 
        $summary = get_field( 'education_summary', $education->ID ); 
        ?>
        <!-- Education Card -->
        <div class="education-card mb-3">
            <u><?php echo $school; ?></u>
            <div class="row mb-2">
                <div class="col-6 text-start">
                    <?php echo $degree; ?>
                </div>
                <div class="col-6 text-end">
                    <?php echo $date_started; ?> - <?php echo $date_ended; ?>
                </div>
            </div>
            <div class="row">
            <div class="col">
                <!-- <ul style="margin: 0;">
                <li>GPA: 4.0</li>
                <li>Participated in a club</li>
                </ul> -->
                <?php echo $summary; ?>
            </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>
</section>