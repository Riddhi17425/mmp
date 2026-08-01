  <style>

    /* ── NAV ── */
    nav {
      display: flex;
      align-items: center;
      gap: 4px;
      flex: 1;
    }

    .nav-item {
      position: static;
    }

    .nav-link {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 8px 16px;
      color: rgba(255, 255, 255, 0.82);
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      border-radius: 8px;
      transition: background 0.2s, color 0.2s;
      user-select: none;
      white-space: nowrap;
    }

    .nav-link:hover,
    .nav-item.active>.nav-link {
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
    }

    .nav-link .chevron {
      width: 14px;
      height: 14px;
      opacity: 0.55;
      transition: transform 0.25s;
    }

    .nav-item.active>.nav-link .chevron {
      transform: rotate(180deg);
      opacity: 1;
    }

    /* ── DROPDOWN WRAPPER ── */
    .dropdown {
      display: none;
      position: fixed;
      top: var(--header-h);
      left: 50%;
      transform: translateX(-50%);
      background: var(--white);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      animation: dropIn 0.22s ease;
      z-index: 999;
    }

    .nav-item.active .dropdown {
      display: flex;
      flex-direction: column;
    }

    @keyframes dropIn {
      from {
        opacity: 0;
        transform: translateX(-50%) translateY(-8px);
      }

      to {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
      }
    }

    /* ── DROPDOWN TOP (scrollable) ── */
    .dd-top {
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: var(--gray-300) transparent;
    }

    .dd-top::-webkit-scrollbar {
      width: 5px;
    }

    .dd-top::-webkit-scrollbar-thumb {
      background: var(--gray-300);
      border-radius: 4px;
    }

    /* ── DROPDOWN BOTTOM ── */
    .dd-bottom {
      border-top: 1px solid var(--gray-100);
      background: var(--offwhite);
      padding: 14px 24px;
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      flex-shrink: 0;
    }

    .dd-bottom-item {
      display: flex;
      align-items: center;
      gap: 7px;
      padding: 7px 14px;
      background: var(--white);
      border: 1px solid var(--gray-100);
      border-radius: 8px;
      font-size: 13px;
      font-weight: 500;
      color: var(--gray-700);
      cursor: pointer;
      transition: border-color 0.18s, color 0.18s, box-shadow 0.18s;
      text-decoration: none;
    }

    .dd-bottom-item:hover {
      border-color: var(--blue-light);
      color: var(--blue);
      box-shadow: 0 2px 8px rgba(26, 86, 219, 0.09);
    }

    .dd-bottom-item .bi {
      font-size: 14px;
    }

    /* ════════════════════════════
     DROPDOWN 1 – PRODUCTS
  ═══════════════════════════ */
    #dd-products {
      width: 820px;
    }

    #dd-products .dd-top {
      max-height: 380px;
      padding: 24px;
    }

    .products-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .cat-card {
      background: var(--offwhite);
      border: 1px solid var(--gray-100);
      border-radius: 10px;
      padding: 16px 18px;
      transition: box-shadow 0.18s, border-color 0.18s;
    }

    .cat-card:hover {
      border-color: var(--blue-light);
      box-shadow: 0 4px 18px rgba(26, 86, 219, 0.08);
    }

    .cat-title {
      font-family: 'Syne', sans-serif;
      font-weight: 700;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      color: var(--blue);
      margin-bottom: 10px;
      padding-bottom: 8px;
      border-bottom: 2px solid var(--blue-light);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .cat-title .dot {
      width: 6px;
      height: 6px;
      background: var(--teal);
      border-radius: 50%;
      flex-shrink: 0;
    }

    .cat-items {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 2px;
    }

    .cat-items li a {
      display: block;
      font-size: 12.5px;
      color: var(--gray-700);
      font-weight: 400;
      padding: 3px 0;
      text-decoration: none;
      transition: color 0.15s, padding-left 0.15s;
    }

    .cat-items li a:hover {
      color: var(--blue);
      padding-left: 6px;
    }

    /* Machine card – single item */
    .cat-card.single .cat-items li a {
      font-size: 13.5px;
      font-weight: 500;
      color: var(--navy);
    }

    .cat-card.single .cat-items li a:hover {
      color: var(--blue);
    }

    /* ════════════════════════════
     DROPDOWN 2 – INDUSTRIES
  ═══════════════════════════ */
    #dd-industries {
      width: 600px;
    }

    #dd-industries .dd-top {
      max-height: 380px;
      padding: 24px;
    }

    .industries-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
    }

    .ind-card {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 14px 12px;
      background: var(--offwhite);
      border: 1px solid var(--gray-100);
      border-radius: 10px;
      text-align: center;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.18s, border-color 0.18s, transform 0.18s;
    }

    .ind-card:hover {
      background: var(--white);
      border-color: var(--blue-light);
      transform: translateY(-2px);
      box-shadow: 0 4px 14px rgba(26, 86, 219, 0.1);
    }

    .ind-name {
      font-size: 12.5px;
      font-weight: 500;
      color: var(--gray-700);
      line-height: 1.3;
      text-align: left;
    }

    .ind-card:hover .ind-name {
      color: var(--blue);
    }

    /* ════════════════════════════
     DROPDOWN 3 – RESOURCES
  ═══════════════════════════ */
    #dd-resources {
      width: 380px;
    }

    #dd-resources .dd-top {
      padding: 20px 24px;
    }

    .resources-list {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .res-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 16px;
      border-radius: 10px;
      border: 1px solid var(--gray-100);
      background: var(--offwhite);
      text-decoration: none;
      transition: background 0.18s, border-color 0.18s;
      cursor: pointer;
    }

    .res-item:hover {
      background: var(--white);
      border-color: var(--blue-light);
    }

    .res-title {
      font-size: 13.5px;
      font-weight: 500;
      color: var(--gray-700);
    }

    .res-item:hover .res-title {
      color: var(--blue);
    }

    .res-arrow {
      font-size: 14px;
      color: var(--gray-300);
      transition: color 0.18s, transform 0.18s;
    }

    .res-item:hover .res-arrow {
      color: var(--blue);
      transform: translateX(3px);
    }

        /* ── OVERLAY ── */
    #overlay {
      display: none;
      position: fixed;
      inset: 0;
      top: var(--header-h);
      z-index: 998;
    }

    #overlay.active {
      display: block;
    }
