{{--<html>--}}
{{--<head>--}}
{{--    <style>--}}
{{--        .products-table {--}}
{{--            font-family: 'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif';--}}
{{--            background: white;--}}
{{--            width: 100%;--}}
{{--            margin: 0 auto;--}}
{{--            position: relative;--}}
{{--            border-collapse: collapse;--}}
{{--            border-radius: 5px;--}}
{{--            font-size: 14px;--}}
{{--        }--}}

{{--        .products-table * {--}}
{{--            position: relative;--}}
{{--        }--}}

{{--        .products-table thead tr {--}}
{{--            height: 40px;--}}
{{--            background: #e53429;--}}
{{--        }--}}
{{--        .products-table thead tr td {--}}
{{--            color: #fff;--}}
{{--            line-height: 1.2;--}}
{{--            font-weight: unset;--}}
{{--            padding-right: 10px;--}}
{{--        }--}}
{{--        .products-table tbody tr {--}}
{{--            height: 40px;--}}
{{--        }--}}
{{--        .products-table tbody tr td{--}}
{{--            padding-right: 10px;--}}
{{--            border: 1px solid #ddd;--}}
{{--        }--}}
{{--        .red-button {--}}
{{--            background-color: #e53429;--}}
{{--            border: none;--}}
{{--            color: white;--}}
{{--            padding: 8px 15px;--}}
{{--            text-align: center;--}}
{{--            text-decoration: none;--}}
{{--            display: inline-block;--}}
{{--            font-size: 16px;--}}
{{--            margin: 4px 2px;--}}
{{--            cursor: pointer;--}}
{{--            border-radius: 3px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div style="background:#f7f7f7;width:100%;height:100%;margin:0px" bgcolor="#f7f7f7">--}}
{{--    <table style="font-family:'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif'" align="center" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f7f7f7">--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td height="60" valign="top">--}}
{{--                <table cellspacing="0" align="center" width="460" cellpadding="0">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td valign="middle" width="40" height="60" style="padding-top: 35px; text-align:center;font-size:30px">--}}
{{--                            <a style="color:#e53429;text-decoration:blink">--}}
{{--                                <img src="{{asset_app('images/skyline.svg')}}" width="200" class="CToWUd a6T" tabindex="0">--}}
{{--                            </a>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td height="20">&nbsp;</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td valign="top">--}}
{{--                <div style="width: 100%">--}}
{{--                    <table style="font-family:'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif';border:1px solid #eaeff2;border-radius:3px; max-width:550px;" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" align="center">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>--}}
{{--                                @yield('content')--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td height="50">&nbsp;</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


        <!doctype html>
<html lang="{{app()->getLocale()}}" dir="{{app()->isLocale('ar') ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @stack('css')
</head>
<body>
{{--<div--}}
{{--        style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%; background-color:#edf2f7">--}}
{{--    <br>--}}
{{--    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"--}}
{{--           style="border-collapse:collapse;margin:0 auto; padding:0;">--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td align="{{app()->isLocale('ar') ? 'right' : 'left'}}" valign="{{app()->isLocale('ar') ? 'right' : 'left'}}" style="text-align:{{app()->isLocale('ar') ? 'right' : 'left'}};">--}}
{{--                <a href="{{route_app('home.index')}}" rel="noopener" target="_blank">--}}
{{--                    <img width="180" alt="Logo" src="{{asset_app('images/skyline.svg')}}">--}}
{{--                </a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td align="{{app()->isLocale('ar') ? 'right' : 'left'}}" valign="center">--}}
{{--                <div--}}
{{--                        style="text-align:{{app()->isLocale('ar') ? 'right' : 'left'}}; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">--}}
{{--                    @isset($mail_subject)--}}
{{--                        <p style="font-size: 24px;font-weight: bold;color: #1b8f7a">{{$mail_subject}}</p>--}}
{{--                    @endisset--}}
{{--                    @if(isset($user))--}}
{{--                        <p>{{__("Dear")}}: {{$user->full_name ?? $user->name}}</p>--}}
{{--                @endif--}}
{{--                <!--begin:Email content-->--}}
{{--                @yield('content')--}}
{{--                <!--end:Email content-->--}}
{{--                    <div style="padding-bottom: 10px; color: #979797; margin-top: 24px">--}}
{{--                        kind_regards,--}}
{{--                        <br>--}}
{{--                        <a style="color: #979797; text-decoration: none" href="{{route_app('home.index')}}">{{config('app.name')}} {{trans_admin('team')}}</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}

{{--            <td align="{{app()->isLocale('ar') ? 'right' : 'left'}}" valign="{{app()->isLocale('ar') ? 'right' : 'left'}}"--}}
{{--                style="font-size: 13px; text-align:{{app()->isLocale('ar') ? 'right' : 'left'}};padding: 20px; color: #6d6e7c;">--}}
{{--                <p>dont_replay</p>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
</body>
</html>
