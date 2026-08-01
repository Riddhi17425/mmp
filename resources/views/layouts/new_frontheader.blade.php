  <style>
  :root {
      --navy: #0b1f3a;
      --blue: #17367f;
      --blue-light: #17367f8f;
      --teal: #0d9488;
      --offwhite: #f5f7fa;
      --gray-100: #e8edf3;
      --gray-300: #b0bac8;
      --gray-500: #6b7a90;
      --gray-700: #374151;
      --white: #ffffff;
      --accent: #f59e0b;
      --header-h: 72px;
      --radius: 12px;
      --shadow: 0 20px 60px rgba(11, 31, 58, 0.13);
    }
  .desktop_header_wrapper {
      display: flex;
      align-items: center;
      /*gap: 32px;*/
      gap: 100px;
    justify-content: space-between;
    width: 70%;
    }

   /* ── NAV ── */
    .dh_nav {
      display: flex;
      align-items: center;
      gap: 10px;
      /*flex: 1;*/
    }

    .dh_nav-item {
      position: relative;
      padding:9px 0;
    }

    .dh_nav-link {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 8px 16px;
      color: white;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      border-radius: 8px;
      transition: background 0.2s, color 0.2s;
      user-select: none;
      white-space: nowrap;
    }
    .is-glass .dh_nav-link{color:black;}
    /*.dh_nav-link:hover,*/
    /*.dh_nav-item:hover>.dh_nav-link {*/
    /*  background: rgba(255, 255, 255, 0.08);*/
    /*  color: #fff;*/
    /*}*/

    .dh_nav-link .chevron {
      width: 14px;
      height: 14px;
      opacity: 0.55;
      transition: transform 0.25s;
    }

    .dh_nav-item:hover>.dh_nav-link .chevron {
      transform: rotate(180deg);
      opacity: 1;
    }

    /* ── DROPDOWN WRAPPER ── */
    .dropdown {
      display: none;
      position: fixed;
      top: 75px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--white);
      box-shadow: var(--shadow);
      overflow: hidden;
      animation: dropIn 0.3s ease;
      z-index: 999;
    }

    .dh_nav-item:hover>.dropdown,
    .dropdown:hover {
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
      /*overflow-y: auto;*/
      /*scrollbar-width: thin;*/
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
      padding: 16px 16px 16px;
      /*display: flex;*/
      /*flex-wrap: wrap;*/
      /*gap: 8px;*/
      /*justify-content: space-between;*/
      display:grid;
      grid-template-columns: 1fr 1fr 1fr;
      padding: 16px 14px;
      flex-shrink: 0;
      border-top: 1px solid var(--blue-light);
    }

    .dd-bottom-item {
      /*display: flex;*/
      /*align-items: center;*/
      /*gap: 7px;*/
      display:grid;
      grid-template-columns: 1fr 1fr 1fr;
      padding: 0px 14px;
      font-size: 12px;
      font-weight: 700;
     
      cursor: pointer;
      transition: border-color 0.18s, color 0.18s, box-shadow 0.18s;
      text-decoration: none;
      text-align:right;
     
      text-transform: uppercase;
      letter-spacing: 0.8px;
      color: var(--blue);
    
      display: flex;
      align-items: center;
      gap: 6px;
      
    }

    .dd-bottom-item:hover {
      color: var(--blue);
    }

    .dd-bottom-item .bi {
      font-size: 14px;
    }

    /* ════════════════════════════
     DROPDOWN 1 – PRODUCTS
  ═══════════════════════════ */
    #dd-products {
      width: 1150px;
    }
    #dd-products .dd-bottom-item {
      padding:0px;
    }

    #dd-products .dd-top {
      max-height: 380px;
      padding: 16px 16px 24px;
    }

    .products-grid {
      display: grid;
      grid-template-columns:  2fr 1fr 1fr;
      gap: 20px;
    }

    .cat-card {
      /*background: var(--offwhite);*/
      /*border: 1px solid var(--gray-100);*/
      /*border-radius: 10px;*/
      /*padding: 0px 16px;*/
      /*transition: box-shadow 0.18s, border-color 0.18s;*/
    }

    .cat-card:hover {
      /*border-color: var(--blue-light);*/
      /*box-shadow: 0 4px 18px rgba(26, 86, 219, 0.08);*/
    }

    .cat-title {
      /*font-family: 'Syne', sans-serif;*/
      font-weight: 700;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      color: var(--blue);
      margin-bottom: 10px;
      padding-bottom: 8px;
      border-bottom: 1px solid var(--blue-light);
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .cat-items {
      /*padding:0;*/
      /*list-style: none;*/
      display: flex;
      flex-direction: column;
      gap: 2px;
     
    }
    
    .cat-items li,
    .industries-grid li
    {
      list-style: disc;
    }
    
    .cat-items li:marker
    {
      background-color: var(--blue);
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
    
    .ind-name,
    .cat-items li a
    {
      display:flex;
      align-items: center;
      gap:4px 
    }
    

    .cat-items li a:hover {
      color: var(--blue);
      /*padding-left: 6px;*/
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
      width: 630px;
    }

    #dd-industries .dd-top {
      max-height: 380px;
      padding: 16px;
    }

    .industries-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      /*gap: 10px;*/
    }

    .ind-card {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 7px 0;
      border-radius: 10px;
      text-align: center;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.18s, border-color 0.18s, transform 0.18s;
    }

    .ind-card:hover {
      /*padding-left: 6px;*/
      /*box-shadow: 0 4px 14px rgba(26, 86, 219, 0.1);*/
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
    width: 600px;
    position: absolute;
    top: 55px;
    right: -50px;
}

    #dd-resources .dd-top {
      padding:16px;
    }
    #dd-resources .ind-card {
      padding:0px;
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
    
    header.is-white .dh_nav-link 
    {
           color: var(--111-black); 
    }
    
    .water-menu-grid{
        display:grid !important;
        grid-template-columns:repeat(2,minmax(180px,1fr));
        gap:0 30px;
    }
    
    /*.water-menu-grid li{*/
    /*    width:100%;*/
    /*    display:block;*/
    /*}*/
    
    
