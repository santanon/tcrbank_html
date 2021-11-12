<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page : ไทยเครดิต</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="canonical" href=""/>

    <!-- Custom CSS -->
    <link rel="preload" href="{{ asset('css/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </noscript>
    <link rel="preload" href="{{ asset('css/content/landingpage.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/content/landingpage.css')}}">
    </noscript>
    
</head>
<body>
    <div class="wrapper-site">
        <header class="header-wrapper landingPage">
            <div class="container -custom">
                <div class="logo">
                    <a href="#" title="ไทยเครดิต">
                        <img src="{{ asset('assets/images/logo/logo.svg')}}" alt="logo thaicredit">
                    </a>
                </div>
            </div>
            
        </header>

        <section class="content-wrapper">
            <div class="banner-wrapper">
                <ul class="list-slide">
                    <li>
                        <div class="item">
                            <img class="d" data-lazy="{{ asset('assets/images/banner/banner-01.webp')}}" alt="banner">
                            <img class="m" data-lazy="{{ asset('assets/images/banner/banner-01-m.webp')}}" alt="banner">
                            <div class="btn-link register-online">
                                <a href="javascript:void(0)">
                                    <div class="text">สมัคร</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <img class="d" data-lazy="{{ asset('assets/images/banner/banner-02.jpg')}}" alt="banner">
                            <img class="m" data-lazy="{{ asset('assets/images/banner/banner-02-m.jpg')}}" alt="banner">
                            <div class="btn-link register-online">
                                <a href="javascript:void(0)">
                                    <div class="text">สมัคร</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="content-wrapper">
            <div class="banner-wrapper">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{ asset('assets/images/banner/banner-01.webp')}}" alt="banner">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/banner/banner-02.webp')}}" alt="banner">
                </div>
            </div>
            </div>
        </section>

        <section class="content-wrapper">
            <div class="banner-wrapper">
                <div class="bxslider">
                    <div><img src="{{ asset('assets/images/banner/banner-01.webp')}}" alt="banner"></div>
                    <div><img src="{{ asset('assets/images/banner/banner-02.webp')}}" alt="banner"></div>
                </div>
            </div>
        </section>

        <section class="content-wrapper -cashexpress">
            <div class="container">
                <div class="cashexpress-wrapper">
                    <div class="cashexpress-main">
                        <ul class="list-main">
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img data-lazy="{{ asset('assets/images/cashexpress/img01.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 2 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัคร</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img data-lazy="{{ asset('assets/images/cashexpress/img02.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัคร</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img data-lazy="{{ asset('assets/images/cashexpress/img03.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 2 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัคร</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img data-lazy="{{ asset('assets/images/cashexpress/img04.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัคร</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-main">
                                    <div class="row align-items-lg-stretch">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-cashexpress">
                                                <img data-lazy="{{ asset('assets/images/cashexpress/img05.png')}}" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="detail-cashexpress">
                                                <div class="title">
                                                    วงเงินสูงสุด 4 ล้านบาท หรือไม่เกิน 5 เท่าของรายได้เฉลี่ยต่อเดือน
                                                </div>
                                                <div class="desc">
                                                    การอนุมัติวงเงินกู้ ขึ้นอยู่กับเอกสารประกอบการพิจารณารายได้ 
                                                    และเงื่อนไขที่ธนาคารกำหนดผ่อนสบาย<br><br>
                                                </div>
                                                <div class="btn-link register-online">
                                                    <a href="javascript:void(0)">
                                                        <div class="text">สมัคร</div>
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icon/icon-RegisterOnline-blue.svg')}}" alt="banner">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="cashexpress-thumb">
                        <ul class="list-thumb">
                            <li>
                                <div class="img-thumb">
                                    <img data-lazy="{{ asset('assets/images/cashexpress/img01-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img data-lazy="{{ asset('assets/images/cashexpress/img02-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img data-lazy="{{ asset('assets/images/cashexpress/img03-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img data-lazy="{{ asset('assets/images/cashexpress/img04-thumb.png')}}" alt="images">
                                </div>
                            </li>
                            <li>
                                <div class="img-thumb">
                                    <img data-lazy="{{ asset('assets/images/cashexpress/img05-thumb.png')}}" alt="images">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer-wrapper">
            <div class="container-fluid bg-footer lazyload" data-src="{{ asset('assets/images/banner/banner-contact.webp')}}">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="title text-white">ติดต่อ ธนาคารไทยเครดิต เพื่อรายย่อย</div>
                        <div class="detail-contact">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img class="lazyload" data-src="{{ asset('assets/images/icon/icon-location.svg')}}" alt="icon location">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">ที่อยู่</div>
                                        <div class="desc">
                                            123 ชั้น 1 อาคารไทยประกันชีวิต ถ.รัชดาภิเษก แขวงดินแดง เขตดินแดง กทม. 10400
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img class="lazyload" data-src="{{ asset('assets/images/icon/icon-customer.svg')}}" alt="icon customer">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">
                                            <a href="tel:02 697 5454">02 697 5454</a>
                                        </div>
                                        <div class="desc">
                                            ศูนย์ลูกค้าสัมพันธ์
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 icon-path">
                                    <div class="icon">
                                        <img class="lazyload" data-src="{{ asset('assets/images/icon/icon-opening.svg')}}" alt="icon opening">
                                    </div>
                                    <div class="text">
                                        <div class="title text-white">08.00-22.00 น.</div>
                                        <div class="desc">
                                            เปิดทำการทุกวัน
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <!-- <div class="list-menu -left">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icon/icon-job.svg')}}" alt="icon"> สมัครงาน
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icon/icon-faq.svg')}}" alt="icon"> FAQ
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="list-menu -right">
                                <ul>
                                    <li>
                                        <a href="https://www.tcrbank.com/th/privacypolicy" target="_blank">
                                            นโยบายความเป็นส่วนตัว
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.tcrbank.com/th/cookiepolicy" target="_blank">
                                            นโยบายความเป็นส่วนตัวในการใช้คุกกี้
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>


        <div class="loading">
            <div class="d-flex justify-content-center align-items-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

    </div>


    <!-- Jquery -->
    <script src="{{ asset('js/jquery-1.12.3.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.11.4.custom.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js" integrity="sha512-mx0L9xs+R5jFQ6OoBbS9oOfdPyymQXsrSAjJ8rncuCxA9FPPrlrCxrr8Xwo+N246jOgHtIPBR0eF61OQuPSoDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" integrity="sha512-BHDCWLtdp0XpAFccP2NifCbJfYoYhsRSZOUM3KnAxy2b/Ay3Bn91frud+3A95brA4wDWV3yEOZrJqgV8aZRXUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css')}}">
    <script src="{{ asset('slick/slick.min.js') }}"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js" integrity="sha512-p55Bpm5gf7tvTsmkwyszUe4oVMwxJMoff7Jq3J/oHaBk+tNQvDKNz9/gLxn9vyCjgd6SAoqLnL13fnuZzCYAUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" integrity="sha512-UBY4KATrDAEKgEEU+RAfY4yWrK0ah43NGwNr5o/xmncxsT+rv8jp7MI3a00I0Ep3NbAx05U5kw3DvyNCoz+Wcw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Lazyloadsize -->
    <script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" integrity="sha512-duR4V2n7kIaA7Yxd7iR3tpfe2/0US6dAYK69VqSAvSvYPVGyCYcPEwzI1Z7KatAAJu8yL0lSMBFdEigvbs1EPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" integrity="sha512-e+Ss4SqKxi4VTMKEonq+qzWZ32jfsuNV/nxu8DHH3viIVdrWWy3CL09hWO1jfKLs+OtJujh6s9RzWrczJ0yuaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script>
        $(function() {

            $('.lazyload').lazy();

            $('.list-slide').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: false,
                autoplaySpeed: 5000,
                speed: 2000,
            });

            $('.owl-carousel').owlCarousel({
                //lazyLoad: true,
                loop:false,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });

            $('.bxslider').bxSlider({
                mode: 'fade',
                captions: true,
                slideWidth: 600
            });


            $('.list-thumb').slick({
                infinite: false,
                slidesToShow: 4,
                asNavFor: '.list-main',
                focusOnSelect: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1025,//start device 768
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 769,//start device 768
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 576,//start device 575
                        settings: {
                            slidesToShow: 1,
                            arrows: false,
                        }
                    },
                ]
            });
            $('.list-main').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.list-thumb',
                arrows: true,
                autoplay: false,
                autoplaySpeed: 5000,
                speed: 2000,
                responsive: [
                    {
                        breakpoint: 769,//start device 768
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 576,//start device 575
                        settings: {
                            dots: true,
                        }
                    },
                ]
            });
        });
    </script>

  
</body>
</html>