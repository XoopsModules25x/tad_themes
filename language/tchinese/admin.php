<?php
include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";

//�ݥ[�J�Ҳջy�t
define('_TAD_NEED_TADTOOLS', '�ݭn tadtools �ҲաA�i��<a href="http://campus-xoops.tn.edu.tw/modules/tad_modules/index.php?module_sn=1" target="_blank">XOOPS���P�[</a>�U���C');
define("_MA_TADTHEMES_THEME_BASE", "�����򥻳]�w");
define("_MA_TADTHEMES_THEME_KIND", "�G������");
define("_MA_TADTHEMES_THEME_KIND_BOOTSTRAP3", "�]bootstrap 3 �T�����G���A�i�H�A�Φb�����Φ�ʸ˸m�W�æ۰ʽվ㪩���A��������Ҥ���12��A�Y�H1024�ѪR�רӻ��A�C�@���80px�C�^");
define("_MA_TADTHEMES_THEME_KIND_HTML", "�]�@�몺XOOPS�����G���^");
define("_MA_TADTHEMES_THEME_KIND_MIX", "�]�����e�ױĥΩT�w���A���������� bootstrap ��12��즡�^");
define("_MA_TADTHEMES_THEME_TYPE", "��������");
define("_MA_TADTHEMES_THEME_WIDTH", "�����e��");
define("_MA_TADTHEMES_LB_WIDTH", "���ϰ�e��");
define("_MA_TADTHEMES_CB_WIDTH", "���ϰ�e��");
define("_MA_TADTHEMES_RB_WIDTH", "�k�ϰ�e��");
define("_MA_TADTHEMES_LB_COLOR", "���ϰ��C��");
define("_MA_TADTHEMES_CB_COLOR", "���ϰ��C��");
define("_MA_TADTHEMES_RB_COLOR", "�k�ϰ��C��");
define("_MA_TADTHEMES_MARGIN_TOP", "���W��ɶZ��");
define("_MA_TADTHEMES_MARGIN_BOTTOM", "���U��ɶZ��");
define("_MA_TADTHEMES_BG_IMG", "�I����");
define("_MA_TADTHEMES_BG_COLOR", "�I���C��");
define("_MA_TADTHEMES_BG_REPEAT", "�I������");
define("_MA_TADTHEMES_BG_REPEAT_NORMAL", "�@�뭫��");
define("_MA_TADTHEMES_BG_REPEAT_X", "�Ⱦ�V����");
define("_MA_TADTHEMES_BG_REPEAT_Y", "�ȫ�������");
define("_MA_TADTHEMES_BG_NO_REPEAT", "������");
define("_MA_TADTHEMES_BG_NO_REPEAT_COVER", "�����ơA�é�j�Ϥ��񺡵e��");
define("_MA_TADTHEMES_BG_NO_REPEAT_CONTAIN", "�����ơA���Y��H�e�{����Ϥ�");
define("_MA_TADTHEMES_BG_ATTACHMENT", "�I���Ҧ�");
define("_MA_TADTHEMES_BG_ATTACHMENT_SCROLL", "�H�e������");
define("_MA_TADTHEMES_BG_ATTACHMENT_FIXED", "�T�w������");
define("_MA_TADTHEMES_BG_POSITION", "�I����m");
define("_MA_TADTHEMES_BG_POSITION_LT", "���W");
define("_MA_TADTHEMES_BG_POSITION_RT", "�k�W");
define("_MA_TADTHEMES_BG_POSITION_LB", "���U");
define("_MA_TADTHEMES_BG_POSITION_RB", "�k�U");
define("_MA_TADTHEMES_BG_POSITION_CC", "����");
define("_MA_TADTHEMES_BG_POSITION_CT", "�W��");
define("_MA_TADTHEMES_BG_POSITION_CB", "�U��");
define("_MA_TADTHEMES_NONE", "�L");
define("_MA_TADTHEMES_LOGO_IMG", "logo��");
define("_MA_TADTHEMES_LOGO_POSITION", "logo�Ϧ�m");
define("_MA_TADTHEMES_LOGO_SLIDE", "�m��ưʹϤ�ؤ�");
define("_MA_TADTHEMES_LOGO_PAGE", "�m�󭶭��W");
define("_MA_TADTHEMES_NAVLOGO_IMG", "�����Clogo��");
define("_MA_TADTHEMES_SLIDE_WIDTH", "�ưʰϰ�e��");
define("_MA_TADTHEMES_SLIDE_HEIGHT", "�ưʰϰ찪��");
define("_MA_TADTHEMES_SLIDE_DESC", "<ol><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>�e�׬� 0 �ɪ�ܤ���ܷưʰϰ�</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>���׬� 0 �ɪ�ܦ۰ʧP�_���סC</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>�Ϥ������ؤ��i��J�����A�b�����ؤ���J <span style='color:blue;'>[url]http://���}[/url]</span> �i���Ϥ��[�W�s���C</li><li style='list-style-type:decimal;line-height:180%;list-style-position:outside;'>��<span style='color: red;'>[url_blank]http://���}[/url_blank]</span> �h�i�N�s���}�b�s�����C</li></ol>");
define("_MA_TAD_THEMES_FORM", "�G���]�w");

