<?php
include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";

//�ݥ[�J�Ҳջy�t
define("_TAD_NEED_TADTOOLS"," �ݭn tadtools �ҲաA�i��<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad�Ч���</a>�U���C");
define("_MA_TADTHEMES_THEME_BASE","�����򥻳]�w");
define("_MA_TADTHEMES_THEME_KIND","�G������");
define("_MA_TADTHEMES_THEME_KIND_BOOTSTRAP","�]bootstrap �O�s�����T�����G���A�i�H�A�Φb�����Τ���˸m�W�æ۰ʽվ㪩���A��������Ҥ���12��A�Y�H1024�ѪR�רӻ��A�C�@���80px�C�^");
define("_MA_TADTHEMES_THEME_KIND_HTML","�]�@�몺XOOPS�����G���^");
define("_MA_TADTHEMES_THEME_KIND_MIX","�]�����e�ױĥΩT�w���A���������� bootstrap ��12��즡�^");
define("_MA_TADTHEMES_THEME_TYPE","��������");
define("_MA_TADTHEMES_THEME_WIDTH","�����e��");
define("_MA_TADTHEMES_LB_WIDTH","���ϰ�e��");
define("_MA_TADTHEMES_CB_WIDTH","���ϰ�e��");
define("_MA_TADTHEMES_RB_WIDTH","�k�ϰ�e��");
define("_MA_TADTHEMES_LB_COLOR","���ϰ��C��");
define("_MA_TADTHEMES_CB_COLOR","���ϰ��C��");
define("_MA_TADTHEMES_RB_COLOR","�k�ϰ��C��");
define("_MA_TADTHEMES_MARGIN_TOP","���W��ɶZ��");
define("_MA_TADTHEMES_MARGIN_BOTTOM","���U��ɶZ��");
define("_MA_TADTHEMES_BG_IMG","�I����");
define("_MA_TADTHEMES_BG_COLOR","�I���C��");
define("_MA_TADTHEMES_BG_REPEAT","�I������");
define("_MA_TADTHEMES_BG_REPEAT_NORMAL","�@�뭫��");
define("_MA_TADTHEMES_BG_REPEAT_X","�Ⱦ�V����");
define("_MA_TADTHEMES_BG_REPEAT_Y","�ȫ�������");
define("_MA_TADTHEMES_BG_NO_REPEAT","������");
define("_MA_TADTHEMES_BG_ATTACHMENT","�I���Ҧ�");
define("_MA_TADTHEMES_BG_ATTACHMENT_SCROLL","�H�e������");
define("_MA_TADTHEMES_BG_ATTACHMENT_FIXED","�T�w������");
define("_MA_TADTHEMES_BG_POSITION","�I����m");
define("_MA_TADTHEMES_BG_POSITION_LT","���W");
define("_MA_TADTHEMES_BG_POSITION_RT","�k�W");
define("_MA_TADTHEMES_BG_POSITION_LB","���U");
define("_MA_TADTHEMES_BG_POSITION_RB","�k�U");
define("_MA_TADTHEMES_BG_POSITION_CC","����");
define("_MA_TADTHEMES_BG_POSITION_CT","�W��");
define("_MA_TADTHEMES_BG_POSITION_CB","�U��");
define("_MA_TADTHEMES_NONE","�L");
define("_MA_TADTHEMES_LOGO_IMG","logo��");
define("_MA_TADTHEMES_LOGO_POSITION","logo�Ϧ�m");
define("_MA_TADTHEMES_LOGO_SLIDE","�m��ưʹϤ�ؤ�");
define("_MA_TADTHEMES_LOGO_PAGE","�m�󭶭��W");
define("_MA_TADTHEMES_NAVLOGO_IMG","�����Clogo��");
define("_MA_TADTHEMES_SLIDE_WIDTH","�ưʰϰ�e��");
define("_MA_TADTHEMES_SLIDE_HEIGHT","�ưʰϰ찪��");
define("_MA_TADTHEMES_SLIDE_DESC","<ol><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>�e�׬� 0 �ɪ�ܤ���ܷưʰϰ�</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>���׬� 0 �ɪ�ܦ۰ʧP�_���סC</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>�Ϥ������ؤ��i��J�����A�b�����ؤ���J<span style='color:blue;'>[url]http://���}[/url]</span>�h�i���Ϥ��[�W�s���C</li></ol>");
define("_MA_TAD_THEMES_FORM","�G���]�w");

