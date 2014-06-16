<?php
	$this->startSetup();
	$this->run(
		"ALTER TABLE {$this->getTable('banners/image')} ADD COLUMN `istitlevisiable` tinyint(1) NOT NULL DEFAULT '0' after `image_map` "
	);
	$this->endSetup();
	
