<?php
include_once '../config/constantes.php';
include_once CONTROLLER.'home.php';
include_once HEADER;
?>

<header>
	<?php
	include_once FIXED_MENU;
	include_once LEFT_MENU;
	?>
</header>

<div id="panel" class="slide">
	<div class="background" style="background-image: url(<?= $sUrlBackground ?>)"></div>
	<div class="content">
		<div class="block home">
			<div class="background"></div>
			<div class="content">
				<img src="<?= IMG ?>logo/logo.png">
				<div class="title">
					<span>Easy</span>Print
				</div>
				<div id="content-modal-sign-up">
					<form>
						<input type="email" id="user-email" placeholder="Your mail address" />
						<input type="password" id="user-password" placeholder="Your password" />
						<button type="button" id="signin-email">SIGN UP</button>
						<button type="button">login with Facebook</button>
						<button type="button">login with Google</button>
					</form>
				</div>
				<div class="signin">
					already have an account ? <span>Sign in</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="panel" class="screenSpace">

</div>

<div id="panel" class="fixed">
	<div class="content">
		<?php include_once CATEGORIES_MENU; ?>
		<div class="panel-info">
			<div class="title">
				Our Products
			</div>
			<div class="content-box">
				<?php foreach ($aTypeArticles as $key => $aArticle) { ?>
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
				<?php } ?>
			</div>
		</div>		
	</div>
</div>

<?php
include_once FOOTER;
?>