</style>

<div class="desktop_header_wrapper">
      <!-- LOGO -->
      <div class="logo">
        <a href="{{ url('/') }}">
            <img loading="lazy" src="{{ asset('public/newpublic/images/head-logo.svg') }}" alt="mmp" class="img-fluid logo_white">
            <img loading="lazy" src="{{ asset('public/newpublic/images/head-logo-blue.svg') }}" alt="mmp" class="img-fluid logo_blue">
        </a>
    </div>
      <!-- NAV -->
      <nav class="dh_nav">
        
        <!-- Products -->
        <div class="dh_nav-item" id="nav-products">
          <div class="dh_nav-link">
            Products
             <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M6 9l6 6 6-6" />
            </svg>
           
          </div>
          @php

        $categorys = \App\Models\Category::with('products')
            ->where('is_delete', '0')
            ->get();
            
        @endphp
          <div class="dropdown" id="dd-products">
            <div class="dd-top">
              <div class="products-grid">

                <!-- 1: Water Filtration -->
                <!--@foreach ($categorys as $item)-->
                <!--<div class="cat-card">-->
                <!--    <div class="cat-title"><a href="{{ url('product/' . $item->category_url) }}">{{ $item->category_name }}</a></div>  -->
                <!--    <ul class="cat-items">-->
                <!--        @foreach ($item->products as $product_item)-->
                <!--            @if(strtolower(trim($product_item->product_name)) == 'wound filter cartridge machine')-->
                <!--              <li><a href="{{ route('woundfiltercartridgemachine') }}"> -->
                <!--                    {{ $product_item->product_name }}</a></li>-->
                <!--            @else-->
                <!--              <li><a href="{{ route('productdetail' , ['url'=>$product_item->producturl]) }}">-->
                <!--                    {{ $product_item->product_name }}</a></li>-->
                <!--            @endif-->
                <!--        @endforeach-->
                <!--    </ul>-->
                <!--  {{-- <ul class="cat-items">-->
                    
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg> Wound Filter Cartridges</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Lagoon Melt Blown Filter Cartridges</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Oceanic Melt Blown Filter Cartridges</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg> Core for Filter Cartridge</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Wound Filter Production Machine</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg> PP Pleated Filter Cartridges</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>PP Spun Filter</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Resin Bonded Filter Cartridges</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg> Grooved Resin Bonded Filter Cartridges</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Sediment Filter</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Anti-Microbial Wound Filter Cartridge</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>High Flow Pleated Filter</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>PPH One Piece Filter Housing</a></li>-->
                <!--    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>-->
                <!--                    </svg>Liquid Filter Bag</a></li>-->
                <!--  </ul> --}}-->
                <!--</div>-->
                <!-- @endforeach-->
                @foreach ($categorys as $item)
                @php
                    $categoryName = strtolower(trim($item->category_name));
                @endphp
                    <div class="cat-card">
                        <div class="cat-title">
                            <a href="{{ url('product/' . $item->category_url) }}">
                                {{ $item->category_name }}
                            </a>
                        </div>
                        {{-- 2 COLUMN ONLY FOR WATER FILTRATION --}}
                        <ul class="cat-items {{ str_contains($categoryName,'water') ? 'water-menu-grid' : '' }}">
                            @foreach ($item->products as $product_item)
                                @php
                                    $productName = strtolower(trim($product_item->product_name));
                                @endphp
                
                                {{-- SKIP MACHINE FROM ALL CATEGORIES --}}
                                @if($productName == 'wound filter cartridge machine')
                                    @continue
                                @endif
                
                                <li>
                                    <a href="{{ route('productdetail' , ['url'=>$product_item->producturl]) }}">
                                        {{ $product_item->product_name }}
                                    </a>
                                </li>
                                
                
                            @endforeach
                            @if($item->category_url == 'air-filter-cartridges')
                                <li>
                                    <a href="{{ url('/product-detail/liquid-filter-bags') }}">
                                        Liquid Filter Bag
                                    </a>
                                </li>
                            @endif
                
                            
                        </ul>
                        
                        {{-- ADD MACHINE UNDER FILTRATION YARN --}}
                            @if(str_contains($categoryName,'air filtration'))
                                <div class="cat-card mt-2">
                                    <div class="cat-title">
                                        Wound Filter Machines
                                    </div>
                                </div>
                               
                                    <ul class="cat-items">
                                        <li>
                                        <a href="{{ route('productdetail' , ['url'=>'wound-filter-machine']) }}">
                                            Wound Filter Production Machine
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('woundfiltercartridgemachine') }}">
                                            Wound Filter Cartridges Machine
                                        </a>
                                    </li>
                                    </ul>
                               
                            @endif
                    </div>
                @endforeach
                <!--<div class="cat-card">-->
                <!--    <div class="cat-title">-->
                <!--        <a href="{{ route('woundfiltercartridgemachine') }}">Wound Filter Cartridge Machine</a>-->
                <!--    </div>-->
                <!--</div>-->
                
                {{-- <!-- 2: Air Filtration -->
                <div class="cat-card">
                  <div class="cat-title">Air Filtration</div>
                  <ul class="cat-items">
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg> Pleated Filter Bags</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg>Pleated Cartridges</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg> Dust Collector Filter Bag</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg>Dust Collector Filter Cages</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg> Filter Bags</a></li>
                  </ul>
                </div>

                <!-- 3: Filtration Yarn -->
                <div class="cat-card">
                  <div class="cat-title">Filtration Yarn</div>
                  <ul class="cat-items">
                    <li><a href="#"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg>Polypropylene Yarn</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg>Anti-Microbial Polypropylene Filtration Yarn</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg> Absorbent Bleached Cotton Yarn</a></li>
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg>Zero Foaming Polypropylene Yarn</a></li>
                  </ul>
                </div>

                <!-- 4: Machine (single item) -->
                <div class="cat-card ">
                  <div class="cat-title">Wound Filter Cartridge Machine</div>
                  <ul class="cat-items">
                    <li><a href="#"> <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.03657 0.156162C0.941317 0.0705125 0.827397 0.0177073 0.707732 0.00373388C0.588062 -0.0102395 0.467432 0.015178 0.359516 0.0771046C0.251601 0.139031 0.160719 0.234988 0.097175 0.354097C0.0336309 0.473206 -3.31233e-05 0.610698 2.44559e-08 0.750987V9.24852C2.44559e-08 9.53443 0.139266 9.79336 0.35952 9.92332C0.579346 10.0493 0.843736 10.0183 1.03657 9.84334L5.75018 5.59458C5.82808 5.5244 5.89116 5.43422 5.93444 5.3311C5.97776 5.22798 6.00021 5.11462 6 4.99975C5.99987 4.88498 5.97729 4.77175 5.93401 4.66867C5.89073 4.5656 5.82787 4.47539 5.75018 4.40493L1.03657 0.156162Z" fill="#17367F"/>
                                    </svg> Wound Filter Cartridge Machine</a></li>
                  </ul>
                </div> --}}

              </div>
            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="{{ route('certifications') }}">  Certifications</a>
              <a class="dd-bottom-item" href="{{ route('machinery') }}"> Videos</a>
              <a class="dd-bottom-item" href="{{ route('partnership') }}"> Partnership</a>
            </div>
          </div>
        </div>

        <!-- Industries -->
        <div class="dh_nav-item" id="nav-industries">
          <div class="dh_nav-link">
            Industries
             <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M6 9l6 6 6-6" />
            </svg>
            
          </div>
          <div class="dropdown" id="dd-industries">
            <div class="dd-top">
              <ul class="industries-grid">
               
                    <li><a class="ind-card" href="{{ url('/pharma-industry') }}">
                  <div class="ind-name"> Pharma Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="{{ url('/chemical-industry') }}">
                  <div class="ind-name">Chemical Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="{{ url('/water-treatment-industry') }}">
                  <div class="ind-name"> Water Treatment Industry</div>
                </a></li>
                    <li><a class="ind-card" href="{{ url('/food-and-beverage-industry') }}">
                  <div class="ind-name"> Food and Beverage Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="{{ url('/textile-industry') }}">
                  <div class="ind-name"> Textile Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="{{ url('/dairy-industry') }}">
                  <div class="ind-name"> Dairy Industry</div>
                </a></li>
                    <li><a class="ind-card" href="{{ url('/oil-and-gas-industry') }}">
                  <div class="ind-name"> Oil and Gas Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="{{ url('/cement-industry') }}">
                  <div class="ind-name"> Cement Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="{{ url('/power-plant-industry') }}">
                  <div class="ind-name"> Power Plant Industry</div>
                </a></li>
                  
                </ul>

            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="{{ route('certifications') }}">  Certifications</a>
              <a class="dd-bottom-item" href="{{ route('machinery') }}"> Videos</a>
              <a class="dd-bottom-item" href="{{ route('partnership') }}"> Partnership</a>
            </div>
          </div>
        </div>

        <!-- Resources -->
        <div class="dh_nav-item" id="nav-resources">
          <div class="dh_nav-link">
            Resources
            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>
          <div class="dropdown" id="dd-resources">
            <div class="dd-top">
           <ul class="industries-grid mb-0">
               <li> <a class="ind-card" href="{{ route('blog') }}">
                  <div class="ind-name"> Blogs</div>
                </a></li>
               <li> <a class="ind-card" href="{{ route('event') }}">
                  <div class="ind-name"> Events</div>
                </a></li>
               <li> <a class="ind-card" href="{{ route('casestudy') }}">
                  <div class="ind-name"> Case Study</div>
                </a></li>
               
              </ul>
            </div>
          </div>
        </div>
        
        <!-- about -->
        <div class="dh_nav-item">
          <div class="dh_nav-link">
             <a href="{{ route('about') }}" >    About </a>
          </div>
        </div>
        
        <!-- contact -->
        <div class="dh_nav-item">
          <div class="dh_nav-link">
           <a href="{{ route('contact') }}"> Contact</a>
          </div>
        </div>
      </nav>
    </div>