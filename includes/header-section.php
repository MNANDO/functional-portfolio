  <header class="container text-center mb-5" style="height: 100vh;">
    <div class="row align-items-center h-100">
      <div class="col">
        <!-- Top portion of the header including profile image and icon list -->
        <div class="profile row mx-auto align-items-center mb-5" style="width: fit-content;">
          <div class="icon-list col text-center">
            <a href="<?php the_field('github')?>" class="mb-2" target="_blank">
              <i class="bi bi-github" style="font-size: 34px; color: #5A5A5A;"></i>
            </a>
            <br>
            <a href="<?php the_field('linkedin')?>" target="_blank">
              <i class="bi bi-linkedin" style="font-size: 34px; color: #5A5A5A;"></i>
            </a>
          </div>
          <div class="profile-img col">
            <img src="<?php the_field('profile_image')?>" alt="Profile Image" width="250">
          </div>
        </div>
        <!-- Bottom of the header including name, subtext, and call to action -->
        <div class="mb-5">
          <h1><?php the_field('name')?></h1>
          <h2><?php the_field('title')?></h2>
        </div>
        <div class="d-flex justify-content-center">
          <a href="<?php the_field('resume')?>">
            <button class="btn btn-outline-primary me-2"><i class="me-1 bi bi-file-earmark-text"></i>My Resume</button>
          </a>
          <a href="#portfolio">
            <button class="btn btn-primary">View Portfolio</button>
          </a>
        </div>
      </div>
    </div>
  </header>