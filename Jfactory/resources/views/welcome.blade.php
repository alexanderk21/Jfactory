<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
    <title>抹茶請求書</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/import.css') }}" />
</head>

<body>

    <!-- wrapper_Start -->
    <div id="wrapper">

        <!-- header_Start -->
        <div id="header" class="clearfix">
            <h1><img src="{{ asset('/img/cms/i_logo.jpg') }}" alt="抹茶請求書" height="40" /></h1>
        </div>
        <div id="submenu_no" class="mb20">
            <img src="{{ asset('/img/bg_submenu_no.jpg') }}" alt="抹茶請求書" />
        </div>
        <br class="clear" />
        <!-- header_End -->

        <div id="login">
            <form name="UserLoginForm" id="UserLoginForm" method="post" action="/" accept-charset="utf-8">
                <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                <div class="login"><img src="{{ asset('/img/login/tl_login.jpg') }}" alt="ログイン画面" /></div>
                <div id="login_box">
                    <div id="login_logo"><img src="{{ asset('/img/login/i_logo_login.jpg') }}" alt="" /></div>
                    <div id="login_id"><img src="{{ asset('/img/login/tm_id.gif') }}" alt="ID" class="mr10" />
                        <input name="data[User][LOGIN_ID]" type="text" class="w320" value=""
                            id="UserLOGINID" />
                    </div>

                    <div id="login_pw"><img src="{{ asset('/img/login/tm_pw.gif') }}" alt="パスワード" class="mr10" />
                        <input type="password" name="data[User][PASSWORD]" class="w320" id="UserPASSWORD" /> </div>
                    <div id="login_btn">
                        <input type="image" src="{{ asset('/img/login/bt_login.jpg') }}" name="submit" alt="ログイン"
                            class="imgover" /> <a href="/users/reset">パスワードお忘れの方</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- contents_End -->

        <!-- footer_Start -->
        <div id="footer_login">
            オープンソースの業務ソフト～バックオフィスに安らぎを～
            <address>
                抹茶請求書ver.{{ config('app.version') }} <br />
                Copyright &copy; 2024 ICZ corporation. All rights reserved.
            </address>
        </div>
        <!-- footer_End -->
    </div>
    <!-- wrapper_End -->
</body>

</html>
