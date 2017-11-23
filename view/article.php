<?php
include_once '../config/constantes.php';
include_once CONTROLLER.'article.php';
include_once HEADER;
?>

<header>
	<?php
	include_once FIXED_MENU;
	?>
</header>
	<?php include_once CATEGORIES_MENU; ?>
	<div class="panel-info">
			<div class="title">
				<?= $aTypeArticle['label'] ?>
			</div>
			<div class="content-box">
				<!-- <?php foreach ($aTypeArticles as $key => $aArticle) { ?>
					<?php if($aArticle['nb_items'] != 0){ ?>
					<div class="item">
						<div class="header">
							<?= $aArticle['label'] ?>
						</div>
						<ul>
							<?php foreach ($aArticle['content'] as $aValue) { ?>
								<li>
									<a href="<?= URL.'search/'.$aArticle['url'].'/'.$aValue['url'] ?>"><?= $aValue['label'] ?></a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<?php } ?>
				<?php } ?> -->
			</div>
		</div>