<?php include 'includes/header.php'; ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-3">Contact Us</h1>
        <p class="text-white fs-5">
            Let's Build Your IT Infrastructure Together
        </p>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Info Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:700px;">
            <h6 class="section-title bg-white text-primary px-3">Get In Touch</h6>
            <h1 class="display-6 mb-3">
                We'd Love To Hear From You
            </h1>
            <p>
                Whether you need IT Infrastructure, Networking, Cloud Solutions,
                Cyber Security or Technical Support, our experts are ready to help.
            </p>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded p-4 text-center h-100 shadow-sm">
                    <i class="fa fa-map-marker-alt fa-3x text-primary mb-3"></i>
                    <h4>Office Address</h4>
                    <p class="mb-0">
                        C-024-LG, Sushant Arcade,<br>
                        Sushant Lok Phase-1,<br>
                        Gurugram, Haryana - 122015
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded p-4 text-center h-100 shadow-sm">
                    <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                    <h4>Call Us</h4>
                    <p class="mb-2">
                        <a href="tel:01244374336" class="text-dark">
                            0124-4374336
                        </a>
                    </p>

                    <p class="mb-0">
                        Monday - Saturday<br>
                        09:30 AM - 06:30 PM
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded p-4 text-center h-100 shadow-sm">
                    <i class="fa fa-envelope fa-3x text-primary mb-3"></i>
                    <h4>Email Us</h4>

                    <p class="mb-2">
                        <a href="mailto:info@nxait.com" class="text-dark">
                            info@nxait.com
                        </a>
                    </p>

                    <p class="mb-0">
                        Send us your requirements and we'll respond quickly.
                    </p>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Contact Info End -->


<!-- Contact Form Start -->
<div class="container-xxl pb-5">
    <div class="container">

        <div class="row g-5 align-items-center">

            <div class="col-lg-5 wow fadeInLeft">

                <h6 class="section-title bg-white text-start text-primary pe-3">
                    Why Contact Us
                </h6>

                <h2 class="mb-4">
                    Your Trusted Technology Partner
                </h2>

                <p>
                    Our experienced team helps organizations plan,
                    deploy and maintain reliable IT Infrastructure
                    with complete technical assistance.
                </p>

                <div class="mt-4">

                    <p>
                        <i class="fa fa-check-circle text-primary me-2"></i>
                        IT Infrastructure Solutions
                    </p>

                    <p>
                        <i class="fa fa-check-circle text-primary me-2"></i>
                        Networking Solutions
                    </p>

                    <p>
                        <i class="fa fa-check-circle text-primary me-2"></i>
                        Data Center Solutions
                    </p>

                    <p>
                        <i class="fa fa-check-circle text-primary me-2"></i>
                        Cloud & Cyber Security
                    </p>

                    <p>
                        <i class="fa fa-check-circle text-primary me-2"></i>
                        AMC & Technical Support
                    </p>

                </div>

            </div>

            <div class="col-lg-7 wow fadeInRight">

                <div class="bg-light rounded p-5">

                    <h3 class="mb-4">
                        Send Your Enquiry
                    </h3>

                    <form action="contact_mail.php" method="POST">

    <div class="row g-3">

        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div>

        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>

        <div class="col-md-6">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
        </div>

        <div class="col-md-6">
            <input type="text" name="company" class="form-control" placeholder="Company Name">
        </div>

        <div class="col-12">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div>

        <div class="col-12">
            <textarea name="message" class="form-control" rows="6" placeholder="Describe Your Requirement" required></textarea>
        </div>

        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary rounded-pill px-5 py-3">
                Send Enquiry
            </button>
        </div>

    </div>

</form>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- Contact Form End -->


<!-- Google Map -->
<div class="container-fluid px-0">

    <iframe
        class="w-100"
        style="height:500px;"
        loading="lazy"
        allowfullscreen
        src="https://maps.google.com/maps?q=Sushant%20Arcade%20Sushant%20Lok%20Phase%201%20Gurgaon&t=&z=15&ie=UTF8&iwloc=&output=embed">
    </iframe>

</div>


<!-- CTA -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="rounded p-5 text-center text-white"
            style="background:linear-gradient(135deg,#009CFF,#0056b3);">

            <h2 class="text-white mb-3">
                Ready To Upgrade Your Business Technology?
            </h2>

            <p class="mb-4">
                Let's discuss your IT Infrastructure, Networking,
                Cloud and Security requirements today.
            </p>

            <a href="tel:01244374336"
                class="btn btn-light rounded-pill px-5 py-3">

                Call Now

            </a>

        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>