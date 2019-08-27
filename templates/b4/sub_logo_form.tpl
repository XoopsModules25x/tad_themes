<h2><{$smarty.const._MA_TADTHEMES_LOGO_DESIGN}></h2>
<{if $fonts}>
    <form action="font2pic.php" id="myForm" method="post" role="form">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label text-sm-right"><{$smarty.const._MA_TADTHEMES_LOGO_INPUT_TEXT}></label>
            <div class="col-sm-10">
                <input type="text" class="form-control validate[required]" name="title" id="title" placeholder="<{$smarty.const._MA_TADTHEMES_LOGO_INPUT_TEXT}>" value="<{$title}>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-sm-right"><{$smarty.const._MA_TADTHEMES_LOGO_TEXT_COLOR}></label>
            <div class="col-sm-4">
                <input type="text" name="color" class="form-control color-picker" value="#<{$color}>" id="font_color" data-hex="true">
            </div>
            <label class="col-sm-2 col-form-label text-sm-right"><{$smarty.const._MA_TADTHEMES_LOGO_BORDER_COLOR}></label>
            <div class="col-sm-4">
                <input type="text" name="border_color" class="form-control color-picker" value="#<{$border_color}>" id="border_color" data-hex="true">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-sm-right"><{$smarty.const._MA_TADTHEMES_LOGO_TEXT_SIZE}></label>
            <div class="col-sm-4">
                <input type="text" class="form-control validate[required]" name="size" id="size" placeholder="<{$smarty.const._MA_TADTHEMES_LOGO_TEXT_SIZE}>" value="<{$size}>">
            </div>
            <label class="col-sm-2 col-form-label text-sm-right"><{$smarty.const._MA_TADTHEMES_LOGO_BORDER_SIZE}></label>
            <div class="col-sm-4">
                <input type="text" class="form-control validate[required]" name="border_size" id="border_size" placeholder="<{$smarty.const._MA_TADTHEMES_LOGO_BORDER_SIZE}>" value="<{$border_size}>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label text-sm-right"><{$smarty.const._MA_TADTHEMES_LOGO_SELECT_FONT}></label>
            <div class="col-sm-10">
                <{foreach from=$fonts key=file_sn item=font name=f}>
                    <label class="radio-inline">
                        <input class="validate[required]" type="radio" name="font_file_sn" value="<{$file_sn}>" <{if $font_file_sn==$file_sn or ($font_file_sn == 0 and $smarty.foreach.f.index == 0)}>checked<{/if}>>
                        <{$font.description}>
                    </label>
                <{/foreach}>
            </div>
        </div>
        <div class="text-center" style="margin: 30px auto;">
            <input type="hidden" name="op" value="mkTitlePic">
            <button type="submit" class="btn btn-primary"><{$smarty.const._MA_TADTHEMES_LOGO_MAKE_PNG}></button>
        </div>
    </form>
<{else}>
    <div class="alert alert-danger"><{$smarty.const._MA_TADTHEMES_LOGO_NEED_FONT}></div>
<{/if}>

<form action="font2pic.php" method="post" style="text-align:center;">
    <{if $pic}>
        <div class="text-center" style="margin: 30px auto;">
            <span style="background: url('../images/t.gif'); display: inline-block;">
                <img src="<{$pic}>" alt="logo">
            </span>
        </div>
        <input type="hidden" name="op" value="save_pic">
        <input type="hidden" name="title" value="<{$title}>">
        <input type="hidden" name="size" value="<{$size}>">
        <input type="hidden" name="border_size" value="<{$border_size}>">
        <input type="hidden" name="color" value="<{$color}>">
        <input type="hidden" name="border_color" value="<{$border_color}>">
        <input type="hidden" name="font_file_sn" value="<{$font_file_sn}>">
        <input type="hidden" name="name" value="<{$name}>">

        <label>
            <input type="checkbox" name="sav_to_logo" value="1">
            <{$smarty.const._MA_TADTHEMES_LOGO_SAVE_AS_LOGO}>
        </label>
        
        <button type="submit" class="btn btn-success"><{$smarty.const._MA_TADTHEMES_LOGO_SAVE_PIC}></button>
    <{/if}>

    <{if $logos}>
        <script>
            function change_css(){
                $('#demo').css('background-color',$('#bg_color').val());
            }
        </script>

        <div class="text-right">
            <{$smarty.const._MA_TADTHEMES_LOGO_DEMO_BGCOLOR}>
            <input type="hidden" id="bg_color" value="<{$bg_color}>" style="width:100px;"  data-hex="true" onChange="change_css();">
        </div>

        <div id="demo" style="background-color: <{$bg_color}>;padding:10px; ">
            <{foreach from=$logos item=logo}>
                <span style="display: inline-block;">
                    <a href="javascript:del_logo('<{$logo}>')"><img src="../images/delete.png" alt="del"></a>
                    <img src="<{$xoops_url}>/uploads/logo/<{$logo}>" alt="<{$xoops_url}>/uploads/logo/<{$logo}>" title="<{$xoops_url}>/uploads/logo/<{$logo}>">
                </span>
            <{/foreach}>
        </div>
    <{/if}>
</form>