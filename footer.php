</main><!-- //.contents -->
        
        <footer>
            <div class="footerInner">
                <div class="footerLogo">
                    <img src="/images/common/logo.svg" width="100" height="100" alt="NOAH">
                    <span class="pcNone">株式会社NOAH</span>
                </div><!-- //.footerLogo -->
                
                <div class="footerNav spNone">
                    <div class="footerNavInner">
                        <h3><a href="/company" class="commonHover">COMPANY</a></h3>
                        <ul>
                            <li><a href="/company" class="commonHover">CONCEPT</a></li>
                            <li><a href="/company#greeting" class="commonHover">GREETING</a></li>
                            <li><a href="/company#company" class="commonHover">COMPANY</a></li>
                        </ul>
                    </div><!-- //.footerNavInner -->
                    
                    <div class="footerNavInner">
                        <h3><a href="/service" class="commonHover">SERVICE</a></h3>
                        <ul>
                            <li><a href="/service/#doctors" class="commonHover">Doctor's Cosmetics</a></li>
                            <li><a href="/service/#consult" class="commonHover">CONSULTANT</a></li>
                            <li><a href="/service/#project" class="commonHover">Doctor's Project</a></li>
                        </ul>
                    </div><!-- //.footerNavInner -->
                    
                    <div class="footerNavInner">
                        <h3><a href="/salon" class="commonHover">N's SALON</a></h3>
                        <ul>
                            <li><a href="/salon#counseling" class="commonHover">MENU</a></li>
                            <li><a href="/salon#staff" class="commonHover">STAFF</a></li>
                            <li><a href="/salon#contact2" class="commonHover">RESERVE</a></li>
                        </ul>
                    </div><!-- //.footerNavInner -->
                    
                    <div class="footerNavInner">
                        <h3><a href="/contact" class="commonHover">CONTACT US</a></h3>
                        <ul>
                            <li><a href="/privacy#privacy" class="commonHover">Privacy & Policy</a></li>
                            <li><a href="/privacy#disclaimer" class="commonHover">Disclaimer</a></li>
                        </ul>
                    </div><!-- //.footerNavInner -->
                </div><!-- //.footerNav -->
            </div><!-- //.footerInner -->
            <p class="copy">2018 Noah co.,Ltd. All rights reserved.</p>
        </footer>
        <p class="pageTop"><a href="#" class="commonHover"><img src="/images/common/pagetop.png" srcset="/images/common/pagetop@2x.png" width="58" height="69" alt="page top"></a></p>
    </div><!-- //.container -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <script src="/lib/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        <?php if($page == 'top') { ?>
                function slideSwitch() {
                    var $active = $('#topSlide div.active');
                    if ( $active.length == 0 ) $active = $('#topSlide div:last');
                    var $next =  $active.next().length ? $active.next()
                      : $('#topSlide div:first');

                    $active.addClass('lastActive');

                    $active.children('.slideContent')
                        .css({opacity: 1.0})
                        .animate({opacity: 0.0},1000);

                    //console.log($active.children()[2]);

                    $next.css({opacity: 0.0})
                        .addClass('active')
                        .animate({opacity: 1.0}, 1000, function() {
                            $active.removeClass('active lastActive');
                    });

                    $next.children('.slideContent')
                        .css({opacity: 0.0})
                        .animate({opacity: 1.0},1000);
                }

                $(function() {
                    setInterval( "slideSwitch()", 4000 );
                    var w = $(window).width();
                    
                    // スライドの高さ取得
                    if (w <= 600) {
                        var slide_h = $('.slideBg').height();
                        $('#topSlide').css({height: slide_h + 'px'});
                    }
                    //ページトップ
                    var pagetop = $('.pageTop');
                    var menuBtn = $('.menuBtn');
                    var nav = $('.nav');
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 100) {
                            pagetop.fadeIn();
                        } else {
                            pagetop.fadeOut();
                        }
                        if (w >= 600) {
                            if($(this).scrollTop() > 820) {
                                nav.fadeOut();
                                menuBtn.fadeIn(); 
                            } else {
                                menuBtn.fadeOut();
                                nav.fadeIn();
                            }
                        }
                    });
                    pagetop.click(function () {
                        $('body, html').animate({ scrollTop: 0 }, 500);
                        return false;
                   });
                });

                var mySwiper = new Swiper('.swiper-container', {
                    loop: true,
                    speed: 1000,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                })
            <?php } else { ?>
                $(function() {

                    //ページトップ
                    var pagetop = $('.pageTop');
                    //var menuBtn = $('.menuBtn');
                    var clickBtn = $('.clickBtn');
                    var nav = $('.nav');
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 100) {
                            pagetop.fadeIn();
                        } else {
                            pagetop.fadeOut();
                        }
                    });
                    
                    var w = $(window).width();
                    
                    // スライドの高さ取得
                    if (w <= 600) {
                        var slide_h = $('.slideBg').height();
                        $('#topSlide').css({height: slide_h + 'px'});
                    }
                    
                    clickBtn.click(function() {
                        if($(this).parent().prev('div').hasClass('active')){
                            $(this).parent().prev('div').removeClass('active');
                            $(this).parent().removeClass('active');
                        } else {
                            $(this).parent().prev('div').addClass('active');
                            $(this).parent().addClass('active');
                        }
                    });
