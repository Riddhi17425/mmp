</main>
  <?php
    $category = DB::select(DB::raw("SELECT id,category_name, category_url from categories WHERE is_delete='0'"));
  ?>
    <?php
    $categories = DB::table('categories')
        ->leftJoin('product', function($join) {
            $join->on('categories.id', '=', 'product.category_id')
                 ->where('product.is_delete', '=', '0');
        })
        ->where('categories.is_delete', '0')
        ->select('categories.id as category_id', 'categories.category_name','categories.category_url', 'product.id as product_id', 'product.product_name', 'product.producturl')
        ->get()
        ->groupBy('category_id');
    ?>
   <?php
      $category = DB::select(DB::raw("SELECT id,category_name, category_url from categories WHERE is_delete='0'"));
      $product = DB::select(DB::raw("SELECT id,product_name from product WHERE is_delete='0'"));
    ?>
<footer class="mt-100">
    <div class="top_footer_wrapper">
        <div class="ym-container">
            <div class="top_footer_grid">
                <div>
                    <h4 class="ft_head">Links</h4>
                    <ul class="ft_list">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(route('certifications')); ?>">Certifications</a></li>
                        <li><a href="<?php echo e(route('partnership')); ?>">Partnership Opportunities</a></li>
                        <li><a href="<?php echo e(asset('public/front/images/mmp-master-brochure-2025.pdf')); ?>" target="_blank">E-Catalogue</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="ft_head">Products</h4>
                    <ul class="ft_list">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_id => $categoryGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $category = $categoryGroup->first();
                            $catName = $category->category_name;
                            $catUrl = $catUrl = url('product/' . $category->category_url);
                        ?>
                        <li><a href="<?php echo e($catUrl); ?>"><?php echo e($catName); ?></a></li>
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('woundfiltercartridgemachine')); ?>">Wound Filter Cartridge Machine</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="ft_head">Resources</h4>
                    <ul class="ft_list">
                        <li><a href="<?php echo e(url('blogs')); ?>">Blogs</a></li>
                        <li><a href="<?php echo e(route('event')); ?>">Events</a></li>
                        <li><a href="<?php echo e(route('casestudy')); ?>">Case Studies</a></li>
                        <li><a href="<?php echo e(route('machinery')); ?>">Videos</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="ft_head">Industries</h4>
                    <ul class="ft_list">
                        <li><a href="<?php echo e(url('/pharma-industry')); ?>">Pharma Industry</a></li>
                        <li><a href="<?php echo e(url('/chemical-industry')); ?>">Chemical Industry</a></li>
                        <li><a href="<?php echo e(url('/water-treatment-industry')); ?>">Water Treatment Industry</a></li>
                        <li><a href="<?php echo e(url('/food-and-beverage-industry')); ?>">Food & Beverage Industry</a></li>
                        <li><a href="<?php echo e(url('/textile-industry')); ?>">Textile Industry</a></li>
                        <li><a href="<?php echo e(url('/dairy-industry')); ?>">Dairy Industry</a></li>
                        <li><a href="<?php echo e(url('/oil-and-gas-industry')); ?>" >Oil & Gas Industry</a></li>
                        <li><a href="<?php echo e(url('/cement-industry')); ?>" >Cement Industry</a></li>
                        <li><a href="<?php echo e(url('/power-plant-industry')); ?>" >Power Plant Industry</a></li>
                    </ul>

                </div>
                <div>
                    <h4 class="ft_head">Get in Touch</h4>
                    <ul class="ft_list">
                        <li>
                            <div class="ft_link">
                                <svg width="16" height="21" viewBox="0 0 16 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.58427 2.56573C4.0061 1.18857 5.71873 0.5 7.72222 0.5C9.72571 0.5 11.4303 1.18074 12.8359 2.54225C14.2416 3.90376 14.9444 5.55476 14.9444 7.49531C14.9444 8.46558 14.694 9.57668 14.1931 10.8286C13.6923 12.0806 13.0864 13.2543 12.3755 14.3498C11.6645 15.4452 10.9617 16.4703 10.267 17.4249C9.57221 18.3795 8.98248 19.1385 8.49776 19.7019L7.72222 20.5C7.52834 20.2809 7.26982 19.9914 6.94668 19.6315C6.62354 19.2715 6.04189 18.5516 5.20171 17.4718C4.36154 16.392 3.6264 15.3435 2.99627 14.3263C2.36614 13.3091 1.79257 12.1588 1.27554 10.8756C0.758511 9.59232 0.5 8.46558 0.5 7.49531C0.5 5.55476 1.19475 3.91159 2.58427 2.56573Z"
                                        stroke="#00A3FF" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M8.83333 7.72222C8.83333 8.33587 8.33587 8.83333 7.72222 8.83333C7.10857 8.83333 6.61111 8.33587 6.61111 7.72222C6.61111 7.10857 7.10857 6.61111 7.72222 6.61111C8.33587 6.61111 8.83333 7.10857 8.83333 7.72222Z"
                                        stroke="#00A3FF" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <a style="flex:1;" href="https://www.google.com/maps/search/C3-602+Anushruti+Tower,+SG+Road,+Thaltej,+Ahmedabad+%E2%80%93+380059+Gujarat,+India/@23.053608,72.5150764,17z/data=!3m1!4b1?entry=ttu">C3-602 Anushruti Tower,
                                    SG Road, Thaltej,
                                    Ahmedabad – 380059
                                    Gujarat, India</a>
                            </div>
                        </li>
                        <li>
                            <div class="ft_link">
                                <svg width="21" height="17" viewBox="0 0 21 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.5 3.83333L10.2042 10.3028C10.3833 10.4222 10.6167 10.4222 10.7958 10.3028L20.5 3.83333M1.03333 16.0556H19.9667C20.2612 16.0556 20.5 15.8168 20.5 15.5222V1.03333C20.5 0.738781 20.2612 0.5 19.9667 0.5H1.03333C0.738781 0.5 0.5 0.738781 0.5 1.03333V15.5222C0.5 15.8168 0.738781 16.0556 1.03333 16.0556Z"
                                        stroke="#00A3FF" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <a href="mailto:sales@mmpfilter.com">sales@mmpfilter.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="ft_link">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.500205 2.07288C0.764308 11.7647 9.23532 20.2357 18.9271 20.4998C19.1973 20.5072 19.4308 20.3154 19.4839 20.0504L20.4889 15.0249C20.5391 14.7742 20.4152 14.5209 20.1865 14.4066L16.2724 12.4495C16.0273 12.327 15.7297 12.3972 15.5653 12.6164L14.2475 14.3735C14.1404 14.5162 13.973 14.6046 13.7966 14.5778C11.4174 14.2165 6.78353 9.58262 6.42219 7.20344C6.3954 7.027 6.48377 6.85959 6.62653 6.75251L8.38356 5.43474C8.60277 5.27034 8.67303 4.97269 8.55049 4.72761L6.59341 0.813454C6.47907 0.584772 6.22582 0.460912 5.97511 0.511053L0.949634 1.51615C0.684621 1.56915 0.492843 1.80272 0.500205 2.07288Z"
                                        stroke="#00A3FF" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <a href="tel:919830030614">+91 9830030614</a>
                            </div>
                        </li>
                    </ul>
                    <h4 class="ft_head ct_dealership">Contact for Dealership</h4>
                    <ul class="ft_list">
                        <li>
                            <div class="ft_link">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.500205 2.07288C0.764308 11.7647 9.23532 20.2357 18.9271 20.4998C19.1973 20.5072 19.4308 20.3154 19.4839 20.0504L20.4889 15.0249C20.5391 14.7742 20.4152 14.5209 20.1865 14.4066L16.2724 12.4495C16.0273 12.327 15.7297 12.3972 15.5653 12.6164L14.2475 14.3735C14.1404 14.5162 13.973 14.6046 13.7966 14.5778C11.4174 14.2165 6.78353 9.58262 6.42219 7.20344C6.3954 7.027 6.48377 6.85959 6.62653 6.75251L8.38356 5.43474C8.60277 5.27034 8.67303 4.97269 8.55049 4.72761L6.59341 0.813454C6.47907 0.584772 6.22582 0.460912 5.97511 0.511053L0.949634 1.51615C0.684621 1.56915 0.492843 1.80272 0.500205 2.07288Z"
                                        stroke="#00A3FF" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <a href="tel:917043745709">+91 7043745709</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- MMP Globally Toggle Button -->
            <div class="mmp-globally-toggle" id="toggleButton">
                <span class="ft_head">
                    MMP Globally
                    <span class="toggle-arrow ms-2" id="toggleArrow">
                        <svg width="20" height="8" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 0.75L9.75 9.75L0.75 0.75" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </span>
            </div>
            <!-- Extended Footer (slides down like accordion) -->
            <div class="extended-footer" id="extendedFooter">
                <div class="extended-content">
                    <div class="extended-links">
                        <a href="<?php echo e(route('filter-cartridges-in-usa')); ?>">Filter Cartridges in USA</a>
                        <a href="<?php echo e(route('melt-blown-filter-cartridges-in-usa')); ?>">Melt Blown Filter Cartridges in USA</a>
                        <a href="<?php echo e(route('pp-filtration-yarn-in-usa')); ?>">PP Filtration Yarn in USA</a>
                        <a href="<?php echo e(route('wound-filter-cartridges-in-usa')); ?>">Wound Filter Cartridges in USA</a>
                        <a href="<?php echo e(route('wound-filter-cartridges-machine-in-usa')); ?>">Wound Filter Cartridges Machine in USA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ym-container">
        <div class="btm_mid_wraper">
            <div class="ft_logo">
                
                <div>
                    <img src="<?php echo e(asset('public/newpublic/images/ft_logo.svg')); ?>" alt="mmp" width="183" height="55">
                     <div class="ft_social">
                    <a href="https://www.facebook.com/mmpfiltration" target="_blank">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_382_760)">
                                <path
                                    d="M14.2436 0C22.1102 0 28.4873 6.37711 28.4873 14.2436C28.4873 21.526 23.0219 27.5311 15.9693 28.383V18.5963L19.8225 18.5963L20.6218 14.2436H15.9693V12.7042C15.9693 11.5542 16.1949 10.758 16.7124 10.2493C17.2299 9.7406 18.0394 9.51942 19.2072 9.51942C19.5028 9.51942 19.7748 9.52237 20.0162 9.52824C20.3673 9.53679 20.6535 9.55156 20.8528 9.57253V5.62681C20.7731 5.60469 20.6791 5.58257 20.5738 5.5608C20.3353 5.51147 20.0387 5.46391 19.7199 5.42216C19.0537 5.33488 18.2904 5.27288 17.7564 5.27288C15.5996 5.27288 13.9697 5.73429 12.832 6.68999C11.4589 7.8434 10.8027 9.7168 10.8027 12.3681V14.2436H7.86557V18.5963H10.8027V28.0678C4.5987 26.5286 0 20.9236 0 14.2436C0 6.37711 6.37711 0 14.2436 0Z"
                                    fill="#626262" />
                            </g>
                            <defs>
                                <clipPath id="clip0_382_760">
                                    <rect width="28.4873" height="28.4873" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </a>
                    <a href="https://www.instagram.com/mmpfiltration/" target="_blank">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.8346 8.33506C20.8913 8.3369 20.1243 7.57312 20.1224 6.62981C20.1206 5.68649 20.8844 4.91948 21.8281 4.91764C22.7719 4.9158 23.5389 5.68003 23.5407 6.62334C23.5421 7.56665 22.7783 8.33321 21.8346 8.33506Z"
                                fill="#626262" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.2573 21.5566C10.2187 21.5644 6.93796 18.297 6.93013 14.2575C6.92227 10.2189 10.1906 6.93762 14.2291 6.92978C18.2686 6.92193 21.5498 10.1912 21.5577 14.2293C21.5655 18.2689 18.2963 21.5487 14.2573 21.5566ZM14.2342 9.49619C11.6129 9.50081 9.49095 11.6306 9.49557 14.2524C9.50064 16.8747 11.6309 18.9962 14.2522 18.9911C16.8744 18.986 18.9964 16.8567 18.9913 14.2344C18.9862 11.6122 16.856 9.49112 14.2342 9.49619Z"
                                fill="#626262" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.88937 0.767352C5.79391 0.412919 6.82904 0.170167 8.34459 0.0986352C9.86386 0.0257248 10.3489 0.00910528 14.2162 0.00172422C18.0845 -0.00565684 18.5695 0.00910243 20.0887 0.0764806C21.6047 0.142013 22.6403 0.381075 23.5467 0.73182C24.4845 1.09317 25.2801 1.5796 26.0729 2.36923C26.8658 3.15977 27.3541 3.95264 27.72 4.88902C28.074 5.79449 28.3167 6.82871 28.3887 8.34521C28.4607 9.864 28.4782 10.3486 28.4856 14.2164C28.493 18.0838 28.4773 18.5693 28.4109 20.0895C28.3449 21.6046 28.1063 22.6407 27.7556 23.5466C27.3933 24.4844 26.9078 25.28 26.1181 26.0728C25.3285 26.8662 24.5348 27.354 23.5984 27.7204C22.6929 28.0739 21.6587 28.3167 20.1432 28.3891C18.624 28.4611 18.1389 28.4782 14.2702 28.4856C10.4033 28.493 9.9183 28.4782 8.39907 28.4113C6.88304 28.3448 5.84698 28.1062 4.94106 27.7559C4.00331 27.3932 3.2077 26.9082 2.41484 26.1181C1.62153 25.328 1.13283 24.5347 0.767327 23.5983C0.412897 22.6933 0.171051 21.6586 0.0986049 20.1435C0.0261559 18.6238 0.00908634 18.1383 0.00170813 14.2709C-0.00569857 10.403 0.00953929 9.91847 0.0759859 8.39919C0.142911 6.88271 0.380586 5.84709 0.731328 4.94024C1.09359 4.00293 1.57908 3.20777 2.36963 2.41445C3.15925 1.6216 3.95301 1.13239 4.88937 0.767352ZM5.86546 25.3631C6.36803 25.5564 7.1221 25.7872 8.51075 25.8476C10.0134 25.9127 10.4633 25.927 14.2656 25.9196C18.0692 25.9127 18.5192 25.8965 20.0213 25.8259C21.4086 25.7599 22.1627 25.5264 22.6639 25.3307C23.3289 25.0709 23.8024 24.7603 24.2999 24.2624C24.7973 23.7626 25.1052 23.2877 25.3627 22.6227C25.5565 22.1196 25.7868 21.3651 25.8473 19.9764C25.9133 18.4747 25.9271 18.0243 25.9197 14.221C25.9128 10.4187 25.8966 9.9683 25.8251 8.46612C25.7596 7.07837 25.5265 6.32428 25.3304 5.82355C25.0706 5.15761 24.7609 4.68504 24.2616 4.18708C23.7622 3.68911 23.2873 3.38221 22.6214 3.1247C22.1197 2.93041 21.3647 2.70057 19.9771 2.64013C18.4744 2.57413 18.024 2.56074 14.2208 2.56813C10.4186 2.57551 9.96861 2.59074 8.46644 2.66182C7.07826 2.7278 6.32509 2.96086 5.82298 3.15701C5.15843 3.41683 4.68493 3.72557 4.18699 4.22538C3.68994 4.72518 3.38213 5.19914 3.12463 5.86555C2.93174 6.36767 2.69958 7.12268 2.64006 8.51042C2.57452 10.0131 2.56069 10.4635 2.56807 14.2658C2.575 18.069 2.59114 18.5195 2.66175 20.0207C2.72682 21.4094 2.96171 22.1625 3.15694 22.6651C3.41675 23.3292 3.72643 23.8027 4.2253 24.3007C4.7251 24.7968 5.19998 25.1055 5.86546 25.3631Z"
                                fill="#626262" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/authwall?trk=bf&amp;trkInfo=AQHilSqrjkZ_kQAAAYuQLTYg99cIu0_PGNw_AlhgxZG1CrZSmxC_CqVln6gn7SxtqA02ph3A-JHlDUln3GGFrrjx704gvihNwYBhH2jIsifmterM3kn2jOOK0g-bZ9c-Cf9Qze8=&amp;original_referer=&amp;sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F101063774%2Fadmin%2Ffeed%2Fposts%2F" target="_blank">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26.3786 0H2.10316C0.940304 0 0 0.918048 0 2.05309V26.4287C0 27.5637 0.940304 28.4873 2.10316 28.4873H26.3786C27.5414 28.4873 28.4873 27.5637 28.4873 26.4342V2.05309C28.4873 0.918048 27.5414 0 26.3786 0ZM8.4516 24.2754H4.22302V10.6772H8.4516V24.2754ZM6.33731 8.82439C4.97971 8.82439 3.88362 7.72829 3.88362 6.37626C3.88362 5.02423 4.97971 3.92813 6.33731 3.92813C7.68935 3.92813 8.78544 5.02423 8.78544 6.37626C8.78544 7.72273 7.68935 8.82439 6.33731 8.82439ZM24.2754 24.2754H20.0524V17.6655C20.0524 16.0909 20.0246 14.06 17.8546 14.06C15.6569 14.06 15.3231 15.7793 15.3231 17.5542V24.2754H11.1056V10.6772H15.1561V12.5355H15.2118C15.7737 11.4673 17.1536 10.3378 19.2067 10.3378C23.4853 10.3378 24.2754 13.1531 24.2754 16.8142V24.2754Z"
                                fill="#626262" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@mmpfiltrationpvt.ltd.9372/featured" target="_blank">
                        <svg width="29" height="21" viewBox="0 0 29 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M26.9712 1.5296C27.4132 1.97443 27.7306 2.52755 27.8917 3.1336C28.4873 5.3705 28.4873 10.0353 28.4873 10.0353C28.4873 10.0353 28.4873 14.7001 27.8917 16.937C27.7306 17.543 27.4132 18.0962 26.9712 18.541C26.5292 18.9858 25.9781 19.3068 25.3731 19.4717C23.1459 20.0706 14.2437 20.0706 14.2437 20.0706C14.2437 20.0706 5.34137 20.0706 3.11418 19.4717C2.50917 19.3068 1.9581 18.9858 1.5161 18.541C1.07411 18.0962 0.756701 17.543 0.595644 16.937C7.0749e-08 14.7001 0 10.0353 0 10.0353C0 10.0353 7.0749e-08 5.3705 0.595644 3.1336C0.756701 2.52755 1.07411 1.97443 1.5161 1.5296C1.9581 1.08476 2.50917 0.763817 3.11418 0.598881C5.34137 0 14.2437 0 14.2437 0C14.2437 0 23.1459 0 25.3731 0.598881C25.9781 0.763817 26.5292 1.08476 26.9712 1.5296ZM18.7757 10.0353L11.3302 5.79947V14.2712L18.7757 10.0353Z"
                                fill="#626262" />
                        </svg>
                    </a>
                </div>
                </div>
                <div>
                    <p>mmp Innovates Sustainable Filtration Solutions For Air And Water With The Goal Of Enhancing
                        Quality Of Life</p>
                    <!--<p>MB OCEANIC® & LAGOON®</p>-->
                </div>
            </div>
            <div class="ft_trademarks">
                <div>
                    <p class="mb-0">D&B D-U-N-S<span style="font-size:30px;">&#174;</span></p>
                    <p>NUMBER : 92-067-2339</p>
                </div>
                <div>
                    <img src="<?php echo e(asset('public/newpublic/images/nsf.webp')); ?>" alt="" width="130px">
                    <p>MB OCEANIC<span style="font-size:30px;">&#174;</span> & LAGOON<span style="font-size:30px;">&#174;</span> 
                    <!--<br/> Are Certified.-->
                    </p>
                </div>
            </div>
        </div>
        <div class="ym_cpy">
            <div class="w-100">
               
                    <p class="text-center">©Copyright
                        <?php echo date("Y"); ?> mmp Filter. All Rights Reserved.
                    </p>
               
            </div>
        </div>
    </div>