</style>

<div class="desktop_header_wrapper">
      <!-- LOGO -->
        <a href="{{ url('/') }}">
            <img loading="lazy" src="{{ asset('public/newpublic/images/head-logo.svg') }}" alt="mmp" class="img-fluid logo_white">
            <img loading="lazy" src="{{ asset('public/newpublic/images/head-logo-blue.svg') }}" alt="mmp" class="img-fluid logo_blue">
        </a>

      <!-- NAV -->
      <nav>
        <!-- about -->
        <div class="nav-item">
          <div class="nav-link">
            <a href="{{ route('about') }}">About</a>
          </div>
        </div>
        <!-- contact -->
        <div class="nav-item">
          <div class="nav-link">
            <a href="{{ route('contact') }}">Contact Us</a>
          </div>
        </div>
        <!-- Products -->
        <div class="nav-item" id="nav-products">
          <div class="nav-link">
            Products
            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>
          <div class="dropdown" id="dd-products">
            <div class="dd-top">
              <div class="products-grid">

                <!-- 1: Water Filtration -->
                <div class="cat-card">
                  <div class="cat-title"><span class="dot"></span>Water Filtration</div>
                  <ul class="cat-items">
                    <li><a href="#">Melt Blown Filter Cartridges</a></li>
                    <li><a href="#">Wound Filter Cartridges</a></li>
                    <li><a href="#">Lagoon Melt Blown Filter Cartridges</a></li>
                    <li><a href="#">Oceanic Melt Blown Filter Cartridges</a></li>
                    <li><a href="#">Core for Filter Cartridge</a></li>
                    <li><a href="#">Wound Filter Production Machine</a></li>
                    <li><a href="#">PP Pleated Filter Cartridges</a></li>
                    <li><a href="#">PP Spun Filter</a></li>
                    <li><a href="#">Resin Bonded Filter Cartridges</a></li>
                    <li><a href="#">Grooved Resin Bonded Filter Cartridges</a></li>
                    <li><a href="#">Sediment Filter</a></li>
                    <li><a href="#">Anti-Microbial Wound Filter Cartridge</a></li>
                    <li><a href="#">High Flow Pleated Filter</a></li>
                    <li><a href="#">PPH One Piece Filter Housing</a></li>
                    <li><a href="#">Liquid Filter Bag</a></li>
                  </ul>
                </div>

                <!-- 2: Air Filtration -->
                <div class="cat-card">
                  <div class="cat-title"><span class="dot"></span>Air Filtration</div>
                  <ul class="cat-items">
                    <li><a href="#">Pleated Filter Bags</a></li>
                    <li><a href="#">Pleated Cartridges</a></li>
                    <li><a href="#">Dust Collector Filter Bag</a></li>
                    <li><a href="#">Dust Collector Filter Cages</a></li>
                    <li><a href="#">Filter Bags</a></li>
                  </ul>
                </div>

                <!-- 3: Filtration Yarn -->
                <div class="cat-card">
                  <div class="cat-title"><span class="dot"></span>Filtration Yarn</div>
                  <ul class="cat-items">
                    <li><a href="#">Polypropylene Yarn</a></li>
                    <li><a href="#">Anti-Microbial Polypropylene Filtration Yarn</a></li>
                    <li><a href="#">Absorbent Bleached Cotton Yarn</a></li>
                    <li><a href="#">Zero Foaming Polypropylene Yarn</a></li>
                  </ul>
                </div>

                <!-- 4: Machine (single item) -->
                <div class="cat-card single">
                  <div class="cat-title"><span class="dot"></span>Wound Filter Cartridge Machine</div>
                  <ul class="cat-items">
                    <li><a href="#">Wound Filter Cartridge Machine</a></li>
                  </ul>
                </div>

              </div>
            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="#">Certifications</a>
              <a class="dd-bottom-item" href="#">Videos</a>
              <a class="dd-bottom-item" href="#">Partnership</a>
            </div>
          </div>
        </div>

        <!-- Industries -->
        <div class="nav-item" id="nav-industries">
          <div class="nav-link">
            Industries
            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>
          <div class="dropdown" id="dd-industries">
            <div class="dd-top">
              <div class="industries-grid">
                <a class="ind-card" href="#">
                  <div class="ind-name">Pharma Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Chemical Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Water Treatment Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Food and Beverage Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Textile Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Dairy Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Oil and Gas Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Cement Industry</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Power Plant Industry</div>
                </a>
              </div>
            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="#">Certifications</a>
              <a class="dd-bottom-item" href="#">Videos</a>
              <a class="dd-bottom-item" href="#">Partnership</a>
            </div>
          </div>
        </div>

        <!-- Resources -->
        <div class="nav-item" id="nav-resources">
          <div class="nav-link">
            Resources
            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>
          <div class="dropdown" id="dd-resources">
            <div class="dd-top">
              <div class="industries-grid">
                <a class="ind-card" href="#">
                  <div class="ind-name">Blogs</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Events</div>
                </a>
                <a class="ind-card" href="#">
                  <div class="ind-name">Case Study</div>
                </a>
              </div>
            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="#">Certifications</a>
              <a class="dd-bottom-item" href="#">Videos</a>
              <a class="dd-bottom-item" href="#">Partnership</a>
            </div>
          </div>
        </div>
      </nav>
    </div>