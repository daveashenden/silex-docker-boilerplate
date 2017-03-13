use `codetest`;
DROP TABLE IF EXISTS `sample_table` ;
CREATE TABLE `sample_table` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
