<style>
.form-group{
    position:relative;
}
    /* Overlay */
    .inquiry-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        transition: 0.3s;
        z-index: 999;
    }

    /* Panel */
    .inquiry-panel {
        position: fixed;
        top: 0;
        right: -400px;
        width: 380px;
        max-width: 90%;
        height: 100%;
        background: #f5f5f5;
        padding: 25px;
        overflow-y: auto;
        transition: 0.4s ease;
        z-index: 1000;
    }

    /* Active State */
    .inquiry-panel.active {
        right: 0;
    }

    .inquiry-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    /* Header */
    .inquiry-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .inquiry-header h4 {
        margin: 0;
    }

    .close-inquiry {
        font-size: 28px;
        cursor: pointer;
    }

    /* Form */

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }
    #headerinquiry1 input,
    #headerinquiry1 select{padding:5px;border-radius:5px;width:100%;border:1px solid #ddd;}
    #headerinquiry1 textarea{padding:5px;border-radius:5px; border:1px solid #ddd;width:100%;}
    input:focus, 
    textarea:focus, 
    select:focus {
      outline: none; 
    }


    .wa_head{background-color:#17367f;padding:10px;display:flex;align-items:center;justify-content:space-between;font-size:18px;}
    .enq_poup {
    position: absolute;
    right: 40px;
    bottom: 0px;
    width: 320px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-radius: 10px;
    z-index: 999;
    transition: all 0.5s ease;
    transform: translateY(100%);
    opacity: 0;
    visibility: hidden;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
}

.enq_poup.active {
    transform: translateY(0%);
    opacity: 1;
    visibility: visible;
}
.wa-btn{margin-top:10px;width:100%;padding:5px;text-align:center;
        background: #17367f;
    color: #fff;
    border-radius: 12px;
    font-size:18px;
    border: 1px solid #17367f;
    transition: all 0.4s;
}
.enq_poup .wa-btn:hover{
    box-shadow:rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    background-color:#fff;
    color:var(--blue);
     transition: all 0.4s;
     
}
.error-message{
    color: #ff0000;
    font-size: 12px;
    line-height:12px;
    margin-left:5px;
    margin-top: 0px;
}
#submittingMsg{
    text-align:center;
    font-weight:bold;
    color:#17367f;
    padding:10px;
    display:none;
}
@media screen and (max-width: 1440px) {
    .ft_eq_btn{bottom:0!important;}
}
@media screen and (max-width: 576px) {
    .enq_poup{width: 430px;}
    #headerinquiry1 input, #headerinquiry1 select, #headerinquiry1 textarea{
        font-size:30px;
        margin-bottom: 20px!important;
    }
    #eq_btn .wa_head h5, #eq_btn label, #eq_btn .wa-btn{font-size:25px;}
    #eq_btn #closePopup svg{scale: 1.2;}
    .lang_arr{right:0;top: 6px;}
}
/* Chrome, Safari, Edge, Opera */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type="number"] {
    -moz-appearance: textfield;
}
</style>
<!-- Enquire Button -->
<div class="ft_eq_btn" id="eq_btn">
    <div class="position-relative" style="z-index:998">
    <img src="{{ asset('public/newpublic/images/enquire-now-btn.webp') }}" alt="enquire-now" class="img-fluid" height="100" width="100">
        <!-- Hidden Div -->
    <div class="enq_poup" id="enqpoup">
    <div class="popup-content">
        <div class="wa_head">
            <h5 class="text-white mb-0">Inquiry Form1</h5>
            <div id="closePopup">
                <svg width="20" height="20" viewBox="0 0 40 40">
                    <path d="M 10,10 L 30,30 M 30,10 L 10,30" stroke="white" stroke-width="4" />
                </svg>
            </div>
        </div>

        @php
            $a = rand(1,9);
            $b = rand(1,9);
        @endphp

        <form method="post" action="{{ route('headerinquiry') }}" id="headerinquiry1" class="p-3" novalidate autocomplete="off">
            @csrf
            <input type="text" name="website_url" style="display:none">
            <div class="mb-2">
                <input type="text" name="name" id="name" placeholder="Name">
                <div class="error-message" id="err_name"></div>
            </div>

            <div class="mb-2">
                <select name="product_type" id="product_type">
                    <option value="">Select Product</option>
                    @foreach ($product as $productname)
                        <option value="{{ $productname->product_name }}">{{ $productname->product_name }}</option>
                    @endforeach
                </select>
                <div class="error-message" id="err_product"></div>
            </div>

            <div class="mb-2">
                <input type="email" name="email" id="email" placeholder="Email">
                <div class="error-message" id="err_email"></div>
            </div>

            <div class="mb-2">
                <input type="number" name="phone" id="phone" placeholder="Contact No."
                       oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15)">
                <div class="error-message" id="err_phone"></div>
            </div>

            <div class="mb-2">
                <input type="text" name="company_name" id="company_name" placeholder="Company Name">
                <div class="error-message" id="err_company"></div>
            </div>
             <div class="mb-2">
                <input type="text" name="city" id="city" placeholder="City">
                <div class="error-message" id="err_city"></div>
            </div>

            <div class="mb-2">
                <textarea name="message" id="message" placeholder="Message" rows="2"></textarea>
            </div>

            <!-- CAPTCHA -->
            <div class="mb-2">
                <label>
                    What is <span id="capA">{{ $a }}</span> + <span id="capB">{{ $b }}</span> ?
                </label>

                <div style="display:flex;gap:6px;">
                    <!--<input type="number" id="simple_captcha" placeholder="Enter answer">-->
                    <input type="number" name="simple_captcha" id="simple_captcha" placeholder="Enter answer" style="margin-bottom:0!important">
                    <button type="button" id="refreshCaptcha"
                            style="border:0;background:#eee;padding:3px 8px;border-radius:5px;">↻</button>
                </div>

                <!--<input type="hidden" name="simple_captcha" id="simple_captcha_val">-->
                <input type="hidden" name="captcha_sum" id="captcha_sum" value="{{ $a + $b }}">
                <div class="error-message" id="err_captcha"></div>
            </div>

            <div id="submittingMsg">Submitting your message...</div>
            <button type="submit" class="wa-btn" id="submitBtn">Send Message</button>
        </form>
    </div>
