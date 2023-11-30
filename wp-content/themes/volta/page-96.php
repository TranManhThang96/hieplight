<?php get_header(); ?>

<section class="banner_01">
  <div class="revSlider">
    <ul>
      <?php
      $data = new WP_Query(['post_type' => 'slide-qc']);
      while ($data->have_posts()) {
        $data->the_post();
        $slideImage = get_field('anh_slide_quang_cao');
      ?>
        <li data-transition="boxfade" data-slotamount="7" data-masterspeed="1000">
          <div class="tp-caption sfb" data-x="left" data-y="top" data-hoffset="0" data-voffset="-80" data-speed="1000" data-start="800" data-easing="easeInOutCirc">
            <div class="sliderImgs">
              <img src="<?php echo $slideImage['url'] ?>" alt />
            </div>
          </div>
          <div class="tp-caption sfb" data-x="right" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="800" data-easing="easeInQuad">
            <h1 class="sl_h raleway"><?php echo get_field('tieu_de_nut_slide_quang_cao') ?></h1>
          </div>
          <div class="tp-caption fade" data-x="right" data-y="center" data-hoffset="0" data-voffset="65" data-speed="1000" data-start="800" data-easing="easeInQuint">
            <h6 class="sl_p poppins">
            <?php echo get_field('noi_dung_quang_cao') ?>
            </h6>
          </div>
          <div class="tp-caption sfb" data-x="right" data-y="center" data-hoffset="0" data-voffset="145" data-speed="1000" data-start="800" data-easing="easeOutBounce">
            <div class="slbutons">
              <a href="#" class="vol_btn poppins">Shop Now<i class="flaticon-arrows-3"></i></a>
            </div>
          </div>
        </li>

      <?php }
      ?>
    </ul>
  </div>
</section>

<?php get_footer(); ?>