define("_MA_TAD_THEMES_NOT_TAD_THEME", "�ثe�ϥΤ��G���u%s�v�D Tad Theme �ۮe�G���A�L�k�ϥΦ��u��C<div>�ӧG���䤣��u%s�v�ɮסC</div>");
define("_MA_TAD_THEMES_TYPE1", "�G�榡�]���k�ϰ�Ҧb����^");
define("_MA_TAD_THEMES_TYPE2", "�G�榡�]���k�ϰ�Ҧb�k��^");
define("_MA_TAD_THEMES_TYPE3", "�G�榡�]���ϰ�b����A�k�ϰ�b�U��^");
define("_MA_TAD_THEMES_TYPE4", "�G�榡�]���ϰ�b�k��A�k�ϰ�b�U��^");
define("_MA_TAD_THEMES_TYPE5", "�T�榡�зǰt�m");
define("_MA_TAD_THEMES_TYPE6", "�T�榡�]���k�ϰ�Ҧb����^");
define("_MA_TAD_THEMES_TYPE7", "�T�榡�]���k�ϰ�Ҧb�k��^");
define("_MA_TAD_THEMES_TYPE8", "���榡�]���ϰ�b�W��A�k�ϰ�b�U��^");

define("_MA_TAD_THEMES_HEAD", "�ưʹϤ�");
define("_MA_TAD_THEMES_LEFT", "���ϰ�");
define("_MA_TAD_THEMES_CENTER", "�D���e�Τ����ϰ�");
define("_MA_TAD_THEMES_RIGHT", "�k�ϰ�");
define("_MA_TAD_THEMES_FOOT", "����");
define("_MA_TAD_THEMES_UPLOAD", "�W��");
define("_MA_TADTHEMES_NOTICE", "<ul style='line-height:2em;'>
  <li style='line-height:180%;list-style-position:outside;'>�D���e�ϫ�ĳ�ܤֺ��� 550px �H�W�e�סI</li>
  <li style='line-height:180%;list-style-position:outside;'>�����u���������v�ɡA�������ȷ|�۰ʽվ�A�γ]����Ū�C</li>
  </ul>");
