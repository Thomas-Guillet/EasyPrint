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
		<div class="panel-category">
			<?php 
				$sBackground = 'one'; 
				$sTitle = 'our Products'; 
				include CATEGORY;
			?>
			<?php 
				$sBackground = 'two'; 
				$sTitle = 'Upload Files'; 
				include CATEGORY;
			?>
			<?php 
				$sBackground = 'one'; 
				$sTitle = 'Quotation'; 
				include CATEGORY;
			?>				
			<?php 
				$sBackground = 'two'; 
				$sTitle = 'My History'; 
				include CATEGORY;
			?>				
			<?php 
				$sBackground = 'one'; 
				$sTitle = 'Invite Friends'; 
				include CATEGORY;
			?>				
			<?php 
				$sBackground = 'two'; 
				$sTitle = 'Profil'; 
				include CATEGORY;
				?>	
		</div>	
		<div class="panel-info">
			<div class="title">
				Our Products
			</div>
			<div class="content-box">
				<div class="item">
					<div class="header">
						Cartes de Visite
					</div>
					<ul>
						<li>
							Item 1
						</li>
						<li>
							Item 1
						</li>
					</ul>
				</div>

				<div class="item">
					<div class="header">
						Coques de téléphone
					</div>
					<ul>
						<li>
							Item 1
						</li>
						<li>
							Item 1
						</li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
</div>

<?php
include_once FOOTER;
?>