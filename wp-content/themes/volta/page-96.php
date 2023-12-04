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
      wp_reset_query();
      ?>
    </ul>
  </div>
</section>

<?php
$title1 = get_field('tieu_de_1');
$image1 = get_field('anh_dich_so_1');
$link1 = get_field('link_dich_vu_so_1');

$title2 = get_field('tieu_de_2');
$image2 = get_field('anh_dich_vu_so_2');
$link2 = get_field('link_dich_vu_so_2');


$title3 = get_field('tieu_de_3');
$image3 = get_field('anh_dich_vu_so_3');
$link3 = get_field('link_dich_vu_so_3');

$section_title = get_field('title');
$section_description = get_field('description');

$section_title1 = get_field('title1');
$section_image1 = get_field('image1');
$section_link1 = get_field('link1');

$section_title2 = get_field('title2');
$section_image2 = get_field('image2');
$section_link2 = get_field('link2');


$section_title3 = get_field('title3');
$section_image3 = get_field('image3');
$section_link3 = get_field('link3');


$section_title4 = get_field('title4');
$section_image4 = get_field('image4');
$section_link4 = get_field('link4');
?>
<section class="comonSection">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="singleCats">
          <img src="<?php echo $image1 ?>" alt="<?php echo $title1 ?>" />
          <div class="catContent poppins">
            <a href="<?php echo '/hieplight/' . $link1 ?>"><?php echo $title1 ?></a>
          </div>
          <div class="hoverEffect"></div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="singleCats">
          <img src="<?php echo $image2 ?>" alt="<?php echo $title2 ?>" />
          <div class="catContent poppins">
            <a href="<?php echo '/hieplight/' . $link2 ?>"><?php echo $title2 ?></a>
          </div>
          <div class="hoverEffect"></div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="singleCats">
          <img src="<?php echo $image3 ?>" alt="<?php echo $title3 ?>" />
          <div class="catContent poppins">
            <a href="<?php echo '/hieplight/' . $link3 ?>"><?php echo $title3 ?></a>
          </div>
          <div class="hoverEffect"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="comonSection noPaddingTop">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="normalHr"></div>
        <div class="sectionTitle text-center">
          <h2 class="poppins"><?php echo $section_title ?></h2>
          <div class="titleBars"></div>
          <p>
            <?php echo $section_description ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 paddingRight5px">
        <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
          <img src="<?php echo $section_image1 ?>" alt />
          <div class="feaContent poppins">
            <h4><?php echo $section_title1 ?></h4>
            <a href="" <?php echo '/hieplight/' . $section_link1 ?>">Xem thêm<i class="flaticon-arrows-3"></i></a>
          </div>
        </div>
        <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
          <img src="<?php echo $section_image2 ?>" alt />
          <div class="feaContent poppins">
            <h4><?php echo $section_title2 ?></h4>
            <a href="" <?php echo '/hieplight/' . $section_link2 ?>">Xem thêm<i class="flaticon-arrows-3"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 paddingLeft5px">
        <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
          <img src="<?php echo $section_image3 ?>" alt />
          <div class="feaContent poppins">
            <h4><?php echo $section_title3 ?></h4>
            <a href="" <?php echo '/hieplight/' . $section_link3 ?>">Xem thêm<i class="flaticon-arrows-3"></i></a>
          </div>
        </div>

        <div class="singleFeatured wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
          <img src="<?php echo $section_image4 ?>" alt />
          <div class="feaContent poppins">
            <h4><?php echo $section_title4 ?></h4>
            <a href="" <?php echo '/hieplight/' . $section_link4 ?>">Xem thêm<i class="flaticon-arrows-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$qcTitle = get_field('qc-title');
$qcDescription = get_field('qc-description');
$qcBackground = get_field('qc-background');
$qcButtonName = get_field('qc-button-name');
$qcButtonLink = get_field('qc-button-link');
?>

<section class="comonSection noPadding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="callToActions text-center poppins wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms" style="background-image: url(<?php echo "$qcBackground"; ?>)">
          <h2><?php echo $qcTitle ?></h2>
          <p><?php echo $qcDescription ?></p>
          <a href="<?php echo $qcButtonLink; ?>" class="vol_btn"><?php echo $qcButtonName; ?><i class="flaticon-arrows-3"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
  echo do_shortcode('[recent_products limit=12]')
?>

<?php get_footer(); ?>