//                    pagetop.click(function () {
//                        $('body, html').animate({ scrollTop: 0 }, 500);
//                        return false;
//                   });
                    
                    $(document).on('click', 'a[href^="#"]', function () {
                        var speed = 500;
                        var href= $(this).attr("href");
                        var target = $(href == "#" || href == "" ? 'html' : href);
                        var position = target.offset().top;
                        $("html, body").animate({scrollTop:position}, speed, "swing");
                        return false;
                    });
                    
                    if (w >= 900) {
                        if($(".productList")[0]) {
                            $(".productList").each(function(i, elem) {
                                var li_num = $(elem).children('li').length;
                                var w = 250 * li_num;
                                $(this).css({width: w});
                                $('[name=max' + (i + 1) + ']').val(li_num);
                                //console.log(i);
                            });
                        }
                    }
                    
                    
                    /* 商品スライド */
                    var prev = $('.prev');
                    var next = $('.next');
                    
                    prev.click(function() {
                        var current_num = Number($(this).attr('data'));
                        var next_num = Number($(this).next().attr('data'));
                        var max = Number($(this).next().children('[name^=max]').val());
                        if(current_num > 1){
                            current_num--;
                            next_num--;
                            var translateX = 250 - Number($(this).parent().prev()[0].style.transform.match(/(\d+)/)[0]);
                            $(this).parent().prev().css({transform: 'translateX('+ translateX +'px)'});
                            $(this).attr('data', current_num);
                            $(this).next().attr('data', next_num);
                        }
                        if(current_num == 1){
                            $(this).css({opacity: '0.7'});
                        } else {
                            $(this).css({opacity: '1'});
                        }
                        if(next_num >= max){
                            $(this).next().css({opacity: '0.7'});
                        } else {
                            $(this).next().css({opacity: '1'});
                        }
                        return false;
                    });
                    
                    next.click(function() {
                        var current_num = Number($(this).attr('data'));
                        var prev_num = Number($(this).prev().attr('data'));
                        var max = Number($(this).children('[name^=max]').val());
                        if(current_num < max){
                            current_num++;
                            prev_num++;
                            var translateX = 250 * (current_num - 3);
                            $(this).parent().prev().css({transform: 'translateX(-'+ translateX +'px)'});
                            $(this).attr('data', current_num);
                            $(this).prev().attr('data', prev_num);
                        }
                        if(current_num == max){
                            $(this).css({opacity: '0.7'});
                        } else {
                            $(this).css({opacity: '1'});
                        }
                        if(prev_num == 1){
                            $(this).prev().css({opacity: '0.7'});
                        } else {
                            $(this).prev().css({opacity: '1'});
                        }
                        return false;
                    });

                    $(".doctorAco h4").on("click", function() {
                        if($(this).hasClass('open')) {
                            $(this).removeClass('open');
                        } else {
                            $(this).addClass('open');
                        }
                        $(this).next().slideToggle();
                    });

                });
                
        <?php } ?>
        // wow.js
        new WOW().init();
    </script>
</body>
</html>