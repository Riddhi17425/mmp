
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.min.css">

<style>
.whatsapp_img img{animation: pulse 1.5s infinite;}
@keyframes  pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(20, 166, 20, 0.7);
    }
    70% {
        box-shadow: 0 0 0 15px rgba(20, 166, 20, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(20, 166, 20, 0);
    }
}
.WhatsAppButton_mpp {
  position: fixed;
  top: 50%;
  right: 0;
  z-index: 1000;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
.whatsapp-popup {
  position: absolute;
  bottom: -100px;
  right: 60px;
  width: 320px;
  background: #fff;
  box-shadow: 0 8px 30px rgba(0,0,0,0.18);
  border-radius: 14px;
  transform: rotateY(90deg);
  transform-origin: 100% 100%;
  transition: transform 0.4s ease, opacity 0.4s ease, visibility 0.4s;
  opacity: 0;
  visibility: hidden;
}
.whatsapp-popup.active {
  transform: rotateY(0deg);
  opacity: 1;
  visibility: visible;
}
.wa_head {
  background-color: #17367f;
  padding: 14px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wa_head h5 { color: #fff; margin: 0; font-size: 15px; font-weight: 600; }
.close-inquiry { font-size: 28px; cursor: pointer; color: #fff; }
.wa_form { padding: 18px 16px 20px; }
.wa_form textarea, .wa_form input {
  width: 100%;
  padding: 9px 11px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 13px;
  outline: none;
}
.wa_form textarea { height: 80px; resize: none; }
.wa-btn {
  margin-top: 10px;
  width: 100%;
  padding: 11px;
  background: #17367f;
  color: #fff;
  border-radius: 10px;
  border: none;
  font-weight: 600;
  cursor: pointer;
}
.whatsapp_img img {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  cursor: pointer;
}
.iti{width:100%;}
.iti__search-input{padding-left:30px!important;}

@media (max-width: 767px) {
    .whatsapp-popup
    {
        width:280px;
    }
}

</style>

<div class="WhatsAppButton_mpp">
  <div class="whatsapp_img">

    <div class="whatsapp-popup" id="whatsappPopup">
      <div class="wa_head">
        <h5>Contact on WhatsApp</h5>
        <span class="close-inquiry">&times;</span>
      </div>

      <form class="wa_form" method="POST" action="{{ route('whatsaapinquiry') }}" id="whatsappForm" target="_blank">
        @csrf
        <input type="text" name="website_url" style="display:none">
        <textarea id="waMessage" name="message" placeholder="Type your message "></textarea>

        <input 
          type="tel"
          id="wa_phone"
          name="number"
          placeholder="Enter phone number"
          required
          oninput="this.value = this.value.replace(/[^0-9]/g,'').slice(0,15);"
        />
        <div id="wa_phone_error" class="text-danger mt-1" style="font-size:13px;"></div>
        
        <input type="hidden" name="full_number" id="wa_full_phone">
        <input type="hidden" name="country" id="wa_country_name">

        <button type="submit" class="wa-btn">💬 Start Chat with Us</button>
      </form>
    </div>

    <img src="{{ asset('public/newpublic/images/whatsapp.png') }}" id="whatsappBtn" alt="whatsapp">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const whatsappBtn   = document.getElementById("whatsappBtn");
    const whatsappPopup = document.getElementById("whatsappPopup");
    const closeBtn      = document.querySelector(".close-inquiry");

    const form          = document.getElementById("whatsappForm");
    const input         = document.querySelector("#wa_phone");

    const fullPhone     = document.querySelector("#wa_full_phone");
    const countryName   = document.querySelector("#wa_country_name");

    const errorDiv      = document.querySelector("#wa_phone_error");

    whatsappBtn.addEventListener("click", () => {
        whatsappPopup.classList.toggle("active");
    });

    closeBtn.addEventListener("click", () => {
        whatsappPopup.classList.remove("active");
    });

    const iti = window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        preferredCountries: ["in", "ae", "us", "gb"],
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js"
    });

    input.addEventListener("input", function () {

        errorDiv.innerHTML = "";

        input.classList.remove("is-invalid");

    });

    form.addEventListener("submit", function (e) {

        errorDiv.innerHTML = "";

        const countryData = iti.getSelectedCountryData();

        const number = input.value.replace(/\D/g, "");

        // SIMPLE LENGTH VALIDATION
        if (number.length < 8 || number.length > 15) {

            e.preventDefault();

            errorDiv.innerHTML = "Please enter valid WhatsApp number.";

            input.classList.add("is-invalid");

            return false;
        }

        // CREATE FULL NUMBER
        fullPhone.value = "+" + countryData.dialCode + number;

        countryName.value = countryData.name;
        
        // GTM Event Push
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
    event: "whatsapp_click",
    phone: "+" + countryData.dialCode + number
});

        whatsappPopup.classList.remove("active");

        setTimeout(function () {

            form.reset();

            iti.setCountry("in");

            input.classList.remove("is-invalid");

        }, 100);

    });

});
</script>
