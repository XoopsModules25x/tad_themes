<?php
include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";

//需加入模組語系
define("_TAD_NEED_TADTOOLS","This module need tadtools module. You can download tadtools from <a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad's web</a>.");
define("_MA_TADTHEMES_THEME_BASE","Theme Setup");
define("_MA_TADTHEMES_THEME_KIND","Theme Kind");
define("_MA_TADTHEMES_THEME_KIND_BOOTSTRAP","（XOOPS bootstrap themes)");
define("_MA_TADTHEMES_THEME_KIND_BOOTSTRAP3","（XOOPS bootstrap3 themes)");
define("_MA_TADTHEMES_THEME_KIND_HTML","(XOOPS themes)");
define("_MA_TADTHEMES_THEME_KIND_MIX","(bootstrap only for blocks)");
define("_MA_TADTHEMES_THEME_TYPE","Theme Type");
define("_MA_TADTHEMES_THEME_WIDTH","Theme width");
define("_MA_TADTHEMES_LB_WIDTH","Left zone width");
define("_MA_TADTHEMES_CB_WIDTH","Center zone width :");
define("_MA_TADTHEMES_RB_WIDTH","right zone width");
define("_MA_TADTHEMES_LB_COLOR","Left zone color");
define("_MA_TADTHEMES_CB_COLOR","Center zone color");
define("_MA_TADTHEMES_RB_COLOR","right zone color");
define("_MA_TADTHEMES_MARGIN_TOP","margin-top");
define("_MA_TADTHEMES_MARGIN_BOTTOM","margin-bottom");
define("_MA_TADTHEMES_BG_IMG","background-image");
define("_MA_TADTHEMES_BG_COLOR","background-color");
define("_MA_TADTHEMES_BG_REPEAT","background-repeart");
define("_MA_TADTHEMES_BG_REPEAT_NORMAL","repeart");
define("_MA_TADTHEMES_BG_REPEAT_X","repeart_x");
define("_MA_TADTHEMES_BG_REPEAT_Y","repeart_y");
define("_MA_TADTHEMES_BG_NO_REPEAT","no_repeart");
define("_MA_TADTHEMES_BG_ATTACHMENT","background");
define("_MA_TADTHEMES_BG_ATTACHMENT_SCROLL","scroll");
define("_MA_TADTHEMES_BG_ATTACHMENT_FIXED","fixed");
define("_MA_TADTHEMES_BG_POSITION","background-postiton");
define("_MA_TADTHEMES_BG_POSITION_LT","left top");
define("_MA_TADTHEMES_BG_POSITION_RT","right top");
define("_MA_TADTHEMES_BG_POSITION_LB","left bottom");
define("_MA_TADTHEMES_BG_POSITION_RB","right bottom");
define("_MA_TADTHEMES_BG_POSITION_CC","center center");
define("_MA_TADTHEMES_BG_POSITION_CT","center top");
define("_MA_TADTHEMES_BG_POSITION_CB","center bottom");
define("_MA_TADTHEMES_NONE","none");
define("_MA_TADTHEMES_LOGO_IMG","logo");
define("_MA_TADTHEMES_LOGO_POSITION","logo position");
define("_MA_TADTHEMES_LOGO_SLIDE","on slide");
define("_MA_TADTHEMES_LOGO_PAGE","on page");
define("_MA_TADTHEMES_NAVLOGO_IMG","NavBar logo");
define("_MA_TADTHEMES_SLIDE_WIDTH","Slide Width");
define("_MA_TADTHEMES_SLIDE_HEIGHT","Slide Height");
define("_MA_TADTHEMES_SLIDE_DESC","<ol><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>Slide Width =0 (hide slide)</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>Slide Height = 0(auto height)</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>You can input \"<b><u>[url]http://some.web.url[/url]</u></b>\" to add link for slide image.</li></ol>");
define("_MA_TAD_THEMES_FORM","Theme Setup");

define("_MA_TAD_THEMES_NOT_TAD_THEME","Defaut Theme \"%s\" can't compatible with Tad Theme.<div>\"%s\" not founded.</div>");

define("_MA_TAD_THEMES_TYPE1","2 Columns (All Left)");
define("_MA_TAD_THEMES_TYPE2","2 Columns (All Right)");
define("_MA_TAD_THEMES_TYPE3","2 Columns (Left + Bottom)");
define("_MA_TAD_THEMES_TYPE4","2 Columns (Right + Bottom)");
define("_MA_TAD_THEMES_TYPE5","3 Columns");
define("_MA_TAD_THEMES_TYPE6","3 Columns (All Left)");
define("_MA_TAD_THEMES_TYPE7","3 Columns (All Right)");
define("_MA_TAD_THEMES_TYPE8","Single Columns");

