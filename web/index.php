<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title><?php echo TITLE ?></title>
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="keywords" content="网址缩短,urlshorter,xcsoft">
    <!--<meta http-equiv="refresh" content="0; url=https://z.douyin.com/Y7Un" />-->
    <meta name="description" content="一款极简的网址缩短">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple126/v4/39/d0/11/39d011ab-8cb8-1e3e-f83b-bfcfd7fbe9c0/AppIcon-1x_U007emarketing-0-5-0-0-85-220.png/434x0w.png" />
    <link rel="apple-touch-icon" href="https://is5-ssl.mzstatic.com/image/thumb/Purple126/v4/39/d0/11/39d011ab-8cb8-1e3e-f83b-bfcfd7fbe9c0/AppIcon-1x_U007emarketing-0-5-0-0-85-220.png/434x0w.png" />
    <script language="JavaScript" src="index/layui/jquery-3.5.1.min.js"></script>
    <script language="JavaScript" src="index/layui/layer.js"></script>
<link rel="stylesheet" type="text/css" href="index/style/uizard.css"/>
	<link rel="stylesheet" type="text/css" href="index/layui/layer.css">
<link rel="stylesheet" type="text/css" href="index/style/data.css">
<link rel="stylesheet" type="text/css" href="index/style/style.css">
<link rel="stylesheet" type="text/css" href="index/style/styletip.css">



