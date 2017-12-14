<?php
if(isset($sTitle)){
	if($sTitle == "our Products"){
		$sUrl = URL;
	}else{
		$sUrl = false;
	}
}
?>

<div onclick="location.href='<?= $sUrl ?>'" class="category <?= $sBackground ?>">
	<?= $sTitle ?>
</div>