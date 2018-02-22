$(document).ready(function () {
    $('.rumiservice1_block_subblock4').live('click', function () {
        $("html,body").animate({scrollTop: $('#rumiservice5').offset().top - 150}, 500);
        return false;
    });
    $(".yeshsho, .closes, .black-close").click(function () {
        $(".my-popup").slideToggle(300, 'swing');
    });
    $(".mini-form, .closes-form, .black-close-form").click(function () {
        $(".my-popup-form").slideToggle(300, 'swing');
    });
    var end_loading = 0;
    var chartOptions = [];
    var data1, data2, data3 = [];
    if ($('#chart1').length > 0)
        data1 = $('#chart1').data('chart');
    if ($('#chart2').length > 0)
        data2 = $('#chart2').data('chart');
    if ($('#chart3').length > 0)
        data3 = $('#chart3').data('chart');
    
    chartOptions[1] = {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        yAxis: {
            minRange: 10,
            tickAmount: 16,
            title: {
                text: ''
            },
            gridLineColor: '#f6f6f6',
            showFirstLabel: false,
            labels: {
                style: {
                    fontSize: '15px',
                    color: '#818181'
                }
            }
        },
        xAxis: {
            type: 'category',
            visible: false
        },
        colors: ['#215f8b'],
        legend: {
            enabled: false
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<b>{point.y:.0f}</b>'
        },
        series: [{
                maxPointWidth: '50',
                borderRadius: 3,
                colorByPoint: false,
                data: data1,
                dataLabels: {
                    enabled: true,
                    color: '#818181',
                    shadow: false,
                    align: 'center',
                    format: '{point.name}',
                    style: {
                        textShadow: 'none',
                        fontSize: '14px',
                        textAlign: 'center'
                    }
                }
            }]
    };
    chartOptions[2] = {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        yAxis: {
            minRange: 10,
            tickAmount: 16,
            title: {
                text: ''
            },
            gridLineColor: '#f6f6f6',
            showFirstLabel: false,
            labels: {
                style: {
                    fontSize: '15px',
                    color: '#818181'
                }
            }
        },
        xAxis: {
            type: 'category',
            visible: false
        },
        colors: ['#ff9b32'],
        legend: {
            enabled: false
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<b>{point.y:.0f}</b>'
        },
        series: [{
                maxPointWidth: '50',
                borderRadius: 3,
                colorByPoint: false,
                data: data2,
                dataLabels: {
                    enabled: true,
                    color: '#818181',
                    shadow: false,
                    align: 'center',
                    format: '{point.name}',
                    style: {
                        textShadow: 'none',
                        fontSize: '14px',
                        textAlign: 'center'
                    }
                }
            }]
    };
    chartOptions[3] = {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        yAxis: {
            minRange: 10,
            tickAmount: 16,
            title: {
                text: ''
            },
            gridLineColor: '#f6f6f6',
            showFirstLabel: false,
            labels: {
                style: {
                    fontSize: '15px',
                    color: '#818181'
                }
            }
        },
        xAxis: {
            type: 'category',
            visible: false
        },
        colors: ['#71b430'],
        legend: {
            enabled: false
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<b>{point.y:.0f}</b>'
        },
        series: [{
                maxPointWidth: '50',
                borderRadius: 3,
                colorByPoint: false,
                data: data3,
                dataLabels: {
                    enabled: true,
                    color: '#818181',
                    shadow: false,
                    align: 'center',
                    format: '{point.name}',
                    style: {
                        textShadow: 'none',
                        fontSize: '14px',
                        textAlign: 'center'
                    }
                }
            }]
    };
    function scroll_loading() {
        if ($(window).scrollTop() + $(window).height() > $('#rumiservice3').offset().top + 500) {
            if (end_loading == 0) {
                end_loading = 1;
                $(function () {
                    if ($('#chart1').length > 0)
                        $('#chart1').highcharts(chartOptions[1]);
                    if ($('#chart2').length > 0)
                        $('#chart2').highcharts(chartOptions[2]);
                    if ($('#chart3').length > 0)
                        $('#chart3').highcharts(chartOptions[3]);
                });
            }
        }
    }
    $(document).ready(function () {
        $('.rumiservice3_button').live('click', function () {
            if ($(this).hasClass('rumiservice3_button_active'))
                location = $(this).attr('href');
            $('.rumiservice3_button').removeClass('rumiservice3_button_active');
            $(this).addClass('rumiservice3_button_active');
            $('.rumiservice3_button').removeClass('rumiservice3_button_clicked');
            $(this).addClass('rumiservice3_button_clicked');
            var button_id = $(this).attr('button_id');
            $('.rumiservice3_blocks').css('display', 'none');
            $('.rumiservice3_block' + button_id).css('display', 'block');
            $('#rumiservice3 .rumiservice3_buttons .rumiservice3_button_container a').css('display', 'none');
            $(this).parent().find('a').css('display', 'block');
            var chart = $('#chart' + button_id).highcharts();
            chart.destroy();
            $('#chart' + button_id).highcharts(chartOptions[button_id]);
            return false;
        });
        scroll_loading();
    });
    $(window).scroll(function () {
        scroll_loading();
    });
    $('.owl-carousel-2').owlCarousel({
        loop: true,
        navigation: true,
        pagination: true,
        singleItem: true,
        items: 1,
        afterMove: callback,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
    $('.owl-carousel-3').owlCarousel({
        loop: true,
        navigation: true,
        pagination: true,
        singleItem: true,
        items: 1,
        afterMove: callback,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
    $('.owl-carousel').owlCarousel({
        loop: true,
        navigation: true,
        pagination: true,
        items: 1,
        singleItem: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
    function callback(event) {
        var item = $("#rumiservice6 .owl-pagination .active").index() + 1;
        $('.rumiservice6_circle_div').removeClass('rumiservice6_circle_div_active');
        $('#rumiservice6_circle' + item).addClass('rumiservice6_circle_div_active');
    }
    var owl = $(".owl-carousel-2").data('owlCarousel');
    $(document).ready(function () {
        $('.rumiservice6_circle_div').live('click', function () {
            var slide_num = $(this).attr('slide_num') - 1;
            $('.rumiservice6_circle_div').removeClass('rumiservice6_circle_div_active');
            $(this).addClass('rumiservice6_circle_div_active');
            owl.goTo(slide_num);
        });
    });
    $('.rumiservice7_button').live('click', function () {
        $('.rumiservice7_button').removeClass('rumiservice7_button_active');
        $(this).addClass('rumiservice7_button_active');
        var button_id = $(this).attr('button_id');
        $('.rumiservice7_blocks').css('display', 'none');
        $('.rumiservice7_block' + button_id).css('display', 'block');
    });
    $('.rumiservice7_show_all').live('click', function () {
        $(this).parent().find('.rumiservice7_table_tr_container').slideToggle();
        if ($(this).hasClass('rumiservice7_show_all_opened')) {
            $(this).removeClass('rumiservice7_show_all_opened');
            $(this).children('span').html('Показать все');
        } else {
            $(this).addClass('rumiservice7_show_all_opened');
            $(this).children('span').html('Скрыть');
        }
    });
    $('.rumiservice14_show_all').live('click', function () {
        if ($(this).hasClass('rumiservice14_show_all_opened'))
        {
            $('.rumiservice14_block_invisible').css('display', 'none');
            $('.rumiservice14_show_all span').text('Показать все преимущества');
            $(this).removeClass('rumiservice14_show_all_opened');
        } else {
            $('.rumiservice14_block_invisible').css('display', 'inline-block');
            $('.rumiservice14_show_all span').text('Скрыть все преимущества');
            $(this).addClass('rumiservice14_show_all_opened');
        }
        return false;
    });
    $('.show_all_products_button').live('click', function () {
        if (parseInt($('.invisible_product').css('height')) == 0)
        {
            $('.invisible_product').css('height', 'auto');
            $('.invisible_product').css('overflow', 'visible');
            $('.invisible_product').css('display', 'none');
        }
        if ($(this).hasClass('show_all_products_button_opened')) {
            $(this).removeClass('show_all_products_button_opened');
            $(this).html('<span>Показать все</span>');
            $('.invisible_product').slideUp();
        } else {
            $(this).addClass('show_all_products_button_opened');
            $(this).html('<span>Скрыть все</span>');
            $('.invisible_product').slideDown();
        }
    });
});