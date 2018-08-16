<?php
// TOPPAGE LIVE情報テンプレ

$array_live = array();

global $post;
$posts = get_posts('post_type=live&posts_per_page=9');

if (have_posts()) {
    foreach ($posts as $key => $value) {
        $id = $value->ID;
        if (get_post_status($id) == 'publish') {

            // 情報コンバート
            $live_date = convLiveInfo($id);

            if ($live_date) {
                $array_live[] = $live_date;
            }
        }
    }
}
?>

	<div class="panel-grid panel-no-style" >
		<div class="panel-grid-cell" >
			<section id="employees" class="employees-area bg1 section_custom">
				<div class="container">
					<h3 class="widget-title" id="live"><span class="wow bounce">LIVE</span></h3>

					<?php if ($array_live): ?>
					<?php foreach ($array_live as $row): ?>
					<div class="col-md-4 col-sm-6 col-xs-6 mb20" style="text-align: center !important; ">
						<a href="<?= $row['link']; ?>"><img class="employee-photo wow zoomInDown" src="<?= $row['image_th']; ?>" alt="<?= $row['name']; ?>"></a>
						<h4 class="employee-name wow fadeInUp"><?= $row['name']; ?></h4>
						<span class="employee-position wow fadeInUp kind"><?= $row['type']; ?></span>

						<?php if ($row['youtube'] || $row['facebook'] || $row['homepage'] || $row['twitter']): ?>

						<div class="employee-social wow fadeInUp mt10 icon">
							<?php if ($row['facebook']): ?>
							<a href="<?= $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							<?php endif; ?>

                            <?php if ($row['twitter']): ?>
							<a href="<?= $row['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>

                            <?php if ($row['homepage']): ?>
							<a href="<?= $row['homepage'] ?>" target="_blank"><i class="fa fa-laptop"></i></a>
                            <?php endif; ?>

                            <?php if ($row['youtube']): ?>
								<a href="<?= $row['youtube'] ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                            <?php endif; ?>
						</div>

						<?php endif; ?>
					</div>
					<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</section>
		</div>
	</div>