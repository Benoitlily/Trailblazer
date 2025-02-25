<?php $skip_min_height = false; ?><section class="u-align-center u-clearfix u-section-1" id="sec-2882">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
    <?php $showSecondImage = false; ?><div class="u-expanded-width u-products u-repeater u-repeater-1 u-cms"><?php global $npProductsData; $countItems = $npProductsData['countItems'];
            foreach ($npProductsData['products'] as $current_index => $product) {
            
            $productId = isset($product['id']) && $product['id'] ? $product['id'] : 0;
	        $productData = get_product_data($product, $productId);
	        $allCategories = isset($npProductsData['categories']) ? $npProductsData['categories'] : array();
	        $productInfo = findElementById($npProductsData['products'], $productId);
	        $productInfo['categoriesData'] = getCategoriesData($productInfo['categories'], $allCategories);
	        $productInfo['images'] = prepareImagesData($productInfo['images']);
            $productJson = htmlspecialchars(json_encode($productInfo));
            
            $templateOrder = $current_index % $countItems;
            ?><?php if ($templateOrder == 0) { ?><!--product_item-->
      <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--product_image-->
          <?php if ($productData['image_url']) : ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-1" src="<?php echo get_template_directory_uri() . '/' . $productData['image_url']; ?>"><?php else: ?><div class="hidden-image"></div><?php endif; ?>
                                <?php if ($showSecondImage && isset($productData['second_image_url']) && $productData['second_image_url']): ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-1 u-product-second-image" src="<?php echo get_template_directory_uri() . '/' . $productData['second_image_url']; ?>"><?php endif; ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-1">
            <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-1" data-add-zero-cents="true">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="#popup-f2e7" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-1  u-payment-button u-add-to-cart-link" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 1) { ?><!--product_item-->
      <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-2">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><!--product_image-->
          <?php if ($productData['image_url']) : ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-2" src="<?php echo get_template_directory_uri() . '/' . $productData['image_url']; ?>"><?php else: ?><div class="hidden-image"></div><?php endif; ?>
                                <?php if ($showSecondImage && isset($productData['second_image_url']) && $productData['second_image_url']): ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-2 u-product-second-image" src="<?php echo get_template_directory_uri() . '/' . $productData['second_image_url']; ?>"><?php endif; ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-2">
            <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-2" data-add-zero-cents="true">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="#popup-f2e7" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-2  u-payment-button u-add-to-cart-link" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 2) { ?><!--product_item-->
      <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-3">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--product_image-->
          <?php if ($productData['image_url']) : ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-3" src="<?php echo get_template_directory_uri() . '/' . $productData['image_url']; ?>"><?php else: ?><div class="hidden-image"></div><?php endif; ?>
                                <?php if ($showSecondImage && isset($productData['second_image_url']) && $productData['second_image_url']): ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-3 u-product-second-image" src="<?php echo get_template_directory_uri() . '/' . $productData['second_image_url']; ?>"><?php endif; ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-3">
            <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-3" data-add-zero-cents="true">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="#popup-f2e7" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-3  u-payment-button u-add-to-cart-link" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 3) { ?><!--product_item-->
      <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-4">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4"><!--product_image-->
          <?php if ($productData['image_url']) : ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-4" src="<?php echo get_template_directory_uri() . '/' . $productData['image_url']; ?>"><?php else: ?><div class="hidden-image"></div><?php endif; ?>
                                <?php if ($showSecondImage && isset($productData['second_image_url']) && $productData['second_image_url']): ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-4 u-product-second-image" src="<?php echo get_template_directory_uri() . '/' . $productData['second_image_url']; ?>"><?php endif; ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-4">
            <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-4" data-add-zero-cents="true">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="#popup-f2e7" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-4  u-payment-button u-add-to-cart-link" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 4) { ?><!--product_item-->
      <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-5">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><!--product_image-->
          <?php if ($productData['image_url']) : ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-5" src="<?php echo get_template_directory_uri() . '/' . $productData['image_url']; ?>"><?php else: ?><div class="hidden-image"></div><?php endif; ?>
                                <?php if ($showSecondImage && isset($productData['second_image_url']) && $productData['second_image_url']): ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-5 u-product-second-image" src="<?php echo get_template_directory_uri() . '/' . $productData['second_image_url']; ?>"><?php endif; ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-5">
            <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-5" data-add-zero-cents="true">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="#popup-f2e7" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-5  u-payment-button u-add-to-cart-link" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product_item--><?php } ?><?php if ($templateOrder == 5) { ?><!--product_item-->
      <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-6">
        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6"><!--product_image-->
          <?php if ($productData['image_url']) : ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-6" src="<?php echo get_template_directory_uri() . '/' . $productData['image_url']; ?>"><?php else: ?><div class="hidden-image"></div><?php endif; ?>
                                <?php if ($showSecondImage && isset($productData['second_image_url']) && $productData['second_image_url']): ?><img alt="" class="u-expanded-width u-image u-image-default u-product-control u-image-6 u-product-second-image" src="<?php echo get_template_directory_uri() . '/' . $productData['second_image_url']; ?>"><?php endif; ?><!--/product_image--><!--product_title-->
          <h4 class="u-product-control u-text u-text-6">
            <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
          </h4><!--/product_title--><!--product_price-->
          <div class="u-product-control u-product-price u-product-price-6" data-add-zero-cents="true">
            <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
              <div class="u-hide-price u-old-price"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
              <div class="u-price u-text-palette-2-base" style="font-size: 1.25rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
            </div>
          </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"add-to-cart","content":""}--><!--/options_json-->
          <a href="#popup-f2e7" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-product-control u-text-body-color u-btn-6  u-payment-button u-add-to-cart-link" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button-->
        </div>
      </div><!--/product_item--><?php } ?><?php } ?>
    </div><!--/products-->
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>