define("_MA_TADTHEMES_NOTICE2", "<ul style='line-height:2em;'>
  <li style='line-height:180%;list-style-position:outside;'>�Ҧ��Ϥ���i����FTP�W�ǡA�t�η|�۰ʱN���[�J��Ʈw�A�ò����Y�ϡC
    <ul style='list-style-type:circle;margin-left:20px;'>
      <li style='line-height:180%;list-style-position:outside;'>�����I���Ǧܡu/themes/�G���W��/images/bg�v�U</li>
      <li style='line-height:180%;list-style-position:outside;'>�ưʹϤ��Ǧܡu/themes/�G���W��/images/slide�v�U</li>
      <li style='line-height:180%;list-style-position:outside;'>logo�϶Ǧܡu/themes/�G���W��/images/logo�v�U</li>
      <li style='line-height:180%;list-style-position:outside;'>�϶��I���Ǧܡu/themes/�G���W��/images/bt_bg�v�U</li>
      <li style='line-height:180%;list-style-position:outside;'>�����C�I���Ǧܡu/themes/�G���W��/images/nav_bg�v�U</li>
      <li style='line-height:180%;list-style-position:outside;'>�����Clogo�϶Ǧܡu/themes/�G���W��/images/navlogo�v�U</li>
    </ul>
  </li>
  <li style='line-height:180%;list-style-position:outside;'>�R���Ϥ��ɡA�@�߱q��x�R���A�Ū����R��FTP�Ϥ��I</li>
  </ul>");
define("_MA_TADTHEMES_LOGO_PLACE", "logo�Ϧ�m�վ�");
define("_MA_TADTHEMES_FONT_SIZE", "��r�j�p");
define("_MA_TADTHEMES_FONT_COLOR", "��r�C��");
define("_MA_TADTHEMES_LINK_COLOR", "�s���C��");
define("_MA_TADTHEMES_HOVER_COLOR", "����s���C��");
define("_MA_TADTHEMES_COL", "��");
define("_MA_TADTHEMES_ITEMNAME", "�W��");
define("_MA_TADTHEMES_ITEMURL", "���}");
define("_MA_TADTHEMES_ADDITEM", "�b�u%s�v���U�إߤ@�ӿﶵ");
define("_MA_TADTHEMES_SAVE_SORT", "�԰ʱƧ�");
define("_MA_TADTHEMES_ROOT", "�ڥؿ�");
define("_MA_TADTHEMES_WEB_MENU", "�����\����");
define("_MA_TADTHEMES_IMPORT_MENU", "�ֳt�פJ�D���");
define("_MA_TADTHEMES_BLOCK_TITLE", "�϶����D�C");
define("_MA_TADTHEMES_BLOCK_TITLE_BUTTOM", "�]�w���s");
define("_MA_TADTHEMES_BLOCK_TITLE_PADDING", "���D�Y��");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS", "�ꨤ�]�w");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS_Y", "�ꨤ");
define("_MA_TADTHEMES_BLOCK_TITLE_RADIUS_N", "���]�w�]�����^");
define("_MA_TADTHEMES_NAVBAR", "�����u��C");
define("_MA_TADTHEMES_NAVBAR_POSITION", "�����u��C��m");
define("_MA_TADTHEMES_NAVBAR_POSITION_1", "�W����w");
define("_MA_TADTHEMES_NAVBAR_POSITION_2", "�U����w");
define("_MA_TADTHEMES_NAVBAR_POSITION_3", "�ưʹϤ�W��");
define("_MA_TADTHEMES_NAVBAR_POSITION_6", "�ưʹϤ�U��");
define("_MA_TADTHEMES_NAVBAR_POSITION_4", "�G���w�]�e�{�覡");
define("_MA_TADTHEMES_NAVBAR_POSITION_5", "���ϥξ����C");
define("_MA_TADTHEMES_NAVBAR_BG_COLOR", "���h�C��");
define("_MA_TADTHEMES_NAVBAR_HOVER_COLOR", "�s���϶�����");
define("_MA_TADTHEMES_TARGET_BLANK", "�s����");
define("_MA_TADTHEMES_NAVBAR_COLOR", "��r�C��");
define("_MA_TADTHEMES_NAVBAR_COLOR_HOVER", "��r���L�C��");
define("_MA_TADTHEMES_NAVBAR_ICON_COLOR", "�ϥ��C��");
define("_MA_TADTHEMES_NAVBAR_ICON_WHITE", "�զ�ϥ�");
define("_MA_TADTHEMES_NAVBAR_ICON_BLACK", "�¦�ϥ�");
define("_MA_TADTHEMES_CHANGE_KIND_DESC", "���G���䴩�u�W�����G�������A�z�i�H�bHTML�T�w�e�קG�����H�ù��j�p�۰ʽվ㪺�۾A��BootStrap�G��������");
define("_MA_TADTHEMES_CHANGE_KIND", "�����G������");
define("_MA_TADTHEMES_ITEMICON", "�W�Ƕ��عϥ�");
define("_MA_TADTHEMES_ITEMBANNER", "�W�Ƕ��رM�ݾ�T");
define("_MA_TADTHEMES_CONFIG2", "�B�~�G���]�w");
define("_MA_TADTHEMES_DEFAULT", "�w�]��");
define("_MA_TADTHEMES_BLOCK_POSITION", "���]�w���ϰ�");
define("_MA_TADTHEMES_BLOCK_ALL_POSITION", "�M�Ψ�Ҧ��ϰ�");
define("_MA_TADTHEMES_BLOCK_LEFT", "���ϰ�");
define("_MA_TADTHEMES_BLOCK_RIGHT", "�k�ϰ�");
define("_MA_TADTHEMES_BLOCK_TOP_CENTER", "�W���ϰ�");
define("_MA_TADTHEMES_BLOCK_TOP_LEFT", "�W�����ϰ�");
define("_MA_TADTHEMES_BLOCK_TOP_RIGHT", "�W���k�ϰ�");
define("_MA_TADTHEMES_BLOCK_BOTTOM_CENTER", "�U���ϰ�");
define("_MA_TADTHEMES_BLOCK_BOTTOM_LEFT", "�U�����ϰ�");
define("_MA_TADTHEMES_BLOCK_BOTTOM_RIGHT", "�U���k�ϰ�");
define("_MA_TADTHEMES_BLOCK_TITLE_SIZE", "��r�j�p");
define("_MA_TADTHEMES_TO_DEFAULT", "�M�����G���Ҧ��]�w�H��_���w�]��");
define("_MA_TADTHEMES_DEL_CONFIRM", "�o�|�M�����G���Ҧ��]�w�A�ë�_���w�]�ȡI�T�w�n����H");
define("_MA_TADTHEMES_BASE_COLOR", "���e���C��");
define("_MA_TADTHEMES_NAVBAR_IMG", "�����C�I����");
define("_MA_TADTHEMES_BLOCK_STYLE", "�϶�����˦���ʳ]�w");
define("_MA_TADTHEMES_BLOCK_TITLE_STYLE", "�϶����D�˦���ʳ]�w");
define("_MA_TADTHEMES_BLOCK_CONTENT_STYLE", "�϶����e�˦���ʳ]�w");
define("_MA_TADTHEMES_YOUR_STYLE", "�z�]�w���˦����e");
define("_MA_TADTHEMES_TARGET_FANCYBOX", "�O�c�ĪG");
define("_MA_TADTHEMES_OF_LEVEL", "������");
define("_MA_TADTHEMES_ICON", "��� fontawesome �ϥ�");
define("_MA_TADTHEMES_LOGO_CENTER", "�m��");
define("_MA_TADTHEMES_EXPORT", "�ץX config.php �]�w��");
define("_MA_TADTHEMES_EXPORT2", "�ץX config2.php �]�w��");

