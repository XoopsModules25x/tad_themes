<?php

function xoops_module_update_tad_themes(&$module, $old_version) {
    GLOBAL $xoopsDB;

    if(!chk_chk1()) go_update1();
    if(!chk_chk2()) go_update2();
    if(!chk_chk3()) go_update3();
    if(!chk_chk4()) go_update4();
    if(!chk_chk5()) go_update5();
    if(!chk_chk6()) go_update6();
    if(!chk_chk7()) go_update7();
    if(!chk_chk8()) go_update8();
    if(!chk_chk9()) go_update9();

    mk_dir(XOOPS_ROOT_PATH."/uploads/tad_themes");
    return true;
}


//�s�W�G���������
function chk_chk1(){
  global $xoopsDB;
  $sql="select count(`theme_kind`) from ".$xoopsDB->prefix("tad_themes");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}

function go_update1(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes")." ADD `theme_kind` varchar(255) NOT NULL default'html'";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}


//�s�Wtad_themes_menu��ƪ�
function chk_chk2(){
  global $xoopsDB;
  $sql="select count(*) from ".$xoopsDB->prefix("tad_themes_menu");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}

function go_update2(){
  global $xoopsDB;
  $sql="CREATE TABLE `".$xoopsDB->prefix("tad_themes_menu")."` (
  `menuid` smallint(5) unsigned NOT NULL auto_increment,
  `of_level` smallint(5) unsigned NOT NULL default 0,
  `position` smallint(5) unsigned NOT NULL default 0,
  `itemname` varchar(255) NOT NULL default '',
  `itemurl` varchar(255) NOT NULL default '',
  `membersonly` enum('0','1') NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY  (`menuid`),
  KEY `of_level` (`of_level`)
)  ENGINE=MyISAM;";
  $xoopsDB->queryF($sql);
}

//�s�W�϶����
function chk_chk3(){
  global $xoopsDB;
  $sql="select count(`block_config`) from ".$xoopsDB->prefix("tad_themes");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}

function go_update3(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes")."
  ADD `block_config` enum('right','left') NOT NULL DEFAULT 'right',
  ADD `bt_text` varchar(255) NOT NULL DEFAULT '',
  ADD `bt_text_padding` tinyint(4) NOT NULL DEFAULT '33',
  ADD `bt_bg_color` varchar(255) NOT NULL DEFAULT '',
  ADD `bt_bg_img` varchar(255) NOT NULL DEFAULT '',
  ADD `bt_bg_repeat` enum('0','1') NOT NULL DEFAULT '0',
  ADD `bt_radius` enum('0','1') NOT NULL DEFAULT '1'";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}

//�s�W�����u��C���
function chk_chk4(){
  global $xoopsDB;
  $sql="select count(`navbar_pos`) from ".$xoopsDB->prefix("tad_themes");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}

function go_update4(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes")."
  ADD `navbar_pos` enum('navbar-fixed-top','navbar-fixed-bottom','navbar-static-top','not-use') NOT NULL ,
  ADD `navbar_bg_top` varchar(255) NOT NULL DEFAULT '#54b4eb',
  ADD `navbar_bg_bottom` varchar(255) NOT NULL DEFAULT '#2fa4e7',
  ADD `navbar_hover` varchar(255) NOT NULL DEFAULT '#1684c2'";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}


//�s�W������
function chk_chk5(){
  global $xoopsDB;
  $sql="select count(`target`) from ".$xoopsDB->prefix("tad_themes_menu");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}

function go_update5(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes_menu")."
  ADD `mainmenu` enum('0','1') NOT NULL default '0' ,
  ADD `target` varchar(255) NOT NULL default '',
  ADD `icon` varchar(255) NOT NULL default 'icon-th-list'";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}

//�s�Woriginal_filename���
function chk_chk6(){
  global $xoopsDB;
  $sql="select count(`original_filename`) from ".$xoopsDB->prefix("tad_themes_files_center");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}


function go_update6(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes_files_center")."
  ADD `original_filename` varchar(255) NOT NULL default ''";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());

  $sql="update ".$xoopsDB->prefix("tad_themes_files_center")." set
  `original_filename`=`description`";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}

//�s�Whash_filename���
function chk_chk7(){
  global $xoopsDB;
  $sql="select count(`hash_filename`) from ".$xoopsDB->prefix("tad_themes_files_center");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}


function go_update7(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes_files_center")."
  ADD `hash_filename` varchar(255) NOT NULL default '',
  ADD `sub_dir` varchar(255) NOT NULL default ''";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}

//�s�Whash_filename���
function chk_chk8(){
  global $xoopsDB;
  $sql="select count(`navbar_color`) from ".$xoopsDB->prefix("tad_themes");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}


function go_update8(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes")."
  ADD `navbar_color` varchar(255) NOT NULL default '#FFFFFF',
  ADD `navbar_color_hover` varchar(255) NOT NULL default 'yellow',
  ADD `navbar_icon` varchar(255) NOT NULL default ''
  ";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}

//�s�W theme_width ���
function chk_chk9(){
  global $xoopsDB;
  $sql="select count(`theme_width`) from ".$xoopsDB->prefix("tad_themes");
  $result=$xoopsDB->query($sql);
  if(empty($result)) return false;
  return true;
}


function go_update9(){
  global $xoopsDB;
  $sql="ALTER TABLE ".$xoopsDB->prefix("tad_themes")."
  ADD `theme_width` varchar(255) NOT NULL default '980' after `theme_type`;
  ";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());

  $sql="update ".$xoopsDB->prefix("tad_themes")." set `theme_width`=12 where theme_kind='bootstrap'";
  $xoopsDB->queryF($sql) or redirect_header(XOOPS_URL."/modules/system/admin.php?fct=modulesadmin",30,  mysql_error());
}


//�إߥؿ�
function mk_dir($dir=""){
    //�Y�L�ؿ��W�٨q�Xĵ�i�T��
    if(empty($dir))return;
    //�Y�ؿ����s�b���ܫإߥؿ�
    if (!is_dir($dir)) {
        umask(000);
        //�Y�إߥ��Ѩq�Xĵ�i�T��
        mkdir($dir, 0777);
    }
}

//�����ؿ�
function full_copy( $source="", $target=""){
  if ( is_dir( $source ) ){
    @mkdir( $target );
    $d = dir( $source );
    while ( FALSE !== ( $entry = $d->read() ) ){
      if ( $entry == '.' || $entry == '..' ){
        continue;
      }

      $Entry = $source . '/' . $entry;
      if ( is_dir( $Entry ) ) {
        full_copy( $Entry, $target . '/' . $entry );
        continue;
      }
      copy( $Entry, $target . '/' . $entry );
    }
    $d->close();
  }else{
    copy( $source, $target );
  }
}


function rename_win($oldfile,$newfile) {
   if (!rename($oldfile,$newfile)) {
      if (copy ($oldfile,$newfile)) {
         unlink($oldfile);
         return TRUE;
      }
      return FALSE;
   }
   return TRUE;
}

function delete_directory($dirname) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname."/".$file))
                unlink($dirname."/".$file);
            else
                delete_directory($dirname.'/'.$file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}

?>
