<?php
function pdf($data, $name) {

    if (count($name) > 1) {
		$name = "Orders";
	}else{
		$name = 'Order_'.$name[0]['order_id'];
	}


    ob_start();
    require_once DIR_SYSTEM . 'library/mpdf/mpdf.php';
    $mpdf=new mPDF();
    $mpdf->WriteHTML($data);
    ob_end_clean();
    $mpdf->Output();
}
?>