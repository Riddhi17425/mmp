
<!-- GOOGLE TRANSLATE LIB -->
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
 
 
 /* ================= Language Select Wrapper ================= */
 #dropdownInput{background-image:none!important;}
.language-select {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 12px;
    background: rgba(255, 255, 255, 0.1); /* Subtle glass effect */
    border-radius: 50px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    cursor: default;
    transition: all 0.3s ease;
    width: auto;
    border:none !important;
}

.language-select:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.5);
}

/* ================= Dropdown Wrapper ================= */
.language-select .dropdown-wrapper {
    position: relative;
    flex-grow: 0;
}

.language-select .dropdown-input-lan {
    display: none;
    pointer-events: none;
}


/* ================= Dropdown List Container ================= */
.language-select .dropdown-list {
    position: absolute;
    top: calc(100% + 30px);
    left: -70px; /* Adjusted for better alignment */
    width: 220px;
    max-height: 300px;
    overflow-y: auto;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    display: none;
    z-index: 9999;
    padding-bottom: 8px;
    animation: fadeIn 0.2s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

.language-select .dropdown-list.show {
    display: block;
}

/* ================= Search Box Inside Dropdown ================= */
.dropdown-wrapper .dropdown-search {
    padding: 12px;
    position: sticky;
    top: 0;
    background: #fff;
    border-bottom: 1px solid #eee;
    z-index: 10;
}

.dropdown-wrapper .dropdown-search input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 13px;
    transition: border-color 0.2s;
}

.dropdown-wrapper .dropdown-search input:focus {
    outline: none;
    border-color: #007bff;
}

/* ================= Individual Language Items ================= */
.dropdown-wrapper .language-item {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    cursor: pointer;
    transition: background 0.2s;
}

.dropdown-wrapper .language-item:hover {
    background: #f4f7fa;
}

.dropdown-wrapper .flag-img {
    width: 20px;
    height: 14px;
    margin-right: 12px;
    border-radius: 2px;
    object-fit: cover;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.dropdown-wrapper .lang-name {
    font-size: 14px;
    color: #333;
    font-weight: 400;
}

/* Scrollbar Styling for better look */
.dropdown-list::-webkit-scrollbar {
    width: 5px;
}
.dropdown-list::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 10px;
}

/* Container for Search Input */
.dropdown-search {
    padding: 12px;
    background: #ffffff;
    border-bottom: 1px solid #f0f0f0;
    position: sticky; /* Taaki scroll karne par bhi search bar upar rahe */
    top: 0;
    z-index: 100;
}

/* Input Field Styling */
#searchInput {
    width: 100%;
    padding: 9px 12px;
    font-size: 14px;
    border: 1.5px solid #e2e8f0;
    border-radius: 8px;
    outline: none;
    background-color: #f8fafc;
    transition: all 0.3s ease;
    color: #333;
}

/* Hover and Focus State */
#searchInput:focus {
    border-color: #3b82f6; /* Blue highlight */
    background-color: #fff;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Placeholder Styling */
#searchInput::placeholder {
    color: #94a3b8;
    font-size: 13px;
}
 
</style>

<div class="dropdown-wrapper">
  <input type="text" id="dropdownInput" class="dropdown-input-lan"
         placeholder="Select Language" readonly />

  <div id="dropdownList" class="dropdown-list">
    <div class="dropdown-search">
      <input type="text" id="searchInput" placeholder="Search language...">
    </div>
    <div id="listItems"></div>
  </div>
</div>
<div id="google_translate_element"></div>
<script>
/* ===================== LANGUAGE LIST ===================== */
const languages = [
  { code: 'it', name: 'Italiano (Italian)', iso: 'it' },
  { code: 'es', name: 'Español (Spanish)', iso: 'es' },
  { code: 'de', name: 'Deutsch (German)', iso: 'de' },

  { code: 'en', name: 'English' },
  { code: 'fr', name: 'Français (French)' },
  { code: 'hi', name: 'हिन्दी (Hindi)' },
  { code: 'ar', name: 'العربية (Arabic)' },
  { code: 'zh-CN', name: '中文 (Chinese)' },
  { code: 'ru', name: 'Русский (Russian)' }
];

/* ===================== ELEMENTS ===================== */
const dropdownInput = document.getElementById('dropdownInput');
const dropdownList  = document.getElementById('dropdownList');
const listItems     = document.getElementById('listItems');
const searchInput   = document.getElementById('searchInput');

