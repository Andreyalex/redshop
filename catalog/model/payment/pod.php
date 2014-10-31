<?php 
class ModelPaymentPOD extends Model {
  	public function getMethod($address, $total) {
		$this->load->language('payment/pod');
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('pod_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
	
		if ($this->config->get('pod_total') > 0 && $this->config->get('pod_total') > $total) {
			$status = false;
		} elseif (!$this->config->get('pod_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'       => 'pod',
        		'title'      => $this->language->get('text_title'),
				'sort_order' => $this->config->get('pod_sort_order')
      		);
    	}
   
    	return $method_data;
  	}
}