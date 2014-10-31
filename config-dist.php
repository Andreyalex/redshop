<?php
// HTTP
define('HTTP_SERVER', 'http://site_domain/');

// HTTPS
define('HTTPS_SERVER', 'http://site_domain/');

// DIR
define('DIR_APPLICATION', 'path_to_site_root/catalog/');
define('DIR_SYSTEM', 'path_to_site_root/system/');
define('DIR_LANGUAGE', 'path_to_site_root/catalog/language/');
define('DIR_TEMPLATE', 'path_to_site_root/catalog/view/theme/');
define('DIR_CONFIG', 'path_to_site_root/system/config/');
define('DIR_IMAGE', 'path_to_site_root/image/');
define('DIR_CACHE', 'path_to_site_root/system/cache/');
define('DIR_DOWNLOAD', 'path_to_site_root/system/download/');
define('DIR_MODIFICATION', 'path_to_site_root/system/modification/');
define('DIR_LOGS', 'path_to_site_root/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PREFIX', 'oc_');

define('CATEGORY_TAG_TITLE_TPL', '{{category.name}}. Низкие цены на {{category.name}} Харьков, Киев, Донецк, Луганск, Львов, Днепропетровск, Житомир,Тернополь. Купить {{category.name}} в интернет-магазине | site_domain ');
define('CATEGORY_META_DESCRIPTION_TPL', '{{category.name}} в магазине site_domain. Низкие цены. Купить {{category.name}} с доставкой по Украине');

define('PRODUCT_TAG_TITLE_TPL', '{{product.name}}. Купить {{product.name}} в интернет-магазине | site_domain');
define('PRODUCT_META_DESCRIPTION_TPL', '{{product.name}} в магазине site_domain. Низкие цены. Купить {{product.name}} с доставкой по Украине');