define("_MA_TAD_THEMES_NOT_TAD_THEME","�ثe�ϥΤ��G���u%s�v�D Tad Theme �ۮe�G���A�L�k�ϥΦ��u��C<div>�ӧG���䤣��u%s�v�ɮסC</div>");

define("_MA_TAD_THEMES_TYPE1","�G�榡�]���k�ϰ�Ҧb����^");
define("_MA_TAD_THEMES_TYPE2","�G�榡�]���k�ϰ�Ҧb�k��^");
define("_MA_TAD_THEMES_TYPE3","�G�榡�]���ϰ�b����A�k�ϰ�b�U��^");
define("_MA_TAD_THEMES_TYPE4","�G�榡�]���ϰ�b�k��A�k�ϰ�b�U��^");
define("_MA_TAD_THEMES_TYPE5","�T�榡�зǰt�m");
define("_MA_TAD_THEMES_TYPE6","�T�榡�]���k�ϰ�Ҧb����^");
define("_MA_TAD_THEMES_TYPE7","�T�榡�]���k�ϰ�Ҧb�k��^");
define("_MA_TAD_THEMES_TYPE8","���榡�]���ϰ�b�W��A�k�ϰ�b�U��^");

define("_MA_TAD_THEMES_HEAD","�ưʹϤ�");
define("_MA_TAD_THEMES_LEFT","���ϰ�");
define("_MA_TAD_THEMES_CENTER","�D���e�Τ����ϰ�");
define("_MA_TAD_THEMES_RIGHT","�k�ϰ�");
define("_MA_TAD_THEMES_FOOT","����");
define("_MA_TAD_THEMES_UPLOAD","�W��");
define("_MA_TADTHEMES_NOTICE","<ul style='line-height:2em;'>
  <li>�D���e�ϫ�ĳ�ܤֺ��� 550px �H�W�e�סI</li>
  <li>�����u���������v�ɡA�������ȷ|�۰ʽվ�A�γ]����Ū�C</li>
  </ul>");
define("_MA_TADTHEMES_NOTICE2","<ul style='line-height:2em;'>
  <li>�Ҧ��Ϥ���i����FTP�W�ǡA�t�η|�۰ʱN���[�J��Ʈw�A�ò����Y�ϡC
    <ul style='list-style-type:circle;margin-left:20px;'>
      <li>�I���Ǧܡuuploads/�G���W��/bg�v�U</li>
      <li>logo�Ǧܡuuploads/�G���W��/logo�v�U</li>
      <li>�ưʹϤ��Ǧܡuuploads/�G���W��/slide�v�U</li>
    </ul>
  </li>
  <li>�R���Ϥ��ɡA�@�߱q��x�R���A�Ū����R��FTP�Ϥ��I</li>
  </ul>");
define("_MA_TADTHEMES_LOGO_PLACE","logo�Ϧ�m�վ�");

define("_MA_TADTHEMES_FONT_SIZE","��r�j�p");
define("_MA_TADTHEMES_FONT_COLOR","��r�C��");
define("_MA_TADTHEMES_LINK_COLOR","�s���C��");
define("_MA_TADTHEMES_HOVER_COLOR","����s���C��");
define("_MA_TADTHEMES_COL","��");
define("_MA_TADTHEMES_ITEMNAME","�W��");
define("_MA_TADTHEMES_ITEMURL","���}");
define("_MA_TADTHEMES_ADDITEM","�b�u%s�v���U�إߤ@�ӿﶵ");
define("_MA_TADTHEMES_SAVE_SORT","�԰ʱƧ�");
define("_MA_TADTHEMES_ROOT","�ڥؿ�");
define("_MA_TADTHEMES_WEB_MENU","�����\����");
define("_MA_TADTHEMES_IMPORT_MENU","�ֳt�פJ�D���");

define("_MA_TADTHEMES_BLOCK_TITLE","�϶����D�C");
define("_MA_TADTHEMES_BLOCK_TITLE_BUTTOM","�]�w���s");
define("_MA_TADTHEMES_BLOCK_TITLE_PADDING","���D�Y��");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS","�ꨤ�]�w");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS_Y","�ꨤ");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS_N","���]�w�]�����^");

