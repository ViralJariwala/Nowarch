<?php
    include('includes/subheader.php');
	
	
?>

<!-- Contact section --><section class="contact section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-subtitle">Location</div>
                        <div class="section-title">Contact Us</div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6 mb-90">
                        <p>Thank you so much for reaching out to us - we are excited to connect with you! Tell us about you. If you do not receive response within 24 hours, please contact us directly email or phone.</p>
                        <ul class="list-unstyled contact-list">
                        <li>
                            <div class="icon"><span class="ti-headphone-alt"></span></div>
                            <div class="text">
                                <p><a href="tel:+1123-456-0606">+91 9979966965</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-email"></span> </div>
                            <div class="text">
                                <p><a href="mailto:info@architecture.com">info@architecture.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-location-pin"></span> </div>
                            <div class="text">
                                <p>01 Northview Appartment , Nanpura ,Surat</p>
                            </div>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-4 offset-md-2 mb-90">
                        <h5>Get in touch</h5>
                        <form method="post" class="contact__form" action="http://duruthemes.com/demo/html/nowarch/multipage-dark/mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required> 
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required> 
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit"  value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.159125718316!2d72.80926662404865!3d21.188998093646873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e7af11d6193%3A0xd623f6f00dd4926b!2sNanpura%2C%20Surat%2C%20Gujarat%20395008!5e0!3m2!1sen!2sin!4v1649382247462!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
<?php
   
   include('includes/footer.php');
   include('includes/scripts.php');
   
?>