<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'inc/head.php' ?>
    <title>Contact</title>
</head>

<body>
    <?php include 'inc/header.php' ?>

    <div class="broadcrumb">
        <h2>Contact</h2>
    </div>

    <section class="bg-light">
        <div class="container">

            <form class="contact-form" action="mail.php" method="post" name="form" autocomplete="off">
                <h2>Send a Message</h2>
                <input type="text" name="name" id="name" placeholder="Name" autocomplete="name" class="form-inpput">
                <p id="name_error">Please Enter Your Name</p>
                <input type="email" name="email" id="email" class="form-inpput" autocomplete="email"
                    placeholder="Email">
                <p id="email_error">Please enter a valid Email id.</p>
                <input type="tel" name="phone" class="form-inpput" id="phone" autocomplete="tel"
                    placeholder="Mobile Number">
                <p id="phone_error">Please enter your Mobile Number</p>
                <textarea name="message" id="message" class="form-textarea" placeholder="Message"></textarea>
                <p id="message_error">Please Enter a Message</p>
                <button class="form-btn" onclick="return validation_contact()" type="submit">Submit</button>
            </form>

        </div>

        <div class="container">

            <div class="cont-details">
                <div class="row">
                    <div class="col-md-6">
                        <div class="icons_contact">
                            <i class="fa-solid fa-at"></i>
                            <a href="mailto:info@connectria.cloud">
                                info@connectria.cloud
                            </a>
                            <br>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:99023 62006">
                                +91 99023 62006
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icons_contact">
                            <i class="fa-solid fa-location-arrow"></i>
                            207 (23), Mahalaxmi Complex, 2nd Floor, WOC Road, Rajajinagar, Bangalore 560010, Karnataka, India.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28018.55488712593!2d77.34283498913916!3d28.620189097159567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5456ef36d9f%3A0x3b7191b1286136c8!2sSector%2062%2C%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1632758594177!5m2!1sen!2sin"
                    width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </section>

    <?php include 'inc/footer.php' ?>
</body>

</html>