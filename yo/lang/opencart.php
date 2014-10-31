<?php

class YoLangOpencart {

    public static function getLangFiles($lang, $rootDir) {

        $arr = array(
            array($rootDir . '/catalog/language/', $lang),
            //array($rootDir . '/admin/language/', $lang)
        );

        $allowedExts = array('php');

        $files = array();

        foreach($arr as $path) {
            $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path[0].$path[1]));
            $files = array();
            foreach ($iterator as $splFileInfo) {
                if($splFileInfo->isFile() && in_array($splFileInfo->getExtension(), $allowedExts)) {
                    $fullName = $splFileInfo->getPathname();
                    $files[] = array(
                        $fullName,
                        $path[0],
                        $path[1],
                        substr($fullName, strlen($path[0].$path[1]))
                    );
                }
            }
        }

        return $files;
    }

    public static function getFileTranslations($fullName) {

        $_ = array();
        if (is_file($fullName)) {
            include $fullName;
        }

        return $_;
    }

    public static function addTranslation($file, $key, $value) {

        $line = "\n\$_['".$key."'] = '".addcslashes($value, "'")."';";
        file_put_contents($file, $line, FILE_APPEND);
    }

    public static function sanitizeFile($file) {

        $data = file_get_contents($file);
        $data = preg_replace('/^\s*\?\>\s*$/imU', '', $data);
        file_put_contents($file, $data);
    }

    public static function createFile($file) {

        $path = '/'.implode('/', explode('/', $file, -1));
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        file_put_contents($file, "<?php \n\n");
    }
//    public static function extractTranslations($content) {
//
//        $matches = array();
//        //$_['lang_title']                    = 'OpenBay Pro для Amazon | Item links';
//        //preg_match_all('/^\s*\$_\[\s*[\'\"]([^\'\"]+)[\'\"]\s*\]\s*=\s*[\'\"]([^\'\"]+)[\'\"]\s*;\s*$/imU', $content, $matches, PREG_SET_ORDER);
//
//        $res = array();
//        foreach($matches as $item) {
//            if (!array_key_exists($item[0], $mainList)) {
//                $mainList[$item[0]] = "!" . ucfirst(strtolower(str_replace('_', ' ', $item[1])));
//            }
//        }
//    }
}