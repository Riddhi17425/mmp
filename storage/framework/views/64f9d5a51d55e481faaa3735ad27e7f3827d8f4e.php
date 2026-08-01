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

    @keyframes  dropIn {
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
        <a href="<?php echo e(url('/')); ?>">
            <img loading="lazy" src="<?php echo e(asset('public/newpublic/images/head-logo.svg')); ?>" alt="mmp" class="img-fluid logo_white">
            <img loading="lazy" src="<?php echo e(asset('public/newpublic/images/head-logo-blue.svg')); ?>" alt="mmp" class="img-fluid logo_blue">
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
          <?php

        $categorys = \App\Models\Category::with('products')
            ->where('is_delete', '0')
            ->get();
            
        ?>
          <div class="dropdown" id="dd-products">
            <div class="dd-top">
              <div class="products-grid">

                <!-- 1: Water Filtration -->
                <!--<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                <!--<div class="cat-card">-->
                <!--    <div class="cat-title"><a href="<?php echo e(url('product/' . $item->category_url)); ?>"><?php echo e($item->category_name); ?></a></div>  -->
                <!--    <ul class="cat-items">-->
                <!--        <?php $__currentLoopData = $item->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                <!--            <?php if(strtolower(trim($product_item->product_name)) == 'wound filter cartridge machine'): ?>-->
                <!--              <li><a href="<?php echo e(route('woundfiltercartridgemachine')); ?>"> -->
                <!--                    <?php echo e($product_item->product_name); ?></a></li>-->
                <!--            <?php else: ?>-->
                <!--              <li><a href="<?php echo e(route('productdetail' , ['url'=>$product_item->producturl])); ?>">-->
                <!--                    <?php echo e($product_item->product_name); ?></a></li>-->
                <!--            <?php endif; ?>-->
                <!--        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                <!--    </ul>-->
                <!--  -->
                <!--</div>-->
                <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $categoryName = strtolower(trim($item->category_name));
                ?>
                    <div class="cat-card">
                        <div class="cat-title">
                            <a href="<?php echo e(url('product/' . $item->category_url)); ?>">
                                <?php echo e($item->category_name); ?>

                            </a>
                        </div>
                        
                        <ul class="cat-items <?php echo e(str_contains($categoryName,'water') ? 'water-menu-grid' : ''); ?>">
                            <?php $__currentLoopData = $item->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $productName = strtolower(trim($product_item->product_name));
                                ?>
                
                                
                                <?php if($productName == 'wound filter cartridge machine'): ?>
                                    <?php continue; ?>
                                <?php endif; ?>
                
                                <li>
                                    <a href="<?php echo e(route('productdetail' , ['url'=>$product_item->producturl])); ?>">
                                        <?php echo e($product_item->product_name); ?>

                                    </a>
                                </li>
                                
                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->category_url == 'air-filter-cartridges'): ?>
                                <li>
                                    <a href="<?php echo e(url('/product-detail/liquid-filter-bags')); ?>">
                                        Liquid Filter Bag
                                    </a>
                                </li>
                            <?php endif; ?>
                
                            
                        </ul>
                        
                        
                            <?php if(str_contains($categoryName,'air filtration')): ?>
                                <div class="cat-card mt-2">
                                    <div class="cat-title">
                                        Wound Filter Machines
                                    </div>
                                </div>
                               
                                    <ul class="cat-items">
                                        <li>
                                        <a href="<?php echo e(route('productdetail' , ['url'=>'wound-filter-machine'])); ?>">
                                            Wound Filter Production Machine
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('woundfiltercartridgemachine')); ?>">
                                            Wound Filter Cartridges Machine
                                        </a>
                                    </li>
                                    </ul>
                               
                            <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--<div class="cat-card">-->
                <!--    <div class="cat-title">-->
                <!--        <a href="<?php echo e(route('woundfiltercartridgemachine')); ?>">Wound Filter Cartridge Machine</a>-->
                <!--    </div>-->
                <!--</div>-->
                
                

              </div>
            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="<?php echo e(route('certifications')); ?>">  Certifications</a>
              <a class="dd-bottom-item" href="<?php echo e(route('machinery')); ?>"> Videos</a>
              <a class="dd-bottom-item" href="<?php echo e(route('partnership')); ?>"> Partnership</a>
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
               
                    <li><a class="ind-card" href="<?php echo e(url('/pharma-industry')); ?>">
                  <div class="ind-name"> Pharma Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="<?php echo e(url('/chemical-industry')); ?>">
                  <div class="ind-name">Chemical Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="<?php echo e(url('/water-treatment-industry')); ?>">
                  <div class="ind-name"> Water Treatment Industry</div>
                </a></li>
                    <li><a class="ind-card" href="<?php echo e(url('/food-and-beverage-industry')); ?>">
                  <div class="ind-name"> Food and Beverage Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="<?php echo e(url('/textile-industry')); ?>">
                  <div class="ind-name"> Textile Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="<?php echo e(url('/dairy-industry')); ?>">
                  <div class="ind-name"> Dairy Industry</div>
                </a></li>
                    <li><a class="ind-card" href="<?php echo e(url('/oil-and-gas-industry')); ?>">
                  <div class="ind-name"> Oil and Gas Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="<?php echo e(url('/cement-industry')); ?>">
                  <div class="ind-name"> Cement Industry</div>
                </a></li>
                    <li> <a class="ind-card" href="<?php echo e(url('/power-plant-industry')); ?>">
                  <div class="ind-name"> Power Plant Industry</div>
                </a></li>
                  
                </ul>

            </div>
            <!-- Bottom bar -->
            <div class="dd-bottom">
              <a class="dd-bottom-item" href="<?php echo e(route('certifications')); ?>">  Certifications</a>
              <a class="dd-bottom-item" href="<?php echo e(route('machinery')); ?>"> Videos</a>
              <a class="dd-bottom-item" href="<?php echo e(route('partnership')); ?>"> Partnership</a>
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
               <li> <a class="ind-card" href="<?php echo e(route('blog')); ?>">
                  <div class="ind-name"> Blogs</div>
                </a></li>
               <li> <a class="ind-card" href="<?php echo e(route('event')); ?>">
                  <div class="ind-name"> Events</div>
                </a></li>
               <li> <a class="ind-card" href="<?php echo e(route('casestudy')); ?>">
                  <div class="ind-name"> Case Study</div>
                </a></li>
               
              </ul>
            </div>
          </div>
        </div>
        
        <!-- about -->
        <div class="dh_nav-item">
          <div class="dh_nav-link">
             <a href="<?php echo e(route('about')); ?>" >    About </a>
          </div>
        </div>
        
        <!-- contact -->
        <div class="dh_nav-item">
          <div class="dh_nav-link">
           <a href="<?php echo e(route('contact')); ?>"> Contact</a>
          </div>
        </div>
      </nav>
    </div><?php /**PATH C:\Intelliworkz\mmp\resources\views/layouts/new_frontheader.blade.php ENDPATH**/ ?>