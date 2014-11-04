<?php 
class ControllerCommonHeader extends Controller {
	public function index() {
		$data['title'] = $this->document->getTitle(); 
			
		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}
		
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();	
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');
		
		$this->load->language('common/header');

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_affiliate'] = $this->language->get('text_affiliate');
		$data['text_affiliate_activity'] = $this->language->get('text_affiliate_activity');
		$data['text_attribute'] = $this->language->get('text_attribute');
		$data['text_attribute_group'] = $this->language->get('text_attribute_group');
		$data['text_backup'] = $this->language->get('text_backup');
		$data['text_banner'] = $this->language->get('text_banner');
		$data['text_catalog'] = $this->language->get('text_catalog');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_country'] = $this->language->get('text_country');
		$data['text_coupon'] = $this->language->get('text_coupon');
		$data['text_currency'] = $this->language->get('text_currency');			
		$data['text_customer'] = $this->language->get('text_customer');
		$data['text_customer_group'] = $this->language->get('text_customer_group');
		$data['text_customer_field'] = $this->language->get('text_customer_field');
		$data['text_customer_ban_ip'] = $this->language->get('text_customer_ban_ip');
		$data['text_custom_field'] = $this->language->get('text_custom_field');
		$data['text_sale'] = $this->language->get('text_sale');
		$data['text_design'] = $this->language->get('text_design');
		$data['text_documentation'] = $this->language->get('text_documentation');
		$data['text_download'] = $this->language->get('text_download');
		$data['text_error_log'] = $this->language->get('text_error_log');
		$data['text_extension'] = $this->language->get('text_extension');
		$data['text_feed'] = $this->language->get('text_feed');
		$data['text_filter'] = $this->language->get('text_filter');
		$data['text_front'] = $this->language->get('text_front');
		$data['text_geo_zone'] = $this->language->get('text_geo_zone');
		$data['text_dashboard'] = $this->language->get('text_dashboard');
		$data['text_help'] = $this->language->get('text_help');
		$data['text_information'] = $this->language->get('text_information');
		$data['text_installer'] = $this->language->get('text_installer');
		$data['text_language'] = $this->language->get('text_language');
		$data['text_layout'] = $this->language->get('text_layout');
		$data['text_localisation'] = $this->language->get('text_localisation');
		$data['text_location'] = $this->language->get('text_location');
		$data['text_logout'] = $this->language->get('text_logout');
		$data['text_marketing'] = $this->language->get('text_marketing');
		$data['text_modification'] = $this->language->get('text_modification');
		$data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$data['text_module'] = $this->language->get('text_module');
		$data['text_online'] = $this->language->get('text_online');
		$data['text_option'] = $this->language->get('text_option');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_order_status'] = $this->language->get('text_order_status');
		$data['text_opencart'] = $this->language->get('text_opencart');
		$data['text_payment'] = $this->language->get('text_payment');
		$data['text_product'] = $this->language->get('text_product'); 
		$data['text_profile'] = $this->language->get('text_profile'); 
		$data['text_reports'] = $this->language->get('text_reports');
		$data['text_report_sale_order'] = $this->language->get('text_report_sale_order');
		$data['text_report_sale_tax'] = $this->language->get('text_report_sale_tax');
		$data['text_report_sale_shipping'] = $this->language->get('text_report_sale_shipping');
		$data['text_report_sale_return'] = $this->language->get('text_report_sale_return');
		$data['text_report_sale_coupon'] = $this->language->get('text_report_sale_coupon');
		$data['text_report_product_viewed'] = $this->language->get('text_report_product_viewed');
		$data['text_report_product_purchased'] = $this->language->get('text_report_product_purchased');
		$data['text_report_customer_activity'] = $this->language->get('text_report_customer_activity');
		$data['text_report_customer_online'] = $this->language->get('text_report_customer_online');
		$data['text_report_customer_order'] = $this->language->get('text_report_customer_order');
		$data['text_report_customer_reward'] = $this->language->get('text_report_customer_reward');
		$data['text_report_customer_credit'] = $this->language->get('text_report_customer_credit');
		$data['text_report_sale_return'] = $this->language->get('text_report_sale_return');
		$data['text_report_product_viewed'] = $this->language->get('text_report_product_viewed');
		$data['text_report_customer_order'] = $this->language->get('text_report_customer_order');
		$data['text_review'] = $this->language->get('text_review');
		$data['text_return'] = $this->language->get('text_return');
		$data['text_return_action'] = $this->language->get('text_return_action');
		$data['text_return_reason'] = $this->language->get('text_return_reason');
		$data['text_return_status'] = $this->language->get('text_return_status');
		$data['text_support'] = $this->language->get('text_support'); 
		$data['text_shipping'] = $this->language->get('text_shipping');		
		$data['text_setting'] = $this->language->get('text_setting');
		$data['text_stock_status'] = $this->language->get('text_stock_status');
		$data['text_store'] = $this->language->get('text_store');
		$data['text_system'] = $this->language->get('text_system');
		$data['text_tax'] = $this->language->get('text_tax');
		$data['text_tax_class'] = $this->language->get('text_tax_class');
		$data['text_tax_rate'] = $this->language->get('text_tax_rate');
		$data['text_total'] = $this->language->get('text_total');
		$data['text_tracking'] = $this->language->get('text_tracking');
		$data['text_user'] = $this->language->get('text_user');
		$data['text_user_group'] = $this->language->get('text_user_group');
		$data['text_users'] = $this->language->get('text_users');
		$data['text_voucher'] = $this->language->get('text_voucher');
		$data['text_voucher_theme'] = $this->language->get('text_voucher_theme');
		$data['text_weight_class'] = $this->language->get('text_weight_class');
		$data['text_length_class'] = $this->language->get('text_length_class');
		$data['text_zone'] = $this->language->get('text_zone');
		
