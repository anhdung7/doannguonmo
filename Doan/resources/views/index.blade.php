<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href={{asset("images/favicon.png")}}>
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href={{asset("css/material-design-iconic-font.min.css")}}>
        <!-- Font Awesome -->
        <link rel="stylesheet" href={{asset("css/font-awesome.min.css")}}>
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href={{asset("css/fontawesome-stars.css")}}>
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href={{asset("css/meanmenu.css")}}>
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href={{asset("css/slick.css")}}>
        <!-- Animate CSS -->
        <link rel="stylesheet" href={{asset("css/animate.css")}}>
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href={{asset("css/jquery-ui.min.css")}}>
        <!-- Venobox CSS -->
        <link rel="stylesheet" href={{asset("css/venobox.css")}}>
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href={{asset("css/nice-select.css")}}>
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href={{asset("css/magnific-popup.css")}}>
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
        <!-- Helper CSS -->
        <link rel="stylesheet" href={{asset("css/helper.css")}}>
        <!-- Main Style CSS -->
        <link rel="stylesheet" href={{asset("css/style.css")}}>
        <!-- Responsive CSS -->
        <link rel="stylesheet" href={{asset("css/responsive.css")}}>
        <!-- Modernizr js -->
        <script src={{asset("js/vendor/modernizr-2.8.3.min.js")}}></script>
    </head>
    <body class="antialiased">
        @include('User.Layout.header')
        @yield('content')
        @include('User.Layout.footer')
        <!-- jQuery-V1.12.4 -->
        <script src={{asset("js/vendor/jquery-1.12.4.min.js")}}></script>
        <!-- Popper js -->
        <script src={{asset("js/vendor/popper.min.js")}}></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src={{asset("js/bootstrap.min.js")}}></script>
        <!-- Ajax Mail js -->
        <script src={{asset("js/ajax-mail.js")}}></script>
        <!-- Meanmenu js -->
        <script src={{asset("js/jquery.meanmenu.min.js")}}></script>
        <!-- Wow.min js -->
        <script src={{asset("js/wow.min.js")}}></script>
        <!-- Slick Carousel js -->
        <script src={{asset("js/slick.min.js")}}></script>
        <!-- Owl Carousel-2 js -->
        <script src={{asset("js/owl.carousel.min.js")}}></script>
        <!-- Magnific popup js -->
        <script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
        <!-- Isotope js -->
        <script src={{asset("js/isotope.pkgd.min.js")}}></script>
        <!-- Imagesloaded js -->
        <script src={{asset("js/imagesloaded.pkgd.min.js")}}></script>
        <!-- Mixitup js -->
        <script src={{asset("js/jquery.mixitup.min.js")}}></script>
        <!-- Countdown -->
        <script src={{asset("js/jquery.countdown.min.js")}}></script>
        <!-- Counterup -->
        <script src={{asset("js/jquery.counterup.min.js")}}></script>
        <!-- Waypoints -->
        <script src={{asset("js/waypoints.min.js")}}></script>
        <!-- Barrating -->
        <script src={{asset("js/jquery.barrating.min.js")}}></script>
        <!-- Jquery-ui -->
        <script src="{{asset("js/jquery-ui.min.js")}}"></script>
        <!-- Venobox -->
        <script src={{asset("js/venobox.min.js")}}></script>
        <!-- Nice Select js -->
        <script src={{asset("js/jquery.nice-select.min.js")}}></script>
        <!-- ScrollUp js -->
        <script src={{asset("js/scrollUp.min.js")}}></script>
        <!-- Main/Activator js -->
        <script src={{asset("js/main.js")}}></script>
        <!-- JavaScript -->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
        
        <script>
            function addCart(ma_sp){
                $.ajax({
                    type: 'GET',
                    url: 'addCart/'+ma_sp,
                }).done(function(response) {
                    RenderCart(response);
                    alertify.success('Đã thêm mới sản phẩm');
                });
            }

            $(".minicart-product-list").on("click", ".close i" , function(){
                // console.log($(this).context.attributes[1].nodeValue);
                $.ajax({
                    type: 'GET',
                    url: 'deleteCart/'+$(this).context.attributes[1].nodeValue,
                }).done(function(response) {
                    RenderCart(response);
                    alertify.success('Đã xóa sản phẩm');
                });
            });

            function RenderCart(response){
                $(".minicart-product-list").empty();
                $(".minicart-product-list").html(response);
                $(".cart-item-count").text($("#tongslCart").val());
            }

            function deletelistCart(ma_sp){
                $.ajax({
                    type: 'GET',
                    url: 'deletelistCart/'+ma_sp,
                }).done(function(response) {
                    $("#list_cart").empty();
                    $("#list_cart").html(response);
                    alertify.success('Đã xóa sản phẩm');
                });
            }

            function savelistCart(ma_sp){
                $.ajax({
                    type: 'GET',
                    url: 'savelistCart/'+ma_sp+'/'+$("#sl-"+ma_sp).val(),
                }).done(function(response) {
                    $("#list_cart").empty();
                    $("#list_cart").html(response);
                    alertify.success('Đã update sản phẩm');
                    $(".cart-plus-minus").append('<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>');
                    $(".qtybutton").on("click", function() {
                        var $button = $(this);
                        var oldValue = $button.parent().find("input").val();
                        if ($button.hasClass('inc')) {
                        var newVal = parseFloat(oldValue) + 1;
                        } else {
                            // Don't allow decrementing below zero
                        if (oldValue > 0) {
                            var newVal = parseFloat(oldValue) - 1;
                            } else {
                            newVal = 0;
                        }
                        }
                        $button.parent().find("input").val(newVal);
                    });
                });
            }
        </script>
    </body>
</html>