<style>

        .yx-con {
    margin: auto;
    width: 6.7rem;
}
    .yx-con div.no-coupon {
    margin-top: 2.08rem;
    text-align: center;
}
    .yx-con div.no-coupon img {
    width: 5.49rem;
    margin-bottom: 1.4rem;
}
    .yx-con div.no-coupon p {
    color: #787878;
}
	body{
		background-color: #f6f6f6;
		padding: 0;
		margin: auto;
		width: 100%;
		font-family: PingFangSC-Light, sans-serif;
	}
    .text-muted{
    width: 50%;
            font-weight: bold;
        line-height: 34px;
        border-radius: 20px;
    font-size: 12px;
    }
	@media (prefers-color-scheme: dark) {
    body{
		background-color: #1b1f24;
	}
    }
        .mt-check,{
    display: inline-block;
    box-sizing: border-box;
        }
        .mt-check input {
    position: absolute;
    box-sizing: border-box;
    height: 0;
    width: 0;
    font-size: inherit;
    margin: 0;
    border: none;
    z-index: 1;
    cursor: pointer;
    -moz-appearance: none;
    -webkit-appearance: none;
}  .mt-check input:checked:before {
    width: 1.5625em;
    transform: rotate(-45deg) translate(2.5375em,4.55em);
}.mt-check input:checked:after {
    width: 0.73em;
    transform: rotate(45deg) translate(4.55em,-2.1625em);
}.mt-check input:before {
    width: 1.6875em;
    transform: rotate(-45deg) translate(-0.525em,1.425em);
}.mt-check input:after {
    width: 1.6875em;
    transform: rotate(45deg) translate(1.425em,0.525em);
}.mt-check label {
    display: inline-block;
    position: relative;
    box-sizing: border-box;
    cursor: pointer;
    width: 7em;
    height: 3em;
    border-radius: 1.5em;
    background: linear-gradient(to right,#eef4ff,#dce1ec);
    border: none;
    transition: all .3s ease;
}.mt-check input:checked+label:before {
    background: rgb(0, 181, 75);
    transform: translateX(4em);
}.mt-check label:before {
    content: "";
    display: block;
    position: absolute;
    width: 2.4em;
    height: 2.4em;
    top: 0.3em;
    left: 0.3em;
    border-radius: 2.5em;
    background: rgb(255 59 47);
    transition: .3s ease;
}.mt-check input:after, .mt-check input:before {
    content: "";
    display: block;
    position: absolute;
    height: 0.25em;
    border-radius: 0.125em;
    background: #fff;
    transition: .3s ease;
}


</style>


</head>


<body>
<div class="JabiTopMenu" id="menucss">
	<div class="JabiLogo">
		<div class="JabiName">
			<img class="JabiImg" src="https://ofoio.com/static/image/flyer_logo.svg">
		</div>
	</div>
	<div class="zamoney">
		<a href="https://github.com/Yi-Jams/Yi-SoUrl" class="mr-10 bg-color-dce1ec flex  bg-color-dce1ec border-radius-12">
			<div class="dropdown bg-color-dce1ec pointer h-46 pt-13 pb-13 ssp-h-40 flex row align-items-center p-0-10 border-box border-radius-12">
				<div class="el-dropdown">
					<span class="el-dropdown-link flex align-items-center row el-dropdown-selfdefine">
						<img src="https://img.icons8.com/small/452/github.png" alt="" class="w-24 h-24 ssp-w-20 ssp-h-20">
						<span style=" color: #7a72ff; font-weight: bolder; " class="ml-10 mr-24 font-size_14 rubik-medium ssp-mr-10 color-121217">
							Github</span>
						<i class="pc el-icon-arrow-down el-icon--right"></i>
					</span>
				</div>
			</div>
		</a>
	</div>
</div>
<div class="JabiNone"></div>

<div class="JabiAppWxr" style="margin-top: 15px;margin: 10px 15px 0px; padding: 10px; border: dashed 1px #d6d6d6;">提示：
	<?php echo word ?>
</div>
<div class="Jabitit1 Jabitir" style="display: block; z-index: 1;  opacity: 10;margin-bottom: 40px;">

	<img class="JabiIcon" src="https://is5-ssl.mzstatic.com/image/thumb/Purple126/v4/39/d0/11/39d011ab-8cb8-1e3e-f83b-bfcfd7fbe9c0/AppIcon-1x_U007emarketing-0-5-0-0-85-220.png/434x0w.png">
	<div class="JabiAppCall">
		<?php echo TITLE ?>
	</div>
	<div class="JabiAppV" style="font-size: 12px;">1.0.7 生产版</div>


	<div class="line"></div>


	<textarea data-v-29e52d3b="" placeholder="填写要缩短的网址" value="" maxlength="999" type="text" class="input ppu" style="height: 70px;    width: 95%;"></textarea>



	<div class="go_urlx" style=" display: none; ">
		<div class="JabiAppDes">
			<div class="JabiAppDesTxt"></div>
		</div>
		<div class="JabiAppV" style="font-size: 12px;">点击复制</div>
	</div>

	<div class="line"></div>
	<div class="Jabilist ok_url">
		<img src="/index/image/Right.png" style="width: 1.1rem;">
	</div>
</div>



<div class="Jabitit1">
	<div class="Jabigz">更多黑科技，快来「<?php echo TITLE ?>」
	</div>
</div>
<div class="line"></div>
<a class="shuoming" id="JabiSm">网站资源 均由「<?php echo TITLE ?>」 原创<br>「
	<?php echo TITLE ?>」 version: 1.0.7
</a>

    <script language="JavaScript">
    function copyToClip(content, message) {var aux = document.createElement("input"); aux.setAttribute("value", content); document.body.appendChild(aux); aux.select();document.execCommand("copy"); document.body.removeChild(aux);if (message == null) {layer.msg('复制成功', {time:2000});} else{alert(message);}}
    $(document).ready(function () {
        var s_url = "";
        var copy = "";
        $(".ok_url").click(function () {
            var url = $('.ppu').val();
            if(url == ""){
                layer.msg('链接为空')
            }else{
                if(s_url != url){
                    layer.msg('生成中...');
                    $('.go_urlx').fadeOut();
                    $.ajax({
                        url: 'api/url',
                        type: 'POST',
                        timeout: 10000,
                        data: {
                            url: url,
                            encode: 'json',
                        },
                        success: function (res) {
                            if (res.code !== 0) {
                                layer.msg(res.msg)
                            } else {
                                s_url = url;
                                copy = res.url;
                                $('.JabiAppDesTxt').html(res.url);
                                $('.go_urlx').fadeIn(500);
                                layer.msg("获取成功")
                            }
                        },
                        complete: function (Xhr, status) {
                            if (status == "timeout") {layer.msg("服务器请求超时,请稍后重试")}
                            if (status != "success") {
                                layer.msg("服务器错误,请稍后重试")
                            }
                        }
                    })
                    return false;
                }else{
                    copyToClip(copy);
                }
            }
        });
        $(".JabiAppDes").click(function () {
            copyToClip(copy);
        });
    });
    </script>
</body>

</html>