		if (!isset($this->request->get['token']) || !isset($this->session->data['token']) && ($this->request->get['token'] != $this->session->data['token'])) {
			$data['logged'] = '';
			
			$data['home'] = $this->url->link('common/dashboard', '', 'SSL');
		} else {
			$data['logged'] = sprintf($this->language->get('text_logged'), $this->user->getUserName());

			$data['home'] = $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL');
			$data['affiliate'] = $this->url->link('marketing/affiliate', 'token=' . $this->session->data['token'], 'SSL');
			$data['attribute'] = $this->url->link('catalog/attribute', 'token=' . $this->session->data['token'], 'SSL');
			$data['attribute_group'] = $this->url->link('catalog/attribute_group', 'token=' . $this->session->data['token'], 'SSL');
			$data['backup'] = $this->url->link('tool/backup', 'token=' . $this->session->data['token'], 'SSL');
			$data['banner'] = $this->url->link('design/banner', 'token=' . $this->session->data['token'], 'SSL');
			$data['category'] = $this->url->link('catalog/category', 'token=' . $this->session->data['token'], 'SSL');
			$data['country'] = $this->url->link('localisation/country', 'token=' . $this->session->data['token'], 'SSL');
			$data['contact'] = $this->url->link('marketing/contact', 'token=' . $this->session->data['token'], 'SSL');
			$data['coupon'] = $this->url->link('marketing/coupon', 'token=' . $this->session->data['token'], 'SSL');
			$data['currency'] = $this->url->link('localisation/currency', 'token=' . $this->session->data['token'], 'SSL');
			$data['customer'] = $this->url->link('sale/customer', 'token=' . $this->session->data['token'], 'SSL');
			$data['customer_fields'] = $this->url->link('sale/customer_field', 'token=' . $this->session->data['token'], 'SSL');
			$data['customer_group'] = $this->url->link('sale/customer_group', 'token=' . $this->session->data['token'], 'SSL');
			$data['customer_ban_ip'] = $this->url->link('sale/customer_ban_ip', 'token=' . $this->session->data['token'], 'SSL');
			$data['custom_field'] = $this->url->link('sale/custom_field', 'token=' . $this->session->data['token'], 'SSL');
			$data['download'] = $this->url->link('catalog/download', 'token=' . $this->session->data['token'], 'SSL');
			$data['error_log'] = $this->url->link('tool/error_log', 'token=' . $this->session->data['token'], 'SSL');
			$data['feed'] = $this->url->link('extension/feed', 'token=' . $this->session->data['token'], 'SSL');	
			$data['filter'] = $this->url->link('catalog/filter', 'token=' . $this->session->data['token'], 'SSL');			
			$data['geo_zone'] = $this->url->link('localisation/geo_zone', 'token=' . $this->session->data['token'], 'SSL');
			$data['image'] = $this->url->link('catalog/image', 'token=' . $this->session->data['token'], 'SSL');
			$data['information'] = $this->url->link('catalog/information', 'token=' . $this->session->data['token'], 'SSL');
			$data['installer'] = $this->url->link('extension/installer', 'token=' . $this->session->data['token'], 'SSL');
			$data['language'] = $this->url->link('localisation/language', 'token=' . $this->session->data['token'], 'SSL');
			$data['layout'] = $this->url->link('design/layout', 'token=' . $this->session->data['token'], 'SSL');
			$data['location'] = $this->url->link('localisation/location', 'token=' . $this->session->data['token'], 'SSL');
			$data['logout'] = $this->url->link('common/logout', 'token=' . $this->session->data['token'], 'SSL');
			$data['modification'] = $this->url->link('extension/modification', 'token=' . $this->session->data['token'], 'SSL');
			$data['manufacturer'] = $this->url->link('catalog/manufacturer', 'token=' . $this->session->data['token'], 'SSL');
			$data['marketing'] = $this->url->link('marketing/marketing', 'token=' . $this->session->data['token'], 'SSL');
			$data['module'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
			$data['option'] = $this->url->link('catalog/option', 'token=' . $this->session->data['token'], 'SSL');
			$data['order'] = $this->url->link('sale/order', 'token=' . $this->session->data['token'], 'SSL');
			$data['order_status'] = $this->url->link('localisation/order_status', 'token=' . $this->session->data['token'], 'SSL');
			$data['payment'] = $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL');
			$data['product'] = $this->url->link('catalog/product', 'token=' . $this->session->data['token'], 'SSL');
			$data['profile'] = $this->url->link('user/user/update', 'token=' . $this->session->data['token'] . '&user_id=' . $this->user->getId(), 'SSL');
			$data['report_sale_order'] = $this->url->link('report/sale_order', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_sale_tax'] = $this->url->link('report/sale_tax', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_sale_shipping'] = $this->url->link('report/sale_shipping', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_sale_return'] = $this->url->link('report/sale_return', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_sale_coupon'] = $this->url->link('report/sale_coupon', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_product_viewed'] = $this->url->link('report/product_viewed', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_product_purchased'] = $this->url->link('report/product_purchased', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_customer_activity'] = $this->url->link('report/customer_activity', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_customer_online'] = $this->url->link('report/customer_online', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_customer_order'] = $this->url->link('report/customer_order', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_customer_reward'] = $this->url->link('report/customer_reward', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_customer_credit'] = $this->url->link('report/customer_credit', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_marketing'] = $this->url->link('report/marketing', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_affiliate'] = $this->url->link('report/affiliate', 'token=' . $this->session->data['token'], 'SSL');
			$data['report_affiliate_activity'] = $this->url->link('report/affiliate_activity', 'token=' . $this->session->data['token'], 'SSL');
			$data['review'] = $this->url->link('catalog/review', 'token=' . $this->session->data['token'], 'SSL');
			$data['return'] = $this->url->link('sale/return', 'token=' . $this->session->data['token'], 'SSL');
			$data['return_action'] = $this->url->link('localisation/return_action', 'token=' . $this->session->data['token'], 'SSL');
			$data['return_reason'] = $this->url->link('localisation/return_reason', 'token=' . $this->session->data['token'], 'SSL');
			$data['return_status'] = $this->url->link('localisation/return_status', 'token=' . $this->session->data['token'], 'SSL');			
			$data['shipping'] = $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], 'SSL');
			$data['setting'] = $this->url->link('setting/store', 'token=' . $this->session->data['token'], 'SSL');
			$data['stock_status'] = $this->url->link('localisation/stock_status', 'token=' . $this->session->data['token'], 'SSL');
			$data['tax_class'] = $this->url->link('localisation/tax_class', 'token=' . $this->session->data['token'], 'SSL');
			$data['tax_rate'] = $this->url->link('localisation/tax_rate', 'token=' . $this->session->data['token'], 'SSL');
			$data['total'] = $this->url->link('extension/total', 'token=' . $this->session->data['token'], 'SSL');
			$data['user'] = $this->url->link('user/user', 'token=' . $this->session->data['token'], 'SSL');
			$data['user_group'] = $this->url->link('user/user_permission', 'token=' . $this->session->data['token'], 'SSL');
			$data['voucher'] = $this->url->link('sale/voucher', 'token=' . $this->session->data['token'], 'SSL');
			$data['voucher_theme'] = $this->url->link('sale/voucher_theme', 'token=' . $this->session->data['token'], 'SSL');
			$data['weight_class'] = $this->url->link('localisation/weight_class', 'token=' . $this->session->data['token'], 'SSL');
			$data['length_class'] = $this->url->link('localisation/length_class', 'token=' . $this->session->data['token'], 'SSL');
			$data['zone'] = $this->url->link('localisation/zone', 'token=' . $this->session->data['token'], 'SSL');
						
			// Get total number of stores online
			$data['stores'] = array();

			$data['stores'][] = array(
				'name' => $this->config->get('config_name'),
				'href' => HTTP_CATALOG
			);			
			
			$this->load->model('setting/store');
			
			$results = $this->model_setting_store->getStores();
			
			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}
		}
		
		$this->load->model('user/user');

		$this->load->model('tool/image');

		$user_info = $this->model_user_user->getUser($this->user->getId());

		if ($user_info) {
			$data['username'] = $user_info['firstname'] . ' ' . $user_info['lastname'];

			if (is_file(DIR_IMAGE . $user_info['image'])) {
				$data['image'] = $this->model_tool_image->resize($user_info['image'], 24, 24);
			} else {
				$data['image'] = '';
			}
		} else {
			$data['username'] = '';
			$data['image'] = '';
		}
					
		return $this->load->view('common/header.tpl', $data);
	}
}