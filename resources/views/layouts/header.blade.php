<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <meta name="author" content="Coffee Blend & Ground">
    <meta property="og:title" content="Coffee Blend & Ground" />
    <meta property="og:description" content="We process it with our heart until it arrives in the hands of consumers who are satisfied with our coffee products." />
    <meta property="og:image" itemprop="image"
        content="https://coffee.tilawatipusat.com/images/logo.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <title>Coffe Blend & Ground</title>
    <link rel='stylesheet'
        href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Grand+Hotel|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext"
        type='text/css' media='all'>
    <link rel='stylesheet' href="{{ 'js/vendor/revslider/settings.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'js/vendor/woo/woocommerce-layout.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'js/vendor/woo/woocommerce-smallscreen.css' }}" type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href="{{ 'js/vendor/woo/woocommerce.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/fontello/css/fontello.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/style.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/core.animation.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/shortcodes.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'js/vendor/woo/plugin.woocommerce.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/skin.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/doc-style.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/responsive.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/skin.responsive.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'js/vendor/comp/comp.min.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/custom.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/core.messages.css' }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ 'css/core.portfolio.css' }}" type='text/css' media='all' />
</head>

@yield('head')

<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <header class="top_panel_wrap top_panel_style_3 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('images/logo.png') }}" class="logo_main" alt="" width="128"
                                        height="124">
                                    <img src="{{ asset('images/alternative-logo.png') }}" class="logo_fixed" alt=""
                                        width="161" height="47">
                                </a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <a href="#" class="menu_main_responsive_button icon-menu"></a>
                            <nav class="menu_main_nav_area">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item current-menu-item"><a href="/">Home</a></li>
                                    <li class="menu-item"><a href="{{ route('fe.product') }}">Our Product</a></li>
                                    <li class="menu-item"><a href="#">Contacts</a></li>
                                    <li class="menu-item"><a class="popup_link popup_login_link icon-user"
                                            href="#popup_login">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="header_mobile">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <a href="index.html">
                        <img src="images/logo.png" class="logo_main" alt="" width="128" height="124">
                    </a>
                </div>
            </div>
            <div class="side_wrap">
                <div class="close">Close</div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main_mobile" class="menu_main_nav">
                            <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                            <li class="menu-item"><a href="{{ route('fe.product') }}">Our Product</a></li>
                            <li class="menu-item"><a href="#">Contacts</a></li>

                        </ul>
                    </nav>

                    <div class="login">
                        <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
                    </div>

                </div>
                <div class="panel_bottom">
                    <div class="contact_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_twitter">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_facebook">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_gplus">
                                    <span class="icon-gplus"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_linkedin">
                                    <span class="icon-linkedin"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_skype">
                                    <span class="icon-skype"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask"></div>
        </div>
