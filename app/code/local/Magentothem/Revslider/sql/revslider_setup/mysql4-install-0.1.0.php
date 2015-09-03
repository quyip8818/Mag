<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('revslider')};
CREATE TABLE {$this->getTable('revslider')} (
  `revslider_id` int(11) unsigned NOT NULL auto_increment,
   title tinytext NOT NULL,
   alias tinytext,
   params text NOT NULL,
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`revslider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('revslider')};
CREATE TABLE IF NOT EXISTS {$this->getTable('revslider/slide')} (
 `slide_id` int(10) NOT NULL auto_increment,
 `revslider_id` int(10) NOT NULL,
 `title` varchar(255) NOT NULL default '',
 `params` text NOT NULL default '',
 `layers` text NOT NULL default '',
 `status` varchar(255) NOT NULL default '1',
 `s_order` int(10) NOT NULL default '0',
 PRIMARY KEY  (`slide_id`),
 KEY `FK_revslider` (`revslider_id`),
 CONSTRAINT `FK_revslider` FOREIGN KEY (`revslider_id`) REFERENCES {$this->getTable('revslider')} (`revslider_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('revslider')};
CREATE TABLE IF NOT EXISTS {$this->getTable('revslider/caption')} (
 `caption_id` int(10) NOT NULL auto_increment,
  handle text NOT NULL,
  settings text,
  hover text,
  params text NOT NULL,
 PRIMARY KEY  (`caption_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS {$this->getTable('revslider')};
CREATE TABLE IF NOT EXISTS {$this->getTable('revslider/animation')} (
 `animation_id` int(10) NOT NULL auto_increment,
  handle text NOT NULL,
  params text NOT NULL,
 PRIMARY KEY  (`animation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->run("
INSERT INTO `revslider_caption` VALUES ('1', '.tp-caption.big_yellow', null, null, '{\"position\":\"absolute\",\"color\":\"#ffd658\",\"text-shadow\":\"none\",\"font-weight\":\"400\",\"font-size\":\"100px\",\"line-height\":\"36px\",\"font-family\":\"\'Open Sans\'\",\"padding\":\"0px 4px\",\"padding-top\":\"1px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"transparent\"}');
INSERT INTO `revslider_caption` VALUES ('2', '.tp-caption.big_bluee', null, null, '{\"position\":\"absolute\",\"color\":\"blue\",\"text-shadow\":\"none\",\"font-weight\":\"400\",\"font-size\":\"78px\",\"line-height\":\"36px\",\"font-family\":\"\'Open Sans\'\",\"padding\":\"0px 4px\",\"padding-top\":\"1px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"transparent\"}');
INSERT INTO `revslider_caption` VALUES ('3', '.tp-caption.big_white', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"none\",\"font-weight\":\"700\",\"font-size\":\"36px\",\"line-height\":\"36px\",\"font-family\":\"Arial\",\"padding\":\"0px 4px\",\"padding-top\":\"1px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"#000\",\"letter-spacing\":\"-1.5px\"}');
INSERT INTO `revslider_caption` VALUES ('4', '.tp-caption.big_orange', null, null, '{\"position\":\"absolute\",\"color\":\"#ff7302\",\"text-shadow\":\"none\",\"font-weight\":\"700\",\"font-size\":\"36px\",\"line-height\":\"36px\",\"font-family\":\"Arial\",\"padding\":\"0px 4px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"#fff\",\"letter-spacing\":\"-1.5px\"}');
INSERT INTO `revslider_caption` VALUES ('6', '.tp-caption.medium_grey', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"0px 2px 5px rgba(0, 0, 0, 0.5)\",\"font-weight\":\"700\",\"font-size\":\"20px\",\"line-height\":\"20px\",\"font-family\":\"Arial\",\"padding\":\"2px 4px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"#888\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('7', '.tp-caption.small_text', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"0px 2px 5px rgba(0, 0, 0, 0.5)\",\"font-weight\":\"700\",\"font-size\":\"14px\",\"line-height\":\"20px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('8', '.tp-caption.medium_text', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"0px 2px 5px rgba(0, 0, 0, 0.5)\",\"font-weight\":\"700\",\"font-size\":\"20px\",\"line-height\":\"20px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('9', '.tp-caption.large_text', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"0px 2px 5px rgba(0, 0, 0, 0.5)\",\"font-weight\":\"700\",\"font-size\":\"40px\",\"line-height\":\"40px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('10', '.tp-caption.very_large_text', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"0px 2px 5px rgba(0, 0, 0, 0.5)\",\"font-weight\":\"700\",\"font-size\":\"60px\",\"line-height\":\"60px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\",\"letter-spacing\":\"-2px\"}');
INSERT INTO `revslider_caption` VALUES ('11', '.tp-caption.very_big_white', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"none\",\"font-weight\":\"800\",\"font-size\":\"60px\",\"line-height\":\"60px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\",\"padding\":\"0px 4px\",\"padding-top\":\"1px\",\"background-color\":\"#000\"}');
INSERT INTO `revslider_caption` VALUES ('12', '.tp-caption.very_big_black', null, null, '{\"position\":\"absolute\",\"color\":\"#000\",\"text-shadow\":\"none\",\"font-weight\":\"700\",\"font-size\":\"60px\",\"line-height\":\"60px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\",\"padding\":\"0px 4px\",\"padding-top\":\"1px\",\"background-color\":\"#fff\"}');
INSERT INTO `revslider_caption` VALUES ('13', '.tp-caption.modern_medium_fat', null, null, '{\"position\":\"absolute\",\"color\":\"#000\",\"text-shadow\":\"none\",\"font-weight\":\"800\",\"font-size\":\"24px\",\"line-height\":\"20px\",\"font-family\":\"\'Open Sans\', sans-serif\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('14', '.tp-caption.modern_medium_fat_white', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"none\",\"font-weight\":\"800\",\"font-size\":\"24px\",\"line-height\":\"20px\",\"font-family\":\"\'Open Sans\', sans-serif\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('15', '.tp-caption.modern_medium_light', null, null, '{\"position\":\"absolute\",\"color\":\"#000\",\"text-shadow\":\"none\",\"font-weight\":\"300\",\"font-size\":\"24px\",\"line-height\":\"20px\",\"font-family\":\"\'Open Sans\', sans-serif\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('16', '.tp-caption.modern_big_bluebg', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"none\",\"font-weight\":\"800\",\"font-size\":\"30px\",\"line-height\":\"36px\",\"font-family\":\"\'Open Sans\', sans-serif\",\"padding\":\"3px 10px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"#4e5b6c\",\"letter-spacing\":\"0\"}');
INSERT INTO `revslider_caption` VALUES ('17', '.tp-caption.modern_big_redbg', null, null, '{\"position\":\"absolute\",\"color\":\"#fff\",\"text-shadow\":\"none\",\"font-weight\":\"300\",\"font-size\":\"30px\",\"line-height\":\"36px\",\"font-family\":\"\'Open Sans\', sans-serif\",\"padding\":\"3px 10px\",\"padding-top\":\"1px\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"background-color\":\"#de543e\",\"letter-spacing\":\"0\"}');
INSERT INTO `revslider_caption` VALUES ('18', '.tp-caption.modern_small_text_dark', null, null, '{\"position\":\"absolute\",\"color\":\"#555\",\"text-shadow\":\"none\",\"font-size\":\"14px\",\"line-height\":\"22px\",\"font-family\":\"Arial\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-style\":\"none\",\"white-space\":\"nowrap\"}');
INSERT INTO `revslider_caption` VALUES ('19', '.tp-caption.boxshadow', null, null, '{\"-moz-box-shadow\":\"0px 0px 20px rgba(0, 0, 0, 0.5)\",\"-webkit-box-shadow\":\"0px 0px 20px rgba(0, 0, 0, 0.5)\",\"box-shadow\":\"0px 0px 20px rgba(0, 0, 0, 0.5)\"}');
INSERT INTO `revslider_caption` VALUES ('20', '.tp-caption.black', null, null, '{\"color\":\"#000\",\"text-shadow\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('21', '.tp-caption.noshadow', null, null, '{\"text-shadow\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('22', '.tp-caption.breeserifregular', '{\"hover\":\"\"}', '{\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"border-width\":\"0px\",\"border-color\":\"rgb(34, 34, 34)\",\"border-style\":\"none\"}', '{\"font-size\":\"44px\",\"line-height\":\"20px\",\"font-weight\":\"normal\",\"font-family\":\"breeserifregular\",\"color\":\"#ffffff\",\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"margin\":\"0px\",\"letter-spacing\":\"1px\",\"padding\":\"6px 13px 13px 13px\",\"border-width\":\"0px\",\"border-color\":\"rgb(255, 255, 255)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('23', '.tp-caption.boxshadow1', '{\"hover\":\"\"}', '[]', '{\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"margin\":\"0px\",\"letter-spacing\":\"1px\",\"padding\":\"6px 13px 13px 13px\",\"border-width\":\"0px\",\"border-color\":\"rgb(34, 34, 34)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('24', '.tp-caption.title_banner', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"44px\",\"line-height\":\"20px\",\"font-weight\":\"normal\",\"font-family\":\"breeserifregular\",\"color\":\"#486781\",\"text-decoration\":\"none\",\"text-transform\":\"uppercase\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-color\":\"rgb(72, 103, 129)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('25', '.tp-caption.title1_banner', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"20px\",\"line-height\":\"20px\",\"font-weight\":\"normal\",\"font-family\":\"titilliumwebsemibold\",\"color\":\"#7cbce5\",\"text-decoration\":\"none\",\"text-transform\":\"uppercase\",\"margin\":\"0px\",\"border-width\":\"0px\",\"border-color\":\"rgb(124, 188, 229)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('26', '.tp-caption.des_slider', '{\"hover\":\"\"}', '[]', '{\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"margin\":\"0px\",\"padding\":\"6px 10px 6px 10px\",\"border-width\":\"0px\",\"border-color\":\"rgb(34, 34, 34)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('27', '.tp-caption.title_slider', '{\"hover\":\"\"}', '[]', '{\"text-decoration\":\"none\",\"margin\":\"0px\",\"padding\":\"13px 10px 18px 10px\",\"background-color\":\"transparent\",\"font-size\":\"44px\",\"line-height\":\"20px\",\"font-weight\":\"normal\",\"font-family\":\"breeserifregular\",\"color\":\"#ecf0f1\",\"border-width\":\"0px\",\"border-color\":\"rgb(236, 240, 241)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('29', '.tp-caption.title_slider2', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"44px\",\"line-height\":\"20px\",\"font-weight\":\"normal\",\"font-family\":\"breeserifregular\",\"color\":\"rgb(236, 240, 241)\",\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"margin\":\"0px\",\"padding\":\"13px 15px 18px\",\"border-width\":\"0px\",\"border-color\":\"rgb(236, 240, 241)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('30', '.tp-caption.title1_slider2', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"20px\",\"line-height\":\"20px\",\"font-weight\":\"normal\",\"font-family\":\"titilliumwebregular\",\"color\":\"rgb(255, 255, 255)\",\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"margin\":\"0px\",\"padding\":\"6px 10px\",\"border-width\":\"0px\",\"border-color\":\"rgb(255, 255, 255)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('31', '.tp-caption.des_slider2', '{\"hover\":\"\"}', '\"\"', '{\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"border-width\":\"0px\",\"border-color\":\"rgb(34, 34, 34)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('32', '.tp-caption.text_icon', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"16px\",\"font-family\":\"titilliumwebsemibold\",\"color\":\"#555555\",\"text-decoration\":\"none\",\"text-transform\":\"uppercase\",\"font-weight\":\"normal\",\"border-width\":\"0px\",\"border-color\":\"rgb(85, 85, 85)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('33', '.tp-caption.text2_icon', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"14px\",\"font-family\":\"titilliumweb\",\"color\":\"#555555\",\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"text-transform\":\"inherit\",\"border-width\":\"0px\",\"border-color\":\"rgb(85, 85, 85)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('34', '.tp-caption.des_banner', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"14px\",\"font-family\":\"titilliumweb\",\"color\":\"#555555\",\"text-decoration\":\"none\",\"text-transform\":\"inherit\",\"margin\":\"0px\",\"width\":\"335px\",\"border-width\":\"0px\",\"border-color\":\"rgb(85, 85, 85)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('35', '.tp-caption.title_banner1', '{\"hover\":\"\"}', '\"\"', '{\"text-decoration\":\"none\",\"font-size\":\"44px\",\"font-family\":\"breeserifregular\",\"color\":\"#f9c831\",\"text-transform\":\"uppercase\",\"border-width\":\"0px\",\"border-color\":\"rgb(249, 200, 49)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('36', '.tp-caption.title1_banner1', '{\"hover\":\"\"}', '\"\"', '{\"text-decoration\":\"none\",\"text-transform\":\"uppercase\",\"color\":\"#333333\",\"font-size\":\"20px\",\"font-family\":\"titilliumwebsemibold\",\"border-width\":\"0px\",\"border-color\":\"rgb(51, 51, 51)\",\"border-style\":\"none\"}');
INSERT INTO `revslider_caption` VALUES ('37', '.tp-caption.des_banner1', '{\"hover\":\"\"}', '[]', '{\"font-size\":\"16px\",\"font-family\":\"titilliumwebsemibold\",\"color\":\"#ffffff\",\"padding\":\"10px 22px 10px 40px\",\"text-decoration\":\"none\",\"background-color\":\"transparent\",\"text-transform\":\"uppercase\",\"border-width\":\"0px\",\"border-color\":\"rgb(255, 255, 255)\",\"border-style\":\"none\"}');
");

$helper =  Mage::helper('revslider/data'); 
$helper ->importRevsliderData();
$installer->endSetup(); 