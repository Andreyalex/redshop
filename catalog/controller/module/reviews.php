<?php
class ControllerModuleReviews extends Controller {
	public function index($setting) {

		$this->load->language('module/reviews');
		
      	$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_tax'] = $this->language->get('text_tax');
		
		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');
						
		$this->load->model('catalog/product');
		
		$this->load->model('tool/image');

        $this->load->model('catalog/reviews');


		$data['products'] = array();
		
        /** @var ModelCatalogReviews $this->model_catalog_reviews */
		$results = $this->model_catalog_reviews->getReviews(0, 5);

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], 32, 32);
			} else {
				$image = null;
			}
						
			$data['reviews'][] = array(
				'product_id' => $result['product_id'],
				'thumb'   	 => $image,
				'product_name'=> $result['name'],
				'text' => utf8_substr(strip_tags(html_entity_decode($result['text'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
				'date_added' => $result['date_added'],
				'rating'     => $result['rating'],
				'href'    	 => $this->url->link('product/product', 'product_id=' . $result['product_id']),
			);
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/reviews.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/reviews.tpl', $data);
		} else {
			return $this->load->view('default/template/module/reviews.tpl', $data);
		}
	}
}