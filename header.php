<!DOCTYPE html>
<html>
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>
            <?php the_title(); ?>
        </title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
    <div>
        <header class="ligne-grise" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
            <nav id='cssmenu'>
                <div class="logo"><a href="http://localhost/zianalina/accueil">
                    <?php echo '<img loading="lazy" srcset="' . get_template_directory_uri() . '/img/logo-zianalina-tel.svg"  />';?></a></div>
                <div id="head-mobile"></div>
                    <div class="button"></div>
                        <ul>
                            <li class='active'><a href='http://localhost/zianalina/accueil'>Accueil</a></li>
                            <li><a href='#'>Vetements</a>
                                <ul>
                                    <li><a href='http://localhost/zianalina/robe/'>Robe</a></li>
                                    <li><a href='http://localhost/zianalina/ensemble/'>Ensemble</a></li>
                                    <li><a href='http://localhost/zianalina/pret-a-porter/'>Prêt à porter</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Traditionnel</a>
                                <ul>
                                    <li><a href='http://localhost/zianalina/hijab/'>Hijab</a></li>
                                    <li><a href='http://localhost/zianalina/abaya/'>Abaya</a></li>
                                    <li><a href='http://localhost/zianalina/caftan/'>Caftan</a></li>
                                    <li><a href='http://localhost/zianalina/jellaba/'>Jellaba</a></li>
                                    <li><a href='http://localhost/zianalina/bijoux-traditionnels/'>Bijoux traditionnels</a></li>
                                
                                </ul>
                            </li>
                            <li><a href='#'>Accessoires</a>
                                <ul>
                                <li><a href='http://localhost/zianalina/hijab/'>Hijab</a></li>

                                    <li><a href='http://localhost/zianalina/bijoux/'>Bijoux</a></li>
                                    <li><a href='http://localhost/zianalina/parfum/'>Parfum</a></li>
                                    <li><a href='http://localhost/zianalina/chaussure/'>Chaussures</a></li>
                                    <li><a href='http://localhost/zianalina/sac-a-main/'>Sac à main</a></li>
                                </ul>
                            </li>


                            <li class='active'>
                                <a href='localhost/zianalina/panier' id="panier-link">
                                    <?php echo '<img loading="lazy" srcset="' . get_template_directory_uri() . '/icon/panier.svg" style="width: 20px; height: 20px;"  />';?>
                                </a>
                                <span class="panier-badge" id="panier-badge"></span>
                            </li>
                            <li class='active'>
                                <a href='localhost/zianalina/mon-compte'>
                                    <?php echo '<img loading="lazy" srcset="' . get_template_directory_uri() . '/icon/compte.svg" style="width: 20px; height: 20px;"  />';?>
                                </a>
                            </li>
                        </ul>
            </nav>
        </header>
    </div>
    </body>
</html>
<script>
   document.addEventListener('DOMContentLoaded', function() {
    // Simulating the presence of products in the cart
    var productsInCart = true; // You would replace this with your actual logic to determine if there are products in the cart

    // Select the panier badge element
    var panierBadge = document.getElementById('panier-badge');

    // Create a new span element for the badge
    var badge = document.createElement('span');
    badge.classList.add('badge');

    // If there are products in the cart, show the badge
    if (productsInCart) {
        badge.textContent = '!'; // You can customize the content of the badge here
    } else {
        badge.textContent = '0'; // You can customize the content of the badge here for an empty cart
    }

    // Append the badge to the panier badge element
    panierBadge.appendChild(badge);
});

</script>

<style>
    /* Add styles for the badge */
    .badge {
        background-color: red;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        right: -5px;
        font-size: 12px;
    }
