@include('layouts.frontheader')
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/contact-banner-bg.jpg') }}" alt="Contact Banner" class="img-fluid product-page-header" />
    <div class="contact-head">
      <h1>Contact Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<?php //dd($productname); ?>
<section class="lets-talk py-3">
  <div class="container">
    <h3 class="mb-3">Let's Talk</h3>
    <div class="row">
        <div class="col-md-6">
            @php
            $a = rand(1,9);
            $b = rand(1,9);
            @endphp

            <form method="post" action="{{ route('contactstore') }}"  enctype="multipart/form-data" class="my-4">
                @csrf
                 <input type="text" name="website" style="display:none">
                <div class="form-container">
                    <div class="form-group mb-3">
                        <input type="text" placeholder="" id="name"  name="name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"/>
                        <label for="name">Name</label>
                        <div id="name-error" class="text-danger"></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" placeholder=" "  id="inputField" name="email"/>
                        <label for="inputField">Email</label>
                        <div id="email-error" class="text-danger"></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder=" " id="phone" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"/>
                        <label for="phone">Contact No.</label>
                        <div id="phone-error" class="text-danger"></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder=" " id="company_name" name="company_name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"/>
                        <label for="company_name">Company Name</label>
                        <div id="company_name-error" class="text-danger"></div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder=" " id="city" name="city" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"/>
                        <label for="city">City</label>
                        <div id="city-error" class="text-danger"></div>
                    </div>
                    <div class="form-group mb-3">
                        <select class="inquiry_select" id="product_type"  name="product_type" placeholder="">
                            <option value="">Select</option>
                            @foreach($productname as $val)
                            <option value="{{$val->product_name}}">{{$val->product_name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Product Types</label>
                        <div id="product-type-error" class="text-danger"></div>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="message" id="message" cols=""  rows="5" class="w-100" placeholder=" "></textarea>
                        <label for="message">Message</label>
                        <div id="message-error" class="text-danger"></div>
                    </div>
                   <div class="mb-2">
                        <label style="font-size:13px;">
                            What is <span id="capA">{{ $a }}</span> + <span id="capB">{{ $b }}</span> ?
                        </label>
                    
                        <div style="display:flex;gap:6px;">
                            <input type="number" id="simple_captcha" name="simple_captcha" placeholder="Enter answer" 
                                   oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                            <button type="button" id="refreshCaptcha"
                                    style="border:0;background:#eee;padding:5px 8px;border-radius:5px;">↻</button>
                        </div>
                    
                        <input type="hidden" name="captcha_sum" id="captcha_sum" value="{{ $a + $b }}">
                        <!-- Dedicated div for captcha errors -->
                        <div id="captcha-error" class="text-danger"></div>
                    </div>
                    <div id="submittingMsg" style="display:none;text-align:center;font-weight:bold;color:#17367f;padding:10px;">Submitting your message...</div>
                    <button class="submit-button" type="submit" id="submitBtn">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-6 mt-3">
        <div>
          <b>HEAD OFFICE (KOLKATA)</b>
          <ul class="p-0">
            <li class="d-flex align-items-start mb-3">
              <span
                ><img
                  src="{{ asset('public/front/images/contact-map.png') }}"
                  alt=""
                  class="img-fluid me-2"
              /></span>
               <a target="_blank" class="m-0" href="https://www.google.com/maps/place/34c,+Grey+St,+Raja+Nabakrishna+Street,+Sovabazar,+Darjipara,+Shobhabazar,+Kolkata,+West+Bengal+700005/@22.5954936,88.3657081,17z/data=!4m6!3m5!1s0x3a027633a36d6fcb:0x30b918d03a92edee!8m2!3d22.5954936!4d88.3657081!16s%2Fg%2F11v06pksdn"> 34 C, Sri Aurobindo Sarani Kolkata – 700005 West Bengal, India</a>
            </li>
            <li class="d-flex align-items-start mb-3">
              <span
                ><img
                  src="{{ asset('public/front/images/contact-phone.png') }}"
                  alt="Contact"
                  class="img-fluid me-2"
              /></span>
              <a href="tel:919830030614">+91 9830030614</a>
            </li>
            <li class="d-flex align-items-start mb-3">
              <span
                ><img
                  src="{{ asset('public/front/images/contact-mail.png') }}"
                  alt=""
                  class="img-fluid me-2"
              /></span>
              <a href="mailto:sales@mmpfilter.com">sales@mmpfilter.com</a>
            </li>
          </ul>
        </div>
        <div>
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7367.123219131235!2d88.365708!3d22.595494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027633a30d9d9b%3A0x7e529ad96c65cac0!2sMMP%20Filtration%20Private%20Limited!5e0!3m2!1sen!2sin!4v1698930200879!5m2!1sen!2sin" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a href="https://connectionsgame.org/">Connections NYT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-4 mb-3">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div> 
                <b>Ahmedabad Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class=" me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contact Map"
                        
                    /></div>
                     <a target="_blank" href="https://www.google.com/maps/search/C3-602+Anushruti+Tower,+SG+Road,+Thaltej,+Ahmedabad+%E2%80%93+380059+Gujarat,+India/@23.053608,72.5150764,17z/data=!3m1!4b1?entry=ttu" class="m-0">
                    C3-602 Anushruti Tower, SG Road, Thaltej, Ahmedabad – 380059 Gujarat, India
                    </a>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contact Phone"
                        class="img-fluid me-2"
                    /></span>
                    <a href="tel:917043745709">+91-7043745709</a>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-mail.png') }}"
                        alt="Contact Mail"
                        class="img-fluid me-2"
                    /></span>
                    <a href="mailto:ahmd-sales@mmpfilter.com">ahmd-sales@mmpfilter.com</a>
                  </li>
                </ul>
              </div>
              <div class="mt-0">
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7342.373829144561!2d72.517651!3d23.053608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b550038f8d7%3A0xc0331137ca911044!2sMMP%20FILTRATION%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1698405731520!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    ><a href="https://connectionsgame.org/">Connections NYT</a>
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      <div class="col-md-4 mb-3">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div>
                <b>Chennai Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contact Map"
                        
                    /></div>
                     <a class="m-0" target="_blank" href="https://www.google.com/maps/search/Anantha+Nilayam,Ground+Floor,+No.19,+NSK+Street,+Ambal+Nagar,+Ramapuram,+Chennai+%E2%80%93+600089+Tamil+Nadu/@13.0915761,80.1893327,17z/data=!3m1!4b1?entry=ttu">
                      Anantha Nilayam, Ground Floor, No.19, NSK Street, Ambal Nagar, Ramapuram, Chennai – 600089 Tamil Nadu, India
                    </a>
                   
                  </li>
                   <li class="d-flex align-items-start">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contact Phone"
                        class="img-fluid me-2"
                    /></span>
                    <a href="tel:916381702388" title="916381702388" data-other="1" onclick="gtag('event', 'Clicked to Call 916381702388', { 'event_category' : 'Phone Number (916381702388)' });" aria-label="call 916381702388" data-uw-rm-vglnk="" uw-rm-vague-link-id="tel:916381702388$call 916381702388">+91-6381702388</a>
                   
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    
                    <a href="tel:919830566648" title="919830566648" data-other="1" onclick="gtag('event', 'Clicked to Call 919830566648', { 'event_category' : 'Phone Number (919830566648)' });" aria-label="call 919830566648" data-uw-rm-vglnk="" uw-rm-vague-link-id="tel:919830566648$call 919830566648" class="ps-4">+91-9830566648</a>
                   
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-mail.png') }}"
                        alt="Contact Mail"
                        class="img-fluid me-2"
                    /></span>
                    <a href="mailto:chennai@mmpfilter.com">chennai@mmpfilter.com</a>
                  </li>
                </ul>
              </div>
              <div>
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7774.013592396861!2d80.17587500000002!3d13.035239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52667260382ba9%3A0x355765de517fadcd!2sMmp%20Filtration%20Private%20Limited!5e0!3m2!1sen!2sin!4v1698405699332!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://connectionsgame.org/">Connections NYT</a>
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      <div class="col-md-4 mb-3">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div>
                <b>Mumbai Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contact Map"
                        
                    /></div>
                   <a class="m-0" target="_blank" href="https://www.google.com/maps/dir//Mmp+Filtration+Pvt+Ltd,+Unit+No.101,102,103+1st+floor+,Doms+Industrial+Complex.+Range+office,+Vasai+East,+Mumbai,+Maharashtra+401208/@19.4063046,72.8498442,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be7c86e0f3ea19d:0x5676e85c8ddfaf63!2m2!1d72.8498442!2d19.4063046?entry=ttu&g_ep=EgoyMDI2MDIxOC4wIKXMDSoASAFQAw%3D%3D">
                      101, Doms Industrial Complex,
                      Range Office, Vasai East, Palghar
                      Maharashtra - 401208, India
                    </a>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contact Phone"
                        class="img-fluid me-2"
                    /></span>
                     <a href="tel:917738823434">+91-7738823434</a>
                  </li>
                  
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-mail.png') }}"
                        alt="Contact Mail"
                        class="img-fluid me-2"
                    /></span>
                    <a href="mailto:mumbai@mmpfilter.com">mumbai@mmpfilter.com</a>
                  </li>
                </ul>
              </div>
              <div>
                 <div class="mapouter">
                  <div class="gmap_canvas">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7526.282364350818!2d72.849844!3d19.406305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c86e0f3ea19d%3A0x5676e85c8ddfaf63!2sMmp%20Filtration%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1698405649237!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="https://connectionsgame.org/">Connections NYT</a>
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      <div class="col-md-4 mb-3 mt-3">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div>
                <b>USA Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contact Map"
                        
                    /></div>
                     <a class="m-0" target="_blank" href="https://maps.app.goo.gl/fJMVvq921uMmeYgZA">
                     1372 Main St, Coventry, RI 02816, United States</a>
                   
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contact Phone"
                        class="img-fluid me-2"
                    /></span>
                     <a href="tel:1(401)8719315">+1 (401) 871-9315</a>
                  </li>
                </ul>
              </div>
              <div>
                 <div class="mapouter">
                  <div class="gmap_canvas">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11916.655284009861!2d-71.58302811821515!3d41.69539905926616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e435810b34373b%3A0x1fe99da1413c5030!2sAquaTex%20Solutions%20Veteran%20owned!5e0!3m2!1sen!2sin!4v1761649733216!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="https://connectionsgame.org/">Connections NYT</a>
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      <div class="col-md-4 mb-3 mt-3">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div>
                <b>USA Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contact Map"
                        
                    /></div>
                     <a class="m-0" target="_blank" href="https://maps.app.goo.gl/TJsvz9RXz3QcqjKP9">
                      50 Division St
Pawtucket, RI 02860, USA</a>
                   
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contact Phone"
                        class="img-fluid me-2"
                    /></span>
                     <a href="tel:(401)7225600">+1 (401) 722-5600</a>
                  </li>
                </ul>
              </div>
              <div>
                 <div class="mapouter">
                  <div class="gmap_canvas">
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.9180541544383!2d-71.3869580225156!3d41.873109502184214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e45caab36b0b15%3A0xf6e01c6e52f30733!2s50%20Division%20St%2C%20Pawtucket%2C%20RI%2002860%2C%20USA!5e0!3m2!1sen!2sin!4v1737373395690!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="https://connectionsgame.org/">Connections NYT</a>
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      <div class="col-md-4 mb-3 mt-3">
        <div class="h-100 d-flex flex-column justify-content-between">
            <div>
                <b>Italy Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contact Map"
                        
                    /></div>
                     <a class="m-0" target="_blank" href="https://maps.app.goo.gl/WaRmXrb2yTRQKZAR8">
                     Via Rossini 28, Cologno Monzese (MI), Italy</a>
                   
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contact Phone"
                        class="img-fluid me-2"
                    /></span>
                     <a href="tel:+393286959896 ">+39 3286959896 </a>
                  </li>
                </ul>
              </div>
              <div>
                 <div class="mapouter">
                  <div class="gmap_canvas">
                      <img src ="{{ asset('public/front/images/map.png') }}" alt="map" class="map-img-contact">
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      
    </div>
  </div>
</section>
<script>
// CAPTCHA REFRESH FUNCTION
function refreshCaptcha() {
    let a = Math.floor(Math.random() * 9) + 1;
    let b = Math.floor(Math.random() * 9) + 1;
    document.getElementById("capA").textContent = a;
    document.getElementById("capB").textContent = b;
    document.getElementById("captcha_sum").value = a + b;
    document.getElementById("simple_captcha").value = '';
    const captchaErr = document.getElementById("captcha-error");
    if(captchaErr) captchaErr.textContent = '';
}

// CAPTCHA refresh button
document.getElementById("refreshCaptcha").addEventListener("click", refreshCaptcha);

// Only required fields for real-time error clearing
const requiredFields = [
    {field:"name", error:"name-error"},
    {field:"inputField", error:"email-error"},
    {field:"phone", error:"phone-error"},
    {field:"company_name", error:"company_name-error"},
    {field:"product_type", error:"product-type-error"},
    {field:"message", error:"message-error"},
    {field:"simple_captcha", error:"captcha-error"}
];

// Remove error messages on input/change only for required fields
requiredFields.forEach(f => {
    const el = document.getElementById(f.field);
    const errEl = document.getElementById(f.error);
    if(el && errEl){
        el.addEventListener("input", () => { errEl.textContent = ""; });
        el.addEventListener("change", () => { errEl.textContent = ""; });
    }
});

// FORM VALIDATION & AJAX SUBMISSION
const form = document.querySelector("form[action='{{ route('contactstore') }}']");
form.addEventListener("submit", function(e){
    e.preventDefault();

    // Clear previous errors
    form.querySelectorAll(".text-danger").forEach(el => el.textContent="");

    let valid = true;

    const name     = document.getElementById("name").value.trim();
    const email    = document.getElementById("inputField").value.trim();
    const phone    = document.getElementById("phone").value.trim();
    const company  = document.getElementById("company_name").value.trim();
    const product  = document.getElementById("product_type").value;
    const message  = document.getElementById("message").value.trim();
    const captchaInput = document.getElementById("simple_captcha").value.trim();
    const captchaSum   = parseInt(document.getElementById("captcha_sum").value) || 0;

    // VALIDATION ONLY FOR REQUIRED FIELDS
    if(!name){ document.getElementById("name-error").textContent="Name is required."; valid=false; }
    if(!email || !/^\S+@\S+\.\S+$/.test(email)){ document.getElementById("email-error").textContent="Valid Email is required."; valid=false; }
    if(!phone || !/^[0-9]{10,15}$/.test(phone)){ document.getElementById("phone-error").textContent="Enter valid phone number."; valid=false; }
    if(!company){ document.getElementById("company_name-error").textContent="Company is required."; valid=false; }
    if(!product){ document.getElementById("product-type-error").textContent="Please select product."; valid=false; }
    // if(!message){ document.getElementById("message-error").textContent="Message is required."; valid=false; }

    // CAPTCHA
    if(captchaInput===""){ document.getElementById("captcha-error").textContent="Enter captcha answer."; valid=false; }
    else if(parseInt(captchaInput)!==captchaSum){ 
        document.getElementById("captcha-error").textContent="Incorrect answer – try again."; 
        setTimeout(refreshCaptcha,1400); 
        valid=false; 
    }

    if(!valid) return;

    // ---- Prevent duplicate submissions ----
    const submitBtn = document.getElementById("submitBtn");
    const submittingMsg = document.getElementById("submittingMsg");

    submitBtn.disabled = true;
    submitBtn.style.display = "none";
    submittingMsg.style.display = "block";
    // ----------------------------------------

    // AJAX submission
    fetch(this.action,{
        method:"POST",
        headers:{ "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value },
        body:new FormData(this)
    })
    .then(res => { if(!res.ok) throw new Error("Server Error"); return res.text(); })
    .then(() => {
        // Reset form after success
        form.reset();
        refreshCaptcha();
        form.querySelectorAll(".text-danger").forEach(el => el.textContent="");
        window.location.href = "{{ route('thank-you') }}";
    })
    .catch(err => {
        console.error(err);
        document.getElementById("captcha-error").textContent="Something went wrong. Try again.";

        // Re-enable button so user can retry on failure
        submittingMsg.style.display = "none";
        submitBtn.style.display = "block";
        submitBtn.disabled = false;
    });
});
</script>

@include('layouts.frontfooter')
