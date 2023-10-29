<!-- Contact -->
<section class="container mb-5">
<h2 class="text-center mb-5">Contact</h2>
<div class="contact-section mx-auto">
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="contact-form">
    <input type="hidden" name="action" value="submit_custom_form">
    <input type="hidden" name="to" value="mhernando334@gmail.com"> <!-- Add this line -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" required class="form-control w-100" id="name-input" placeholder="">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" required name="email" class="form-control w-100" id="email-input" placeholder="">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" name="subject" required class="form-control w-100" id="subject-input" placeholder="">
    </div>
    <div class="mb-3 w-100">
        <label for="message" class="form-label">Message</label>
        <textarea type="text" name="message" required class="form-control w-100" id="message-input"
        rows="3"></textarea>
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary w-auto">
    </form>
</div>
</section>