define('_MA_TADTHEMES_NAVBAR_PY', '�����ﶵ�W�U�Z��');
define('_MA_TADTHEMES_NAVBAR_PX', '�����ﶵ���k�Z��');

define('_MA_TADTHEMES_LOGO_DESIGN', '²��Logo�]�p');
define('_MA_TADTHEMES_LOGO_INPUT_TEXT', '��J��r');
define('_MA_TADTHEMES_LOGO_TEXT_COLOR', '��r�C��');
define('_MA_TADTHEMES_LOGO_BORDER_COLOR', '����C��');
define('_MA_TADTHEMES_LOGO_TEXT_SIZE', '��r�j�p');
define('_MA_TADTHEMES_LOGO_BORDER_SIZE', '�~�زʲ�');
define('_MA_TADTHEMES_LOGO_SELECT_FONT', '��ܦr��');
define('_MA_TADTHEMES_LOGO_MAKE_PNG', '���͹Ϥ�');
define('_MA_TADTHEMES_LOGO_NEED_FONT', '�Цܤ֥��W�Ǥ@�Ӧr��');
define('_MA_TADTHEMES_LOGO_SAVE_PIC', '�x�s�Ϥ�');
define('_MA_TADTHEMES_LOGO_DEMO_BGCOLOR', '�d�ҭI����G');
define('_MA_TADTHEMES_FONT_TOOL', '�r���ɺ޲z');
define('_MA_TADTHEMES_FONT_UPLOAD', '�W�Ǧr����');
define('_MA_TADTHEMES_FONT_NOTE', '�Ȥ䴩 ttf�Botf�Bttc �r���ɡA�Y�L�r���A�i�q<a href="https://forum.gamer.com.tw/C.php?bsn=60076&snA=3906436" target="_blank">�o�̤U��</a>');
define('_MA_TADTHEMES_FONT_SAVE', '�x�s�r����');
