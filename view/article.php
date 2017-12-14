<?php
include_once '../config/constantes.php';
include_once CONTROLLER.'article.php';
include_once HEADER;
?>

<header>
	<?php
	if(!$bConnexion){
		include_once FIXED_MENU;
	}else{
		include_once FIXED_MENU_CONNECTED;
	}
	?>
</header>
	<?php include_once CATEGORIES_MENU; ?>
	<div class="panel-info">
			<div class="title">
				<?= $aTypeArticle['label'] ?>
			</div>
			<div class="content-box" style="overflow-x: hidden">
				<div class="article">
					<div class="picture-panel" style="background-image: url(https://www.copytop.com/sites/all/images/creation-carte-2.jpg);">
					</div>
					<div class="description-panel">
					</div>
					<div class="price-panel">
						<div class="row">
							<div class="col-sm-3 price">
								9,99€
							</div>
							<div class="col-sm-5">
								<div class="quantity">
								<input type="number" min="0" pattern="\d*" step="1" value="1" />
								</div>
							</div>
							<div class="col-sm-4">
								Ajout
							</div>
						</div>
					</div>
					<div class="advice-panel">
					</div>
				</div>
			</div>
		</div>

<?php
include_once FOOTER;
?>