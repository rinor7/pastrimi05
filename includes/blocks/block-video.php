<?php if (!get_field('block_video')['disable_section'] ?? false): ?>

<?php 
    $video_block = get_field('block_video');
    $background = $video_block['background_image'] ?? '';
    $video_file = $video_block['video_file'] ?? '';
	$video_uptitle = $video_block['video_uptitle'] ?? '';
    $video_title = $video_block['video_title'] ?? '';

    if ($background) {
        $section_class = 'our__video background-used';
    } elseif ($video_file) {
        $section_class = 'our__video video-used';
    } else {
        $section_class = 'our__video';
    }
?>

<section class="<?php echo esc_attr($section_class); ?>" id="video" style="<?php echo $background ? 'background-image: url(' . esc_url($background) . ');' : ''; ?>">

        <?php if (!$background && $video_file): ?>
            <video class="bg-video" autoplay loop muted playsinline>
                <source src="<?php echo esc_url($video_file); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php endif; ?>

        <?php if ($video_uptitle || $video_title): ?>
			<div class="content-video">
				<div class="play-icon">
				    <span><i class="fas fa-play"></i></span>
				</div>
				<div class="section-header-custom">
					<div class="section-header-custom-title"><?php echo esc_html($video_uptitle); ?></div>
					<div class="section-header-custom-subtitle"><?php echo esc_html($video_title); ?></div>
				</div>
			</div>
            <!-- Video Modal -->
            <div id="videoModal" class="video-modal">
                <div class="video-modal-overlay" onclick="closeVideoModal()"></div>
                <div class="video-modal-content">
                    <span class="video-modal-close" onclick="closeVideoModal()">&times;</span>
                    <video controls autoplay id="modalVideo">
                        <source src="<?php echo esc_url($video_file); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        <?php endif; ?>

</section>

<?php endif; ?>
