#!/usr/bin/php
<?php

    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

//    if (!empty($_REQUEST['argv'])) {
//        $argv = $_REQUEST['argv'];
//    }

    if (!empty($argv[2]) && "$argv[1] $argv[2]" == 'lang update'){

        require_once (__DIR__.'/lang/opencart.php');

        $files = YoLangOpencart::getLangFiles('english', dirname(__DIR__));

        $repo = array();

        foreach($files as $file) {

            // If it is a main file
            if ($file[0] == $file[1].$file[2].'/'.$file[2].'.php') {
                $targetFile = $file[1].'russian/russian.php';
            } else {
                $targetFile = $file[1].'russian'.$file[3];
            }

            if(!is_file($targetFile)) {
                YoLangOpencart::createFile($targetFile);
            }

            YoLangOpencart::sanitizeFile($targetFile);

            $baseTranslations = YoLangOpencart::getFileTranslations($file[0]);
            $targetTranslations = YoLangOpencart::getFileTranslations($targetFile);
            $diff = array_diff_key($baseTranslations, $targetTranslations);

            // Fill the base of existing translations for further use
            foreach ($baseTranslations as $key => $val) {
                if (!empty($targetTranslations[$key])) {
                    $repo[$val] = $targetTranslations[$key];
                }
            }

            echo "\n File: ".$targetFile;
            foreach($diff as $key => $value) {

                echo "\n Key: ".$key." -> ".$value."\n:";

                $targetVal = null;

                // If this phrase has been previously found
                if (!empty($repo[$value])) {
                    $targetVal = $repo[$value];
                }

                if (!$targetVal) {
                    $targetVal = trim(fgets(STDIN));
                    if (empty($targetVal)) {
                        $targetVal = $value;
                    }
                } else {
                    echo $targetVal. ' <- automaticly';
                }

                YoLangOpencart::addTranslation($targetFile, $key, $targetVal);

                // Add translated for further
                $repo[$value] = $targetVal;
            }
        }

        echo "\nEnjoy!\n";
    }

    if (count($argv) == 1) {
        echo "\nUsage: yo/cli.php lang update \n";
    }