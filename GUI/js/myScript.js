var owl = $('.owl-carousel');

owl.owlCarousel({
    loop:true, // chạy liên tục
    margin:10,
    nav:false,
    dots: false, // không sử dụng dot dưới
    autoplay:true, // tự đông chạy
    autoplayTimeout:2000, // thời gian chạy 2s
    autoplayHoverPause:true, // tự động dừng kho rê chuột vào
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});