define("_MA_TAD_THEMES_HEAD","Theme Head");
define("_MA_TAD_THEMES_LEFT","Left Zone");
define("_MA_TAD_THEMES_CENTER","Content and Center Zone");
define("_MA_TAD_THEMES_RIGHT","Right Zone");
define("_MA_TAD_THEMES_FOOT","Foot");
define("_MA_TAD_THEMES_UPLOAD","Upload ");
define("_MA_TADTHEMES_NOTICE","<ul style='line-height:2em;'>
  <li>Content and Center Zone width need more than 550px</li>
  </ul>");
define("_MA_TADTHEMES_NOTICE2","<ul style='line-height:2em;'>
  <li>All pictures can be uploaded directly to FTP, the system will automatically be added to the database, and generate thumbnails.
    <ul style='list-style-type:circle;margin-left:20px;'>
      <li>Background images : /themes/YourTheme/images/bg</li>
      <li>Slide images: /themes/YourTheme/images/slide</li>
      <li>Logo images: /themes/YourTheme/images/logo</li>
      <li>Blocks background images: /themes/YourTheme/images/bt_bg</li>
      <li>Navbar background images: /themes/YourTheme/images/nav_bg</li>
      <li>Navbar logo images: /themes/YourTheme/images/navlogo</li>
    </ul>
  </li>
  <li>When you delete pictures, all from the background deleted, do not just delete FTP photo!</li>
  </ul>");
define("_MA_TADTHEMES_LOGO_PLACE","setup logo position");

define("_MA_TADTHEMES_FONT_SIZE","font size");
define("_MA_TADTHEMES_FONT_COLOR","font color");
define("_MA_TADTHEMES_LINK_COLOR","link color");
define("_MA_TADTHEMES_HOVER_COLOR","hover color");
define("_MA_TADTHEMES_COL","");
define("_MA_TADTHEMES_ITEMNAME","Name");
define("_MA_TADTHEMES_ITEMURL","URL");
define("_MA_TADTHEMES_ADDITEM","Add item in %s");
define("_MA_TADTHEMES_SAVE_SORT","Drag sort");
define("_MA_TADTHEMES_ROOT","Root");
define("_MA_TADTHEMES_WEB_MENU","Menu");
define("_MA_TADTHEMES_IMPORT_MENU","Import Menu");

define("_MA_TADTHEMES_BLOCK_TITLE","Block Title");
define("_MA_TADTHEMES_BLOCK_TITLE_BUTTOM","Setup button");
define("_MA_TADTHEMES_BLOCK_TITLE_PADDING","Block title left padding");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS","Radius setup");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS_Y","Radius");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS_N","None");

define("_MA_TADTHEMES_NAVBAR","Navbar");
define("_MA_TADTHEMES_NAVBAR_POSITION","Navbar position");
define("_MA_TADTHEMES_NAVBAR_POSITION_1","Top fixed");
define("_MA_TADTHEMES_NAVBAR_POSITION_2","Bottom fixed");
define("_MA_TADTHEMES_NAVBAR_POSITION_3","Slide top");
define("_MA_TADTHEMES_NAVBAR_POSITION_6","Slide bottom");
define("_MA_TADTHEMES_NAVBAR_POSITION_4","By theme setup");
define("_MA_TADTHEMES_NAVBAR_POSITION_5","Hide");
define("_MA_TADTHEMES_NAVBAR_BG_COLOR","Color");
define("_MA_TADTHEMES_NAVBAR_HOVER_COLOR","Background Color");
define("_MA_TADTHEMES_TARGET_BLANK","_blank");
define("_MA_TADTHEMES_NAVBAR_COLOR","Text Color");
define("_MA_TADTHEMES_NAVBAR_COLOR_HOVER","Text hover Color");
define("_MA_TADTHEMES_NAVBAR_ICON_COLOR","Icon color");
define("_MA_TADTHEMES_NAVBAR_ICON_WHITE","white icon");
define("_MA_TADTHEMES_NAVBAR_ICON_BLACK","black icon");

define("_MA_TADTHEMES_ITEMICON","Item Icon");
define("_MA_TADTHEMES_ITEMBANNER","Item Banner");
define("_MA_TADTHEMES_CONFIG2","Other theme config");
define("_MA_TADTHEMES_DEFAULT","Default");
define("_MA_TADTHEMES_BLOCK_POSITION","Block position");
define("_MA_TADTHEMES_BLOCK_ALL_POSITION","Apply to all blocks");
define("_MA_TADTHEMES_BLOCK_LEFT","Left");
define("_MA_TADTHEMES_BLOCK_RIGHT","Right");
define("_MA_TADTHEMES_BLOCK_TOP_CENTER","Top center");
define("_MA_TADTHEMES_BLOCK_TOP_LEFT","Top center left");
define("_MA_TADTHEMES_BLOCK_TOP_RIGHT","Top center right");
define("_MA_TADTHEMES_BLOCK_BOTTOM_CENTER","Bottom center");
define("_MA_TADTHEMES_BLOCK_BOTTOM_LEFT","Bottom center left");
define("_MA_TADTHEMES_BLOCK_BOTTOM_RIGHT","Bottom center right");
define("_MA_TADTHEMES_BLOCK_TITLE_SIZE","Font size");

define("_MA_TADTHEMES_TO_DEFAULT","Restored to the default");
define("_MA_TADTHEMES_DEL_CONFIRM","This will clear this theme settings and restore default values​​! You sure you want to perform?");

define("_MA_TADTHEMES_BASE_COLOR","Base color");
define("_MA_TADTHEMES_NAVBAR_IMG","Navbar background");

define("_MA_TADTHEMES_BLOCK_STYLE","Block CSS");
define("_MA_TADTHEMES_BLOCK_TITLE_STYLE","Block title CSS");
define("_MA_TADTHEMES_BLOCK_CONTENT_STYLE","Block content CSS");
define("_MA_TADTHEMES_YOUR_STYLE","Your style content");

define("_MA_TADTHEMES_SLIDE_DEFAULT_DESCRIPT","You can upload slider images from tad_theme admin. You can edit descript for images with HTML tag.");

define("_MA_TADTHEMES_TARGET_FANCYBOX","ColorBox");
define("_MA_TADTHEMES_OF_LEVEL","Parent");
define("_MA_TADTHEMES_ICON","fontawesome icon");
?>
