<?php
// Fushat e përgjithshme nga faqja 10
$source_page_id = 312;

// Merr fushat për block_about vetëm nga faqja 10
$about_fields = get_field('block_about', $source_page_id);

// Merr fushën disable_section për faqen aktuale
$current_disable = get_field('block_about_disable_section');

if ($current_disable) {
    return; // mos shfaq section-in nëse e ka disable faqja aktuale
}

$video_file = $about_fields['video_file'] ?? null;
$video_url = is_array($video_file) ? ($video_file['url'] ?? '') : '';
$video_uptitle = $about_fields['video_uptitle'] ?? '';
$video_title = $about_fields['video_title'] ?? '';
?>

<section class="introduction" id="rreth-nesh">
  <div class="container">
    <?php render_section_header('block_about'); ?>
    <div class="row">
      <div class="left col-lg-6">
        <div class="welcome-image-box clearfix">
          <div class="vid1">
            <img class="mobile-version" src="<?php echo esc_url($about_fields['box1img']); ?>" alt="" loading="lazy">
          </div>
          <div class="vid2">
            <img class="mobile-version" src="<?php echo esc_url($about_fields['box2img']); ?>" alt="" loading="lazy">
          </div>
          <div class="vid3">
            <img class="mobile-version" src="<?php echo esc_url($about_fields['box3img']); ?>" alt="" loading="lazy">
          </div>
        </div>
      </div>
      <div class="right col-lg-6">
        <div class="line1">
          <img class="mobile-version" src="<?php echo esc_url($about_fields['box4img']); ?>" alt="" loading="lazy">
          <h1><?php echo wp_kses_post($about_fields['line1']); ?></h1>
          </div>
        <div class="line2">
          <span><?php echo wp_kses_post($about_fields['line2']); ?></span>
        </div>
        <div class="line3">
          <div class="video-holder-box">
            <div class="img-holder">
              <img class="mobile-version" src="<?php echo esc_url($about_fields['box5img']); ?>" alt="" loading="lazy">
              <div class="icon-holder">
                <div class="icon">
                  <div class="inner">
                  <?php if ($video_url): ?>
                    <div class="icon-holder">
                      <div class="icon">
                        <div class="inner">
                          <div class="html5lightbox" onclick="openVideoModal()" style="cursor:pointer;" title="Fouens Video Gallery">
                            <span><i class="fas fa-play"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>    
          </div>
          <div class="rightext">
            <span><?php echo wp_kses_post($about_fields['line3']); ?></span>
          </div>
        </div>
      </div>
    </div>

    <?php if (!is_front_page()) : ?>
      <div class="row">
        <div class="lefts col-lg-7">
          <div class="description">
            <p><?php echo wp_kses_post($about_fields['description']); ?></p>
          </div>
        </div>
        <div class="rights col-lg-5">
          <div class="swiper mySwiper swiperCard">
            <div class="swiper-wrapper">
              <?php 
              if (!empty($about_fields['slider_images'])):
                $count = 0;
                foreach ($about_fields['slider_images'] as $row):
                  if ($count >= 10) break;
                  $image = $row['image'];
                  if ($image):
                    $img_url = is_array($image) ? $image['url'] : $image;
                    $img_alt = is_array($image) && isset($image['alt']) ? $image['alt'] : '';
              ?>
                    <div class="swiper-slide">
                      <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" loading="lazy" />
                    </div>
              <?php
                  endif;
                  $count++;
                endforeach;
              endif;              
              ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($video_url): ?>
      <!-- Video Modal -->
      <div id="videoModal-about" class="video-modal" style="display:none;">
        <div class="video-modal-overlay" onclick="closeVideoModal('about')"></div>
        <div class="video-modal-content">
          <span class="video-modal-close" onclick="closeVideoModal('about')">&times;</span>
          <video controls id="modalVideo-about">
            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="section-header-custom">
            <?php if (!empty($video_uptitle)): ?>
              <div class="section-header-custom-title"><?php echo esc_html($video_uptitle); ?></div>
            <?php endif; ?>
            <?php if (!empty($video_title)): ?>
              <div class="section-header-custom-subtitle"><?php echo esc_html($video_title); ?></div>
            <?php endif; ?>
          </div>
        </div>
      </div>

    <?php endif; ?>
    
  </div>
</section>
