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
					EasyPrint
				</div>
				<form>
					<input type="text" placeholder="Your mail address" />
					<input type="text" placeholder="Your password" />
					<button type="button">SIGN UP</button>
					<button type="button">login with Facebook</button>
					<button type="button">login with Google</button>
				</form>
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
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<?php 
						$lol = 'loly'; 
						include CATEGORY;
					?>
				</div>
				<div class="col-sm-4">
					<?php 
						$lol = 'ahah'; 
						include CATEGORY;
					?>
				</div>
				<div class="col-sm-4">
					<?php 
						$lol = 'ahah'; 
						include CATEGORY;
					?>				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<?php 
						$lol = 'ahah'; 
						include CATEGORY;
					?>				
				</div>
				<div class="col-sm-4">
					<?php 
						$lol = 'ahah'; 
						include CATEGORY;
					?>				
				</div>
				<div class="col-sm-4">
					<?php 
						$lol = 'ahah'; 
						include CATEGORY;
					?>				
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include_once FOOTER;
?>