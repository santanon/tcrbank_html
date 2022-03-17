$(function() {
    
    var $range = $(".irs"),
        $from = $(".js-value-limit-max, .js-value-limit-max2"),
        range,
        min = 30000,
        max = 200000,
        from;

    var updateValues = function () {
        $from.prop("value", from);
    };
    $range.ionRangeSlider({
        min: min,
        max: max,
        grid: false,
        step: 1000,
        from: 200000,//ถ้าไม่fix ให้เอาออก
        keyboard: false,
        onChange: function (data) {
            from = data.from;
            updateValues();
        },
        onFinish: function (data) {
            from = data.from;     
            updateValues();
        },
        prettify: function (num) {
            var n = num.toString();
            n = n.replace(".", ",");
            return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1\,");
        }
    });

    range = $range.data("ionRangeSlider");

    var updateRange = function () {
        range.update({
            from: from,
        });
    };
    $from.on("change", function () {
        from = +$(this).prop("value");
        if (from < min) {
            from = min;
        }
        updateValues();    
        updateRange();
    });


    var numberMask = IMask(
    document.getElementById('money_mask'),
    {
        mask: Number,
        max: 99999999,
        thousandsSeparator: ','
    });



    $('.lazyload').lazy();

    $('#money_mask').focus(function(){
        $('.content-alert .icon img').attr('src','assets/images/icon/icon_phone.png');
        $("#popup_step1_1").fadeOut();
        $("#popup_step1_2").fadeIn();
    });

    $(".email_only").on("keypress",function(e){

        var code = e.charCode || e.keyCode;
        var ch = String.fromCharCode(code);

        if ((ch < "0" || "9" < ch) && (ch < "A" || "Z" < ch) && (ch < "a" || "z" < ch) && (ch!="@") && (ch!=".") && (ch!="-") && (ch!="_") && (e.keyCode!=8) && (e.keyCode!=13))
        {
            return false;
        }
    });

    $('.selectpicker').selectpicker();

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

    $('.list-thumb').slick({
        infinite: true,
        slidesToShow: 4,
        asNavFor: '.list-main',
        focusOnSelect: true,
        arrows: false,
        autoplay: true,
        speed: 2000,
        autoplaySpeed: 5000,
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
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.list-thumb',
        arrows: true,
        autoplay: false,
        speed: 2000,
        autoplaySpeed: 5000,
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
                    speed: 1500,
                }
            },
        ]
    });

    $(".register-online").click(function() {
        $('html,body').animate({
            scrollTop: $(".formcredit").offset().top - 50},
            1500);
    });

    $('.need').click(function(){
        $('.need').removeClass('active');
        $(this).addClass('active')
    });
    $('.format').click(function(){
        $('.format').removeClass('active');
        $(this).addClass('active')
    });
    
    $('.need').click(function(){
        $('.format').removeClass('active');
        $('.bg-color-orange').removeClass('show');
    });
    $('#t1_1').click(function(){
        $('#field_interest').hide();
        $('#remark_1').show();
        $('#remark_2').hide();
    });
    $('#t1_2').click(function(){
        $('#field_interest').show();
        $('#remark_1').hide();
        $('#remark_2').show();
    });
    $('#t2_1').click(function(){
        if($('#t1_1').hasClass('active')){
            $('#t1_t1').show();
            $('#t1_t2').hide();
            $('#t2_t1').hide();
            $('#t2_t2').hide();

            $('#table_total').hide();
            $('.bg-color-orange').addClass('show');
        }else{
            $('#t1_t1').hide();
            $('#t1_t2').hide();
            $('#t2_t1').show();
            $('#t2_t2').hide();

            $('#table_total').hide();
            $('.bg-color-orange').addClass('show');
        }
    });
    $('#t2_2').click(function(){
        if($('#t1_1').hasClass('active')){
            $('#t1_t1').hide();
            $('#t1_t2').show();
            $('#t2_t1').hide();
            $('#t2_t2').hide();

            $('#table_total').show();
            $('.bg-color-orange').addClass('show');
        }else{
            $('#t1_t1').hide();
            $('#t1_t2').hide();
            $('#t2_t1').hide();
            $('#t2_t2').show();

            $('#table_total').show();
            $('.bg-color-orange').addClass('show');
        }
    });

    $('.item01 li').click(function(){
        $('.item01 li').removeClass('active');
        $(this).addClass('active');
    });

    $('#tab_selector').on('change', function (e) {
        $('.content-tabs li a').eq($(this).val()).tab('show');
    });
    
    $('#next_step1').click(function(){
        $('.step2').slideDown('slow');
        $('.step1').slideUp('slow');

        $('.progressbar li').eq(1).addClass('active');

        $('.content-alert .group-line#popup_step1').fadeOut().next('.group-line#popup_step2').delay(500).fadeIn();
    });
    $('#back_step1').click(function(){
        $('.step1').slideDown('slow');
        $('.step2').slideUp('slow');

        $('.progressbar li').eq(1).removeClass('active');

        $('.content-alert .group-line#popup_step2').fadeOut().prev('.group-line#popup_step1, #popup_step1_1').delay(500).fadeIn();
    });
    $('#next_step2').click(function(){
        $('.step3').slideDown('slow');
        $('.step2').slideUp('slow');

        $('.progressbar li').eq(2).addClass('active');

        $('.content-alert .group-line#popup_step2').fadeOut().next('.group-line#popup_step3').delay(500).fadeIn();
    });
    $('#back_step2').click(function(){
        $('.step2').slideDown('slow');
        $('.step3').slideUp('slow');

        $('.progressbar li').eq(2).removeClass('active');
        $('.content-alert .group-line#popup_step3').fadeOut().prev('.group-line#popup_step2').delay(500).fadeIn();
    });

    //Consent
    $('#accept_step3').click(function(event) {
        if (this.checked) {
            $('#btn_submit').removeAttr('disabled', 'disabled');
        } else {
            $('#btn_submit').attr('disabled', 'disabled');
        }
    });
    $('#consent_step1').click(function(event) {
        if (this.checked) {
            $('#btn_submit_consent').removeAttr('disabled', 'disabled');
        } else {
            $('#btn_submit_consent').attr('disabled', 'disabled');
        }
    });

    // Comma thousand
    $('.fm_money').keyup(function (event) {
        // skip for arrow keys
        if (event.which >= 37 && event.which <= 40) return;
        // format number
        $(this).val(function (index, value) {
            return value
            .replace(/\D/g, "")
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            ;
        });
    });


    $("#slc_job").change(function () {
        if ($(this).val() == "0") {
            $('#modal_conset').modal('show');
        }
    })
    $(document).on('show.bs.modal', '.modal', function (event) {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function () {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });


    AOS.init({
        duration: 5000,
        easing: 'linear'
    });
});



$(function() {
    var $range2 = $(".irs2"),
            $from2 = $(".js-value2"),
            range,
            min = 0,
            max = 2000000,
            from;

        var updateValues = function () {
            $from2.prop("value", from);
            
        };
        $range2.ionRangeSlider({
            min: min,
            max: max,
            step: 1000,
            from: 250000,//ถ้าไม่fix ให้เอาออก
            grid: true,
            keyboard: false,
            onChange: function (data) {
                from = data.from;
                updateValues();
            },
            onFinish: function (data) {
                from = data.from;     
                updateValues();
            },
            prettify: function (num) {
                var n = num.toString();
                n = n.replace(".", ",");
                return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1\,");
            }
        });

        range = $range2.data("ionRangeSlider");
        
        var updateRange = function () {
            range.update({
                from: from,
            });
        };
        $from2.on("change", function () {
            from = +$(this).prop("value");
            if (from < min) {
                from = min;
            }
            updateValues();    
            updateRange();
        });
})