</footer>
<!-- footer extend script -->
<!-- mmp yarn button -->
<!--<div class="fixed-btn-2 ">-->
<!--    <a class="website_area" href="https://mmpyarn.com/" target="_blank">For Yarn Website</a>-->
<!--</div>-->
<!-- mmp yarn button -->

<script>
    // Get elements
    const toggleButton = document.getElementById('toggleButton');
    const extendedFooter = document.getElementById('extendedFooter');
    const toggleArrow = document.getElementById('toggleArrow');

    // Toggle function
    toggleButton.addEventListener('click', function () {
        extendedFooter.classList.toggle('active');
        toggleArrow.classList.toggle('active');
    });

    // Close extended footer when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.top_footer_wrapper')) {
            extendedFooter.classList.remove('active');
            toggleArrow.classList.remove('active');
        }
    });

    // Prevent clicks inside the footer wrapper from closing it
    document.querySelector('.top_footer_wrapper').addEventListener('click', function (event) {
        event.stopPropagation();
    });
</script>
<!-- footer extend script -->

<?php echo $__env->make('layouts.whatsapppoup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.enquire-poup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<?php echo $__env->make('layouts.frontfooterlinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    <?php /**PATH C:\Intelliworkz\mmp\resources\views/layouts/frontfooter.blade.php ENDPATH**/ ?>