</style>

        <script>
        (function($) {
        $.fn.menumaker = function(options) {  
        var cssmenu = $(this), settings = $.extend({
        format: "dropdown",
        sticky: false
        }, options);
        return this.each(function() {
        $(this).find(".button").on('click', function(){
            $(this).toggleClass('menu-opened');
            var mainmenu = $(this).next('ul');
            if (mainmenu.hasClass('open')) { 
            mainmenu.slideToggle().removeClass('open');
            }
            else {
            mainmenu.slideToggle().addClass('open');
            if (settings.format === "dropdown") {
                mainmenu.find('ul').show();
                
            }
            }
        });
        cssmenu.find('li ul').parent().addClass('has-sub');
        multiTg = function() {
            cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
            cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
                $(this).siblings('ul').removeClass('open').slideToggle();
            }
            else {
                $(this).siblings('ul').addClass('open').slideToggle();
            }
            });
        };
        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');
        if (settings.sticky === true) cssmenu.css('position', 'fixed');
        resizeFix = function() {
        var mediasize = 1024;
            if ($( window ).width() > mediasize) {
            cssmenu.find('ul').show();
            }
            if ($(window).width() <= mediasize) {
            cssmenu.find('ul').hide().removeClass('open');
            
            }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);
        });
        };
        })(jQuery);

        (function($) {
            $(document).ready(function(){
                $("#cssmenu").menumaker({
                    format: "multitoggle"
                });
            });
        })(jQuery);
</script>

