<?php
include_once '../config/constantes.php';
include_once CONTROLLER.'home.php';
include_once HEADER;
include_once FIXED_MENU;
?>

<div id="panel" class="slide">
	<div class="background" style="background-image: url(<?= $sUrlBackground ?>)"></div>
	<div class="content">
		<div class="block home">
			<div class="background"></div>
			<div class="content">
				EasyPrint
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