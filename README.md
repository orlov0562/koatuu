# koatuu

KOATUU = Державний класифікатор об'єктів адміністративно-територіального устрою України (КОАТУУ)

Скачать актуальную базу можно тут: http://www.ukrstat.gov.ua/klasf/st_kls/op_koatuu_2016.htm

Структура таблицы для импорта SQL уже находится в дампе. Обратите внимание, что там же прописано удаление таблицы перед вставкой данных.

```
SET NAMES utf8;

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
```
