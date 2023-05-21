
$(function () {
    $('.header .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
    });
    $('.sidebar .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
    });
    if ($('body').innerWidth() < 1200) {
        $('.main .owl-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            margin: 15,
            navText: ['', '<i class="fa fa-chevron-right"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    
                },
                768: {
                    items: 2,
                }
            }
        });
    } 
    

    window.addEventListener('resize', function (e) {
        if($('body').innerWidth()>=1200){
            $('.main .owl-carousel').trigger('destroy.owl.carousel');
        } else {
            $('.main .owl-carousel').owlCarousel({
                loop: true,
                dots: false,
                nav: true,
                margin: 15,
                navText: ['', '<i class="fa fa-chevron-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,

                    },
                    768: {
                        items: 2,
                    }
                }
            });
        }
    });

    $('.partners .owl-carousel').owlCarousel({
        items: 6,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        margin: 35,
        autoWidth: true,
    });

    $('button.fa-heart').click(function () {
        $(this).toggleClass('active');
    });
    localStorage.setItem('sum', 0);
    localStorage.setItem('addedlength', 0);
    localStorage.removeItem('goods');
    $('.btn.btn-card').click(function (e) {
        e.prventDefault;
        var self = this;
        var sum = 0;
        $(self).toggleClass('added');
        var added = $('.added');
        if (self.classList.contains('added')) {
            self.textContent = 'remove from cart';
        } else {
            self.textContent = 'add to cart';
        }
        for (var i = 0; i < added.length; i++) {
            var add = parseInt($(added[i]).prev('.main-card-price').children('.price').text());
            sum += add;
        }
        console.log(sum);
        localStorage.setItem('sum', sum);
        localStorage.setItem('addedlength', added.length);
        var mainCart = '';
        for (var j = 0; j < added.length; j++) {
            mainCart += (added[j].parentElement.parentElement.outerHTML);
        }
        if (added.length === 0) {
            localStorage.removeItem('goods');
        } else {
            localStorage.setItem('goods', mainCart);
        }
    });

    $('.shopping-cart').hover(function () {
        var price = document.querySelector('.sum-price');
        var pieses = document.querySelector('.sum-info');
        var iter = document.querySelector('.itterator');
        var sum = parseInt(localStorage.getItem('sum')) + parseInt(localStorage.getItem('summ'));
        var added = parseInt(localStorage.getItem('addedlength')) + parseInt(localStorage.getItem('length'));
        if (added > 0) {
            iter.textContent = added;
            $(iter).css('display', 'block');
            price.textContent = '$' + sum + '.00';
            if (added === 1) {
                pieses.textContent = ' 1 piece';
            } else {
                pieses.textContent = added + ' pieses';
            }
        } else {
            $('.itterator').css('display', 'none');
            pieses.textContent = ' 0 pieces';
            price.textContent = '$00.00'
        }
        $('.sum').css('display', 'block');
        $('.itterator').css('display', 'none');
    },
        function () {
            $('.sum').css('display', 'none');
            var added = parseInt(localStorage.getItem('addedlength')) + parseInt(localStorage.getItem('length'));
            if (added > 0) {
                $('.itterator').css('display', 'block');
            } else {
                $('.itterator').css('display', 'none');
            }
        });
    $('.dropdown').click(function (e) {
        e.preventDefault();
        var selector = $(this).attr('href');
        $(selector).slideToggle(100);
        $('.dropdown-menu').not(selector).slideUp(100);
    });
    $('body').click(function (e) {
        var a = $(".dropdown");
        var li = $(".dropdown-menu-link")
        if (!a.is(e.target) && !li.is(e.target)) {
            $('.dropdown-menu').slideUp(100);
        }
    });

    $('.btn-collapse').click(function () {
        var sel = $(this).attr('data-show-collapse');
        $('.collapse').not(sel).slideUp('fast');
        $(sel).slideToggle('fast');
    });
    window.addEventListener('resize', function (e) {
        if ($('body').innerWidth() >= 1200) {
            $('.collapse').removeAttr('style');
        }
    });
    $('#js-aside-show').click(function () {
        $('.sidebar').toggleClass('show');
    })
});