<style>
    .ligne-grise {
            border: 1px solid rgba(0, 0, 0, 0.5); /* Couleur grise avec transparence */
            width: 100%; /* Largeur de la ligne */
            margin:  0; /* Marge autour de la ligne */
            /* Autres styles personnalisables */
        }
    *{margin:0; padding:0; text-decoration: none; font-family: 'Inter', sans-serif;}
    header{position:fixed; width:100%; background:#fff; z-index: 1000;}
    img{width: 80px;}
    .logo{position: relative; z-index: 123; padding: 10px; float: left; width: 15%; }
    .logo a{color:#6DDB07;}
    nav{position:relative; margin:0 auto;}
    #cssmenu,#cssmenu ul,#cssmenu ul li,#cssmenu ul li a,#cssmenu #head-mobile{border:0;list-style:none;line-height:1;display:block;position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
    #cssmenu:after,#cssmenu > ul:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}
    #cssmenu #head-mobile{display:none}
    #cssmenu {
        font-family: sans-serif;
        text-transform: uppercase;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    #cssmenu > ul > li{float:left}
    #cssmenu > ul > li > a {
        padding: 17px;
        font-size: 14px;
        letter-spacing: 1px;
        text-decoration: none;
        color: #000;
        font-weight: 700;
    }
    #cssmenu > ul > li:hover > a,#cssmenu ul li.active a {
        color:#000}
    #cssmenu ul li.active a:hover {
    text: underline;
    }

    #cssmenu > ul > li:hover,#cssmenu ul li.active:hover,#cssmenu ul li.active,#cssmenu ul li.has-sub.active:hover{-webkit-transition:background .3s ease;-ms-transition:background .3s ease;transition:background .3s ease;}
    #cssmenu > ul > li.has-sub > a{padding-right: 30px;
        color: #000;}
        #cssmenu > ul > li.has-sub > a:hover {
        color: #000;
    }

    #cssmenu > ul > li.has-sub > a:after{position: absolute;
        top: 22px;
        right: 11px;
        width: 8px;
        height: 2px;
        display: block;
        background: #000;
        content: '';
    }

    #cssmenu > ul > li.has-sub > a:before{position: absolute;
        top: 19px;
        right: 14px;
        display: block;
        width: 2px;
        height: 8px;
        background: #000;
        content: '';
        -webkit-transition: all .25s ease;
        -ms-transition: all .25s ease;
        transition: all .25s ease;
    }
    
    #cssmenu > ul > li.has-sub:hover > a:before{top:23px;height:0}
    #cssmenu ul ul{position:absolute;left:-9999px}
    #cssmenu ul ul li{height:0;-webkit-transition:all .25s ease;-ms-transition:all .25s ease;background:#02006B;transition:all .25s ease}
    #cssmenu ul ul li:hover{}
    #cssmenu li:hover > ul{left:auto}
    #cssmenu li:hover > ul > li{height:35px;background: #000;}
    #cssmenu ul ul ul{margin-left:100%;top:0}
    #cssmenu ul ul li a { 
        border-bottom: 1px solid rgba(150, 150, 150, 0.15);
        padding: 11px 15px;
        width: 170px;
        font-size: 12px;
        text-decoration: none;
        color: #fff;
        font-weight: 400;}
        #cssmenu ul li.active{
        border-top: none;
        }
    #cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a{border-bottom:0}
    #cssmenu ul ul li:hover > a,#cssmenu ul ul li a:hover{color: #000; background: #FFF;}
    #cssmenu ul ul li.has-sub > a:after{position:absolute;top:16px;right:11px;width:8px;height:2px;display:block;background:#fff;content:''}
    #cssmenu ul ul li.has-sub > a:before{position:absolute;top:13px;right:14px;display:block;width:2px;height:8px;background:#fff;content:'';-webkit-transition:all .25s ease;-ms-transition:all .25s ease;transition:all .25s ease}
    #cssmenu ul ul > li.has-sub:hover > a:before{top:17px;height:0}
    #cssmenu ul ul li.has-sub:hover,#cssmenu ul li.has-sub ul li.has-sub ul li:hover{background:#000;}
    #cssmenu ul ul ul li.active a{border-left:1px solid #333}
    #cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active> a{border-top:1px solid #333}

    @media screen and (max-width:1024px){
    img{width: 60px}
    .logo{position: absolute;
        top: 0;
        left: 0;
        text-align: center;
        float: none;}
    .logo2{display:none}
    nav{width:100%;}
    #cssmenu{width: 100%;
        padding-top: 80px;
        display: flex;
        align-items: center;}
    #cssmenu ul{width:100%;display:none}
    #cssmenu ul li{width:100%;border-top:1px solid #000}
    #cssmenu ul li:hover{background:#fff;}
    #cssmenu ul ul li,#cssmenu li:hover > ul > li{height:auto}
    #cssmenu ul li a,#cssmenu ul ul li a{width:100%;border-bottom:0}
    #cssmenu > ul > li{float:none}
    #cssmenu ul ul li a{padding-left:25px}
    #cssmenu ul ul li{background:#fff!important;}
    #cssmenu ul ul li:hover{background:#02006B!important}
    #cssmenu ul ul ul li a{padding-left:35px}
    #cssmenu ul ul li a{color:#000;background:none}
    #cssmenu ul ul li:hover > a,#cssmenu ul ul li.active > a{color:#fff}
    #cssmenu ul ul,#cssmenu ul ul ul{position:relative;left:0;width:100%;margin:0;text-align:left}
    #cssmenu > ul > li.has-sub > a:after,#cssmenu > ul > li.has-sub > a:before,#cssmenu ul ul > li.has-sub > a:after,#cssmenu ul ul > li.has-sub > a:before{display:none}
    #cssmenu #head-mobile{display:block;padding:2px;color:#000;font-size:12px;font-weight:700}
    .button{width:55px;height:46px;position:absolute;right:0;top: 16px;;cursor:pointer;z-index: 12399994;}
    .button:after{position:absolute;top:22px;right:20px;display:block;height:4px;width:20px;border-top:2px solid #000;border-bottom:2px solid #000;content:''}
    .button:before{-webkit-transition:all .3s ease;-ms-transition:all .3s ease;transition:all .3s ease;position:absolute;top:16px;right:20px;display:block;height:2px;width:20px;background:#000;content:''}
    .button.menu-opened:after{-webkit-transition:all .3s ease;-ms-transition:all .3s ease;transition:all .3s ease;top:23px;border:0;height:2px;width:19px;background:#000;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}
    .button.menu-opened:before{top:23px;background:#000;width:19px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}
    #cssmenu .submenu-button{position:absolute;z-index:99;right:0;top:0;display:block;border-left:1px solid #fff;height:46px;width:46px;cursor:pointer}
    #cssmenu .submenu-button.submenu-opened{background:#fff;}
    #cssmenu ul ul .submenu-button{height:34px;width:34px}
    #cssmenu .submenu-button:after{position:absolute;top:22px;right:19px;width:8px;height:2px;display:block;background:#000;content:''}
    #cssmenu ul ul .submenu-button:after{top:15px;right:13px}
    #cssmenu .submenu-button.submenu-opened:after{background:#000}
    #cssmenu .submenu-button:before{position:absolute;top:19px;right:22px;display:block;width:2px;height:8px;background:#000;content:''}
    #cssmenu ul ul .submenu-button:before{top:12px;right:16px}
    #cssmenu .submenu-button.submenu-opened:before{display:none}
    #cssmenu ul ul ul li.active a{border-left:none}
    #cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active > a{border-top:none}
    =
    }
</style>
