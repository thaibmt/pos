<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'ultimatePOS') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #1da4ea;
                font-family: 'Arial', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-color: #ffffff;
        /*        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.12'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");*/
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #333333;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
				;
				
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
			.links a span {
				height:20px;
				padding-top:5px;
				padding-bottom:5px
			}
		.links > a span:hover {
			
                border-bottom: 3px solid #1da4ea;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
		.links > a.cur span {
			
                border-bottom: 3px solid #1da4ea;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .tagline{
                font-size:25px;
                font-weight: 300;
            }
			#footer {
				text-align:center;
			   position:absolute;
			   bottom:0;
			   width:100%;
			   height:60px;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
					<a class= 'cur' href="{{ route('welcome') }}"><span>@lang('lang_v1.welcome')</span></a>
                @if (Route::has('login'))
                    @if (Auth::check())
                        <a  href="{{ action('HomeController@index') }}"><span>@lang('lang_v1.inventory')</span></a>
						<a  href="{{ action('HomeController@index') }}"><span>@lang('lang_v1.manufacture')</span></a>
						<a  href="{{ action('HomeController@index') }}"><span>@lang('lang_v1.traceability')</span></a>
                    @else
                        <a  href="{{ action('Auth\LoginController@login') }}"><span>@lang('lang_v1.login')<span></a>
                        @if(env('ALLOW_REGISTRATION', true))
                            <a href="{{ route('business.getRegister') }}"><span>@lang('lang_v1.register')</span></a>
                        @endif
                    @endif
                @endif

                @if(Route::has('pricing') && config('app.env') != 'demo')
                    <a href="{{ action('\Modules\Superadmin\Http\Controllers\PricingController@index') }}">@lang('superadmin::lang.pricing')</a>
                @endif
            </div>

            <div class="content">
                <div class="title m-b-md" style="font-weight: 600 !important">
                    {{ config('app.name', 'ultimatePOS') }}
                </div>
                <p class="tagline">
                    {{ env('APP_TITLE', '') }}
					
                </p>
				<p>
				<img style="width:50%" src="{{asset('img/tongthe.png')}}"/>
				</p>
            </div>
			  <div id="footer">2019 Easytech.vn Design. All rights reserved. </div>
        </div>
    </body>
</html>