const SESSION_KEY = 'activeTranslation';
let alreadyApplied = false;

/* ===================== CLEAR COOKIE FIRST LOAD ===================== */
if (!sessionStorage.getItem(SESSION_KEY)) {
  document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
}

/* ===================== RENDER LIST ===================== */
function renderList(list) {
  listItems.innerHTML = '';

  list.forEach((l, index) => {
    const div = document.createElement('div');
    div.className = 'language-item';

    if (l.iso) {
      const img = document.createElement('img');
      img.src = `https://flagcdn.com/w20/${l.iso}.png`;
      img.className = 'flag-icon';
      div.appendChild(img);
    }

    const span = document.createElement('span');
    span.textContent = l.name;
    div.appendChild(span);

    div.onclick = () => setLanguage(l.code, l.name, l.iso);
    listItems.appendChild(div);

    if (index === 2 && searchInput.value === '') {
      const sep = document.createElement('div');
      sep.className = 'top-priority-sep';
      listItems.appendChild(sep);
    }
  });
}

/* ===================== SET LANGUAGE ===================== */
function setLanguage(code, name, iso) {
  dropdownInput.value = name;

  if (iso) {
    dropdownInput.style.backgroundImage = `url(https://flagcdn.com/w20/${iso}.png)`;
    dropdownInput.style.backgroundRepeat = 'no-repeat';
    dropdownInput.style.backgroundPosition = '10px center';
    // dropdownInput.style.paddingLeft = '40px';
  } else {
    dropdownInput.style.backgroundImage = 'none';
    // dropdownInput.style.paddingLeft = '12px';
  }

  dropdownList.classList.remove('show');

  sessionStorage.setItem(SESSION_KEY, JSON.stringify({ code, name, iso }));

  document.cookie = code === 'en'
    ? 'googtrans=/en/en; path=/;'
    : `googtrans=/en/${code}; path=/;`;

  applyLanguage(code, true);
}

/* ===================== APPLY LANGUAGE ===================== */
function applyLanguage(code, userTriggered = false) {
  if (alreadyApplied && !userTriggered) return;
  alreadyApplied = true;

  const interval = setInterval(() => {
    const combo = document.querySelector('.goog-te-combo');
    if (combo) {
      combo.value = code;
      combo.dispatchEvent(new Event('change'));
      clearInterval(interval);
    }
  }, 120);
}

/* ===================== GOOGLE INIT ===================== */
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    autoDisplay: false,
    includedLanguages: languages.map(l => l.code).join(',')
  }, 'google_translate_element');

  restoreLanguage();
}

/* ===================== RESTORE ===================== */
function restoreLanguage() {
  const data = sessionStorage.getItem(SESSION_KEY);
  if (data) {
    const { code, name, iso } = JSON.parse(data);
    setLanguage(code, name, iso);
  } else {
    resetDropdown();
    applyLanguage('en');
  }
}

/* ===================== RESET UI ===================== */
function resetDropdown() {
  dropdownInput.value = 'Select Language';
  dropdownInput.style.backgroundImage = 'none';
  dropdownInput.style.paddingLeft = '12px';
}

/* ===================== COOKIE SYNC ===================== */
function getGoogTransLang() {
  const match = document.cookie.match(/googtrans=\/en\/([^;]+)/);
  return match ? match[1] : 'en';
}

let lastLang = getGoogTransLang();

setInterval(() => {
  const currentLang = getGoogTransLang();

  if (currentLang === 'en' && lastLang !== 'en') {
    sessionStorage.removeItem(SESSION_KEY);
    resetDropdown();
  }

  lastLang = currentLang;
}, 500);

/* ===================== UI EVENTS ===================== */
searchInput.oninput = () =>
  renderList(
    languages.filter(l =>
      l.name.toLowerCase().includes(searchInput.value.toLowerCase())
    )
  );

const languageSelect = document.querySelector('.language-select');
if (languageSelect) {
  languageSelect.addEventListener('click', (event) => {
    if (event.target.closest('.dropdown-list') || event.target.closest('#searchInput')) {
      return;
    }
    event.stopPropagation();
    dropdownList.classList.toggle('show');
  });
}

document.addEventListener('click', e => {
  if (!e.target.closest('.language-select')) {
    dropdownList.classList.remove('show');
  }
});

window.addEventListener('load', () => renderList(languages));
</script>