</div>
<script>
document.getElementById("eq_btn").addEventListener("click", function () {
    document.getElementById("enqpoup").classList.toggle("active");
});

document.getElementById("closePopup").addEventListener("click", function (e) {
    e.stopPropagation();
    document.getElementById("enqpoup").classList.remove("active");
});

document.getElementById("enqpoup").addEventListener("click", function (e) {
    e.stopPropagation();
});
</script>
<script>
// CAPTCHA REFRESH FUNCTION
function refreshCaptcha() {
    let a = Math.floor(Math.random() * 9) + 1;
    let b = Math.floor(Math.random() * 9) + 1;
    document.getElementById("capA").textContent = a;
    document.getElementById("capB").textContent = b;
    document.getElementById("captcha_sum").value = a + b;
    document.getElementById("simple_captcha").value = '';
    document.getElementById("err_captcha").textContent = '';
    document.getElementById("simple_captcha").focus();
}

document.getElementById("refreshCaptcha").addEventListener("click", refreshCaptcha);

// FORM VALIDATION & SUBMISSION
document.getElementById("headerinquiry1").addEventListener("submit", function (e) {
    e.preventDefault();

    // Clear all previous error messages
    document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

    let valid = true;

    // Get field values
    const name     = document.getElementById("name").value.trim();
    const product  = document.getElementById("product_type").value;
    const email    = document.getElementById("email").value.trim();
    const phone    = document.getElementById("phone").value.trim();
    const company  = document.getElementById("company_name").value.trim();
    const captchaInput = document.getElementById("simple_captcha").value.trim();
    const captchaSum   = parseInt(document.getElementById("captcha_sum").value) || 0;

    if (!name) {
        document.getElementById("err_name").textContent = "Name is required.";
        valid = false;
    }

    if (!product) {
        document.getElementById("err_product").textContent = "Please select product.";
        valid = false;
    }

    if (!/^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById("err_email").textContent = "Please enter a valid Email Address.";
        valid = false;
    }
    if (!/^[0-9]{10,15}$/.test(phone)) {
        document.getElementById("err_phone").textContent = "Enter valid phone number.";
        valid = false;
    }

    // Company
    if (!company) {
        document.getElementById("err_company").textContent = "Company name is required.";
        valid = false;
    }

    if (captchaInput === "") {
        document.getElementById("err_captcha").textContent = "Please enter the captcha answer.";
        valid = false;
        document.getElementById("simple_captcha").focus();
    }
    else if (parseInt(captchaInput) !== captchaSum) {
        // Show error message FIRST
        document.getElementById("err_captcha").textContent = "Incorrect answer – please try again";

        setTimeout(() => {
            refreshCaptcha();
            document.getElementById("simple_captcha").focus();
        }, 1400); 

        valid = false;
    }

    if (!valid) {
        const firstError = document.querySelector(".error-message:not(:empty)");
        if (firstError) {
            firstError.scrollIntoView({ behavior: "smooth", block: "center" });
        }
        return;
    }

    // ---- Prevent duplicate submissions ----
    const submitBtn = document.getElementById("submitBtn");
    const submittingMsg = document.getElementById("submittingMsg");

    submitBtn.disabled = true;
    submitBtn.style.display = "none";
    submittingMsg.style.display = "block";
    // ----------------------------------------

    fetch(this.action, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: new FormData(this)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Server responded with an error");
        }
        return response.text();
    })
    .then(() => {
        window.location.href = "{{ route('thank-you') }}";
    })
    .catch(err => {
        console.error("Submission error:", err);
        document.getElementById("err_captcha").textContent = 
            "Something went wrong on the server. Please try again.";

        // Re-enable button so user can retry on failure
        submittingMsg.style.display = "none";
        submitBtn.style.display = "block";
        submitBtn.disabled = false;
    });
});

// Fields to watch
const fields = [
    {id: "name", errorId: "err_name"},
    {id: "product_type", errorId: "err_product"},
    {id: "email", errorId: "err_email"},
    {id: "phone", errorId: "err_phone"},
    {id: "company_name", errorId: "err_company"},
    {id: "simple_captcha", errorId: "err_captcha"}
];

// Remove error message as user types/selects
fields.forEach(f => {
    const fieldEl = document.getElementById(f.id);
    const errorEl = document.getElementById(f.errorId);

    if (fieldEl) {
        fieldEl.addEventListener("input", () => {
            errorEl.textContent = "";
        });

        // For select elements
        fieldEl.addEventListener("change", () => {
            errorEl.textContent = "";
        });
    }
});
</script>

<script>
window.addEventListener("pageshow", function (event) {

    const form = document.getElementById("headerinquiry1");
    const popup = document.getElementById("enqpoup");
    const submitBtn = document.getElementById("submitBtn");
    const submittingMsg = document.getElementById("submittingMsg");

    if (!form) return;

    if (event.persisted || performance.getEntriesByType("navigation")[0].type === "back_forward") {
        
        form.reset();

        document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.style.display = "block";
        }
        if (submittingMsg) {
            submittingMsg.style.display = "none";
        }

        if (typeof refreshCaptcha === "function") {
            refreshCaptcha();
        }

        if (popup) {
            popup.classList.remove("active");
        }
    }
});
</script>
