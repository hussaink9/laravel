@include('/include/header')
    <div class="container p-0 m-0 pb-5 pt-1 mw-100 brakemain">
       <div class="row w-100">
           <div class="col contactus1 mt-lg-5 mb-lg-5">
               <h2>
                Contact Golden State Tire & Auto Shop | <a href="tel:707434-8473"class="hreffservice1">(707) 434-8473</a>
               </h2>
           </div>
       </div>
       <form action="" method="Post">
        <div class="row formfiled1" >
            <div class="col-lg-4 mt-lg-3">
                <div class="form-group formfiled2">
                    <input type="text"  placeholder="Full Name" name="FullName" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-3">
                <div class="form-group formfiled2">
                    <input type="text" name="subject"  placeholder="Phone Number"class="form-control"required>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-3">
                <div class="form-group formfiled2">
                    <input type="text"  placeholder="Email Address"class="form-control"required>
                </div>
            </div>
        </div>
        <div class="row formfiled3 pb-5">
            <div class="col-lg-8">
                <div class="form-group formfiled4">
                    <textarea name="message" id="textareaa"  placeholder="Message"cols="1" rows="5" required></textarea>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row ">
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-6 formfiled6">
                        <input type="text"  placeholder="Email Address"class="form-control"required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 formfiled5">
                        <button type="submit" name="submit">Submit Form</button>
                    </div>
                </div>
            </div>
        </div>
       </form>
        <div class="row  mt-lg-5 pb-5  pt-3 adressdiv">
            <div class="col-sm-6 pt-3 ps-4 adressdiv1">
                <h3>
                    Contact Us
                </h3>
                <a href="tel:(707) 434-8473" class="hreffservice">(707) 434-8473</a>
                <a href="mailto:info@goldenstateautoandtire.com" class="hreffservice">info@goldenstateautoandtire.com</a>
                <h3>
                    Our location
                </h3>
                <a href="https://www.google.com/maps/place/Golden+State+Tire+%26+Auto+Repair/@38.271684,-122.034386,16z/data=!4m5!3m4!1s0x0:0x333248bab2bcc59f!8m2!3d38.2716843!4d-122.0343857?hl=en"
                 class="hreffservice">2349 N Texas St <br>Fairfield, CA 94533</a>
            </div>
            <div class="col-sm-6 adressdiv2 pt-3">
                <h4>
                    Hours of operation
                </h4>
                <p>Monday to Saturday: 8AM-6PM</p>
                <p class="adressdiv22">Sunday: 8AM-5PM</p>
                <h3>
                     Methods of Payment
                </h3>
                <img src="/images/contactimg/icon 2.png" alt="not valid link" width="50">
                <img src="/images/contactimg/icon 7.png" alt="not valid link" width="50">
                <img src="/images/contactimg/icon 3.png" alt="not valid link" width="50">
                <img src="/images/contactimg/icon 4.png" alt="not valid link" width="50">
                <img src="/images/contactimg/icon 5.png" alt="not valid link" width="50">
                <img src="/images/contactimg/icon 6.png" alt="not valid link" width="50">
                <img src="/images/contactimg/icon 1.png" alt="not valid link" width="50">
            </div>
        </div>
        <div class="col-lg-12 addressmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6264.673674144372!2d-122.03438600000001!3d38.271684!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x333248bab2bcc59f!2sGolden%20State%20Tire%20%26%20Auto%20Repair!5e0!3m2!1sen!2sca!4v1644471996736!5m2!1sen!2sca" width="400" height="343" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@include('/include/footer')
<script type="text/script">
    (isset($_POST['submit'])){
        $to ="Example@gmail.com";
        $Subject = $_POST['FullName'],$_POST['subject'] ;
        $message = $_POST['message']
    }
</script>