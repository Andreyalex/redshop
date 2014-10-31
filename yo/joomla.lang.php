<?php

class YoshopLang {

    public static function updateLangFile($targetFile, $rootDir)
    {
        $allowedExts = array('php', 'xml');
        $mainList = parse_ini_file($targetFile);

        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootDir));
        $files = array();
        foreach ($iterator as $splFileInfo) {
            if($splFileInfo->isFile() && in_array($splFileInfo->getExtension(), $allowedExts)) {
                $files[] = $splFileInfo->getPathname();
            }
        }

        foreach($files as $file) {
            $content = file_get_contents($file);
            $matches = array();
            //preg_match_all('/JText[^\s]+(\(\"(.+)\"\)/imU', $content, $matches);
            preg_match_all('/COM_[A-Z]+_([A-Z_]+)/', $content, $matches, PREG_SET_ORDER);

            foreach($matches as $item) {
                if (!array_key_exists($item[0], $mainList)) {
                    $mainList[$item[0]] = "!" . ucfirst(strtolower(str_replace('_', ' ', $item[1])));
                }
            }
        }

        self::saveToIniFile($targetFile, $mainList);
    }

    public static function saveToIniFile($targetFile, $mainList)
    {
        $res = '';
        foreach($mainList as $key => $val) {
            $res .= $key.'="'.addcslashes($val, '"')."\"\n";
        }

        file_put_contents($targetFile, $res);
    }
}