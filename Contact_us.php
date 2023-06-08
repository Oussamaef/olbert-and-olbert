<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="pictures/favicon.ico" />
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Contact Us</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Reach out to us and let's connect - we're just a message away!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" name ="name" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">This field is mandatory.</div>
                        </div>
                        <!-- Last name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" name ="name" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Last name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">This field is mandatory.</div>
                        </div>
                        <!-- mail address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Mail Adresse</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">This field is mandatory.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Subject input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Subject</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">This field is mandatory.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" name="message" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">This field is mandatory.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <!--<div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Votre message est envoyé avec succès!</div>
                            </div>
                        </div>-->
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <!--<div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Votre message n'est pas envoyé avec succès!</div></div>-->
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl" onclick="envoyeremail()" id="submitButton" type="submit">Send</button></div>
                        <?php include 'mail.php'; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php include 'footer.php'; ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>