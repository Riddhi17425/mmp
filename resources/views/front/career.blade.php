@include('layouts.frontheader')
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/contact-banner-bg.jpg') }}" alt="Contact Banner" class="img-fluid product-page-header" />
    <div class="contact-head">
      <h1>Career</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">career</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<section class="partner_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Unlock Your Potential and Achieve Your Career Goals with Us</h2>
                <p>At mmp Filtration, we're committed to providing you with a fulfilling career that challenges you to upskill and make a difference in the world. Join us in advancing solar solutions to tackle global energy challenges, while enjoying a supportive team environment that fosters growth and inspiration. We prioritise your well-being, our business success, and the health of our planet, promising you an unforgettable experience where you can truly thrive. Explore our career opportunities today and discover the perfect role for you. Join us and experience the difference for yourself.</p>
            </div>
            <div class="col-lg-12">
                <form method="post" action="{{ route('careerstore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder="" id="career_name" name="name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();">
                                    <label for="career_name">Name</label>
                                    <div id="career-name-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder=" " id="career_phone" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11);">
                                    <label for="career_phone">Contact No.</label>
                                    <div id="career-phone-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" placeholder=" " id="career_email" name="email">
                                    <label for="career_email">Email</label>
                                    <div id="career-email-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="inquiry_select" id="career_product_type" name="product_type" placeholder="">
                                        <option value="">Select</option>
                                        @foreach($productname as $val)
                                        <option value="{{$val->product_name}}">{{$val->product_name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="career_product_type">Product Types</label>
                                    <div id="career-product-type-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" id="career_message" cols="" rows="10" class="w-100" placeholder=" "></textarea>
                                    <label for="career_message">Message</label>
                                    <div id="career-message-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <p>Upload Your CV (PDF/DOC/DOCX max 25MB)</p>
                                    <input type="file" id="career_filename" name="filename" class="fileselect" accept=".pdf,.doc,.docx">
                                    <div id="career-file-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div id="career_recaptcha" class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site') }}"></div>
                                    <input type="hidden" name="g-recaptcha-response" id="career-recaptcha-response">
                                    <div id="career-captcha-error" class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="submit-button" id="career_submit_btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return {
        valid: re.test(email),
        message: "Invalid email format."
    };
}

function containsSpamContent(value) {
    const spamWords = ["http", "www", ".com", ".net"];
    return spamWords.some(word => value.toLowerCase().includes(word));
}

document.addEventListener("DOMContentLoaded", function () {
    const careerForm = document.querySelector('form[action="{{ route("careerstore") }}"]');
    
    if (careerForm) {
        careerForm.addEventListener("submit", function (event) {
            let isValid = true;

            let name = document.getElementById("career_name");
            let nameError = document.getElementById("career-name-error");
            if (name.value.trim() === "") {
                nameError.innerText = "Name is required.";
                isValid = false;
            } else {
                nameError.innerText = "";
            }

            let email = document.getElementById("career_email");
            let emailError = document.getElementById("career-email-error");
            let emailValidation = validateEmail(email.value.trim());
            if (!emailValidation.valid) {
                emailError.innerText = emailValidation.message;
                isValid = false;
            } else {
                emailError.innerText = "";
            }

            let phone = document.getElementById("career_phone");
            let phoneError = document.getElementById("career-phone-error");
            if (phone.value.trim().length < 10 || containsSpamContent(phone.value)) {
                phoneError.innerText = "Enter valid phone number.";
                isValid = false;
            } else {
                phoneError.innerText = "";
            }

            let productType = document.getElementById("career_product_type");
            let productTypeError = document.getElementById("career-product-type-error");
            if (productType.value.trim() === "") {
                productTypeError.innerText = "Select a Product type.";
                isValid = false;
            } else {
                productTypeError.innerText = "";
            }
            
            let file = document.getElementById("career_filename");
            let fileError = document.getElementById("career-file-error");
            if (!file.files.length) {
                fileError.innerText = "Resume upload is required.";
                isValid = false;
            } else {
                let fileSize = file.files[0].size / 1024 / 1024; // in MB
                let fileExt = file.files[0].name.split('.').pop().toLowerCase();
                if (!['pdf', 'doc', 'docx'].includes(fileExt)) {
                    fileError.innerText = "Only PDF, DOC, or DOCX files allowed.";
                    isValid = false;
                } else if (fileSize > 25) {
                    fileError.innerText = "File must be under 25MB.";
                    isValid = false;
                } else {
                    fileError.innerText = "";
                }
            }

            let message = document.getElementById("career_message");
            let messageError = document.getElementById("career-message-error");
            if (message.value.trim() === "" || containsSpamContent(message.value)) {
                messageError.innerText = "Enter valid message.";
                isValid = false;
            } else {
                messageError.innerText = "";
            }
        
            // Get reCAPTCHA response for this specific form
            let captchaResponse = "";
            try {
                captchaResponse = grecaptcha.getResponse(careerRecaptchaWidgetId);
            } catch (e) {
                console.error("Error getting reCAPTCHA response:", e);
            }
            
            let captchaError = document.getElementById("career-captcha-error");
            if (!captchaResponse || captchaResponse.length === 0) {
                captchaError.innerText = "Please complete the CAPTCHA.";
                isValid = false;
            } else {
                captchaError.innerText = "";
                // Set the hidden input value
                document.getElementById("career-recaptcha-response").value = captchaResponse;
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    }
});

// Initialize reCAPTCHA with a unique widget ID for the career form
var careerRecaptchaWidgetId;
function onloadCareerRecaptcha() {
    // Only initialize if the element exists
    if (document.getElementById('career_recaptcha')) {
        careerRecaptchaWidgetId = grecaptcha.render('career_recaptcha', {
            'sitekey': '{{ config("services.recaptcha.site") }}',
            'callback': function(response) {
                document.getElementById('career-recaptcha-response').value = response;
                document.getElementById('career-captcha-error').innerText = '';
            }
        });
    }
}

// Add this script at the end of your page or in a separate file
document.addEventListener('DOMContentLoaded', function() {
    // If grecaptcha is already loaded
    if (typeof grecaptcha !== 'undefined' && grecaptcha.render) {
        onloadCareerRecaptcha();
    } else {
        // If not, we'll wait for the callback
        window.onloadCareerRecaptchaCallback = function() {
            onloadCareerRecaptcha();
        };
        
        // Add the script only if it doesn't exist yet
        if (!document.querySelector('script[src*="recaptcha/api.js"]')) {
            var script = document.createElement('script');
            script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCareerRecaptchaCallback&render=explicit';
            script.async = true;
            script.defer = true;
            document.head.appendChild(script);
        } else {
            // If script exists but callback not defined, define it
            window.onloadCareerRecaptchaCallback = onloadCareerRecaptcha;
        }
    }
});
</script>

@include('layouts.frontfooter')