define("_MA_TADTHEMES_NAVBAR","�����u��C");
define("_MA_TADTHEMES_NAVBAR_POSITION","�����u��C��m");
define("_MA_TADTHEMES_NAVBAR_POSITION_1","�W����w");
define("_MA_TADTHEMES_NAVBAR_POSITION_2","�U����w");
define("_MA_TADTHEMES_NAVBAR_POSITION_3","�ưʹϤ�W��");
define("_MA_TADTHEMES_NAVBAR_POSITION_6","�ưʹϤ�U��");
define("_MA_TADTHEMES_NAVBAR_POSITION_4","�G���w�]�e�{�覡");
define("_MA_TADTHEMES_NAVBAR_POSITION_5","���ϥξ����C");
define("_MA_TADTHEMES_NAVBAR_BG_COLOR","���h�C��");
define("_MA_TADTHEMES_NAVBAR_HOVER_COLOR","�s���϶�����");
define("_MA_TADTHEMES_TARGET_BLANK","�s����");
define("_MA_TADTHEMES_NAVBAR_COLOR","��r�C��");
define("_MA_TADTHEMES_NAVBAR_COLOR_HOVER","��r���L�C��");
define("_MA_TADTHEMES_NAVBAR_ICON_COLOR","�ϥ��C��");
define("_MA_TADTHEMES_NAVBAR_ICON_WHITE","�զ�ϥ�");
define("_MA_TADTHEMES_NAVBAR_ICON_BLACK","�¦�ϥ�");

define("_MA_TADTHEMES_CHANGE_KIND_DESC","���G���䴩�u�W�����G�������A�z�i�H�bHTML�T�w�e�קG�����H�ù��j�p�۰ʽվ㪺�۾A��BootStrap�G��������");
define("_MA_TADTHEMES_CHANGE_KIND","�����G������");

define("_MA_TADTHEMES_ITEMICON","�W�Ƕ��عϥ�");
define("_MA_TADTHEMES_ITEMBANNER","�W�Ƕ��رM�ݾ�T");
define("_MA_TADTHEMES_CONFIG2","�B�~�G���]�w");
define("_MA_TADTHEMES_DEFAULT","�w�]��");
define("_MA_TADTHEMES_BLOCK_POSITION","���]�w���ϰ�");
define("_MA_TADTHEMES_BLOCK_ALL_POSITION","�M�Ψ�Ҧ��ϰ�");
define("_MA_TADTHEMES_BLOCK_LEFT","���ϰ�");
define("_MA_TADTHEMES_BLOCK_RIGHT","�k�ϰ�");
define("_MA_TADTHEMES_BLOCK_TOP_CENTER","�W���ϰ�");
define("_MA_TADTHEMES_BLOCK_TOP_LEFT","�W�����ϰ�");
define("_MA_TADTHEMES_BLOCK_TOP_RIGHT","�W���k�ϰ�");
define("_MA_TADTHEMES_BLOCK_BOTTOM_CENTER","�U���ϰ�");
define("_MA_TADTHEMES_BLOCK_BOTTOM_LEFT","�U�����ϰ�");
define("_MA_TADTHEMES_BLOCK_BOTTOM_RIGHT","�U���k�ϰ�");
define("_MA_TADTHEMES_BLOCK_TITLE_SIZE","��r�j�p");

define("_MA_TADTHEMES_TO_DEFAULT","�M�����G���Ҧ��]�w�H��_���w�]��");
define("_MA_TADTHEMES_DEL_CONFIRM","�o�|�M�����G���Ҧ��]�w�A�ë�_���w�]�ȡI�T�w�n����H");

define("_MA_TADTHEMES_BASE_COLOR","���e���C��");
define("_MA_TADTHEMES_NAVBAR_IMG","�����C�I����");

define("_MA_TADTHEMES_BLOCK_STYLE","�϶�����˦���ʳ]�w");
define("_MA_TADTHEMES_BLOCK_TITLE_STYLE","�϶����D�˦���ʳ]�w");
define("_MA_TADTHEMES_BLOCK_CONTENT_STYLE","�϶����e�˦���ʳ]�w");
define("_MA_TADTHEMES_YOUR_STYLE","�z�]�w���˦����e");

define("_MA_TADTHEMES_SLIDE_DEFAULT_DESCRIPT","�z�i�H�q<b>�G���޲z����x�]�w�e��</b>�ק�o�������e�A���F�i�H�W�ǷưʹϤ��~�A�]�i�H�ۤv��J�Ϥ��������e�C�����G�����䴩HTML�y�k�C");

define("_MA_TADTHEMES_TARGET_FANCYBOX","�O�c�ĪG");
define("_MA_TADTHEMES_OF_LEVEL","������");
define("_MA_TADTHEMES_ICON","���Bootstrap�ϥ�");
?>
