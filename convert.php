<?php

    $data = file('koatuu_xls.csv');

    unset($data[0]);

    file_put_contents('koatuu_xls.sql', 'SET NAMES utf8;
DROP TABLE IF EXISTS `koatuu`;
CREATE TABLE `koatuu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lvl1` varchar(16) NOT NULL,
  `lvl2` varchar(16) NOT NULL,
  `lvl3` varchar(16) NOT NULL,
  `lvl4` varchar(16) NOT NULL,
  `cat` varchar(16) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lvl1` (`lvl1`),
  KEY `lvl2` (`lvl2`),
  KEY `lvl3` (`lvl3`),
  KEY `lvl4` (`lvl4`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
'.PHP_EOL.PHP_EOL);

    foreach($data as $k=>$line) {
        $csv = str_getcsv($line);

        $sql = 'INSERT INTO `koatuu` SET'
               .' `lvl1` = "'.$csv[0].'", '
               .' `lvl2` = "'.$csv[1].'", '
               .' `lvl3` = "'.$csv[2].'", '
               .' `lvl4` = "'.$csv[3].'", '
               .' `cat` = "'.$csv[4].'", '
               .' `title` = "'.$csv[5].'"'
               .';'.PHP_EOL
        ;

        file_put_contents('koatuu_xls.sql', $sql, FILE_APPEND);
    }

