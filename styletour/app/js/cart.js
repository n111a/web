$(function(){
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
    var cartgoods = localStorage.getItem('goods');
    var goods = localStorage.getItem('good');
    var addedItems = document.querySelector('.added-items');
    if (cartgoods != null || goods != null) {
        $('.empty').css('display', 'none')
        if (goods != null && cartgoods != null){
            addedItems.innerHTML = cartgoods + goods;
        } else if (cartgoods != null){
            addedItems.innerHTML = cartgoods; 
        } else if (goods != null){
            addedItems.innerHTML = goods;
        }
    }
    if ($('.added-items').html() === '') {
        $('.empty').css('display', 'block');
        localStorage.removeItem('goods');
        localStorage.removeItem('good');
        localStorage.setItem('sum', 0);
        localStorage.setItem('length', 0);
    }
    $('.btn.btn-card').click(function (e) {
        this.parentElement.parentElement.outerHTML = '';
        if ($('.added-items').html() === '') {
            $('.empty').css('display', 'block');
            localStorage.removeItem('goods');
            localStorage.removeItem('good');
            localStorage.setItem('sum', 0);
            localStorage.setItem('length', 0);
        } else {
            var info = '';
            var el = document.querySelector('.added-items');
            var added = document.querySelectorAll('.added');
            info = el.outerHTML;
            var sum = 0;
            for (var i = 0; i < added.length; i++) {
                var add = parseInt($(added[i]).prev('.main-card-price').children('.price').text());
                sum += add;
            }
            
            localStorage.setItem('summ', sum);
            localStorage.setItem('length', added.length);
            localStorage.setItem('good', info);
        }
    })
});