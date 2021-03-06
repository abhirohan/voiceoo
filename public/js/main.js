
//Global var to avoid any conflicts
var CRUMINA = {};

(function ($) {

    // USE STRICT
    "use strict";


    //----------------------------------------------------/
    // Predefined Variables
    //----------------------------------------------------/
    var $window = $(window),
        $document = $(document),
        $body = $('body'),
        swipers = {},
        $progress_bar = $('.skills-item'),
        $sidebar = $('.fixed-sidebar');


    /* -----------------------------
     * Equal height elements
     * Script file: theme-plugins.js
     * Documentation about used plugin:
     * http://brm.io/jquery-match-heightź
     * ---------------------------*/
    CRUMINA.equalHeight = function () {
        $('.js-equal-child').find('.theme-module').matchHeight({
            property: 'min-height'
        });
    };


    CRUMINA.equalHeight = function () {
        $('.js-equal-child').find('.theme-module').matchHeight({
            property: 'min-height'
        });
    };

    /* -----------------------------
     * Top Search bar function
     * Script file: selectize.min.js
     * Documentation about used plugin:
     * https://github.com/selectize/selectize.js
     * ---------------------------*/
    CRUMINA.TopSearch = function () {
        $('.js-user-search').selectize({
            persist: false,
            maxItems: 2,
            valueField: 'name',
            labelField: 'name',
            searchField: ['name'],
            options: [
                {image: 'img/avatar30-sm.jpg', name: 'Marie Claire Stevens', message:'12 Friends in Common', icon:'olymp-happy-face-icon'},
                {image: 'img/avatar54-sm.jpg', name: 'Marie Davidson', message:'4 Friends in Common', icon:'olymp-happy-face-icon'},
                {image: 'img/avatar49-sm.jpg', name: 'Marina Polson', message:'Mutual Friend: Mathilda Brinker', icon:'olymp-happy-face-icon'},
                {image: 'img/avatar36-sm.jpg', name: 'Ann Marie Gibson', message:'New York, NY', icon:'olymp-happy-face-icon'},
                {image: 'img/avatar22-sm.jpg', name: 'Dave Marinara', message:'8 Friends in Common', icon:'olymp-happy-face-icon'},
                {image: 'img/avatar41-sm.jpg', name: 'The Marina Bar', message:'Restaurant / Bar', icon:'olymp-star-icon'}
            ],
            render: {
                option: function(item, escape) {
                    return '<div class="inline-items">' +
                        (item.image ? '<div class="author-thumb"><img src="' + escape(item.image) + '" alt="avatar"></div>' : '') +
                            '<div class="notification-event">' +
                                (item.name ? '<span class="h6 notification-friend"></a>' + escape(item.name) + '</span>' : '') +
                                (item.message ? '<span class="chat-message-item">' + escape(item.message) + '</span>' : '') +
                            '</div>'+
                            (item.icon ? '<span class="notification-icon"><svg class="' + escape(item.icon) + '"><use xlink:href="icons/icons.svg#' + escape(item.icon) + '"></use></svg></span>' : '') +
                        '</div>';
                },
                item: function(item, escape) {
                    var label = item.name;
                    return '<div>' +
                        '<span class="label">' + escape(label) + '</span>' +
                        '</div>';
                }
            }
        });
    };
    /* -----------------------------
     * Material design js effects
     * Script file: material.min.js
     * Documentation about used plugin:
     * http://demos.creative-tim.com/material-kit/components-documentation.html
     * ---------------------------*/
    CRUMINA.Materialize = function () {
        $.material.init();

        $('.checkbox > label').on('click', function () {
            $(this).closest('.checkbox').addClass('clicked');
        })
    };


    /* -----------------------------
     * Bootstrap components init
     * Script file: theme-plugins.js, tether.min.js
     * Documentation about used plugin:
     * https://v4-alpha.getbootstrap.com/getting-started/introduction/
     * ---------------------------*/
    CRUMINA.Bootstrap = function () {
        //  Activate the Tooltips
        $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

        // And Popovers
        $('[data-toggle="popover"]').popover();


        /* -----------------------------
         * Replace select tags with bootstrap dropdowns
         * Script file: theme-plugins.js
         * Documentation about used plugin:
         * https://silviomoreto.github.io/bootstrap-select/
         * ---------------------------*/
        $('.selectpicker').selectpicker();


        /* -----------------------------
         * Date time picker input field
         * Script file: daterangepicker.min.js, moment.min.js
         * Documentation about used plugin:
         * https://v4-alpha.getbootstrap.com/getting-started/introduction/
         * ---------------------------*/
        var date_select_field = $('input[name="datetimepicker"]');
        if (date_select_field.length) {
            var start = moment().subtract(29, 'days');

            date_select_field.daterangepicker({
                startDate: start,
                autoUpdateInput: false,
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
            date_select_field.on('focus', function () {
                $(this).closest('.form-group').addClass('is-focused');
            });
            date_select_field.on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY'));
                $(this).closest('.form-group').addClass('is-focused');
            });
            date_select_field.on('hide.daterangepicker', function () {
                if ('' === $(this).val()){
                    $(this).closest('.form-group').removeClass('is-focused');
                }
            });

        }


    };


    /* -----------------------------
     * Lightbox popups for media
     * Script file: jquery.magnific-popup.min.js
     * Documentation about used plugin:
     * http://dimsemenov.com/plugins/magnific-popup/documentation.html
     * ---------------------------*/
    CRUMINA.mediaPopups = function () {
        $('.play-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        $('.js-zoom-image').magnificPopup({
            type: 'image',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function () {
                    // just a hack that adds mfp-anim class to markup
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = 'mfp-zoom-in';
                }
            },
            closeOnContentClick: true,
            midClick: true
        });
        $('.js-zoom-gallery').each(function () {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                },
                removalDelay: 500, //delay removal by X to allow out-animation
                callbacks: {
                    beforeOpen: function () {
                        // just a hack that adds mfp-anim class to markup
                        this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                        this.st.mainClass = 'mfp-zoom-in';
                    }
                },
                closeOnContentClick: true,
                midClick: true
            });
        });
    };

    /* -----------------------------
     * Sliders and Carousels
     * Script file: swiper.jquery.min.js
     * Documentation about used plugin:
     * http://idangero.us/swiper/api/
     * ---------------------------*/

    CRUMINA.initSwiper = function () {
        var initIterator = 0;
        var $breakPoints = false;
        $('.swiper-container').each(function () {

            var $t = $(this);
            var index = 'swiper-unique-id-' + initIterator;

            $t.addClass('swiper-' + index + ' initialized').attr('id', index);
            $t.find('.swiper-pagination').addClass('pagination-' + index);

            var $effect = ($t.data('effect')) ? $t.data('effect') : 'slide',
                $crossfade = ($t.data('crossfade')) ? $t.data('crossfade') : true,
                $loop = ($t.data('loop') == false) ? $t.data('loop') : true,
                $showItems = ($t.data('show-items')) ? $t.data('show-items') : 1,
                $scrollItems = ($t.data('scroll-items')) ? $t.data('scroll-items') : 1,
                $scrollDirection = ($t.data('direction')) ? $t.data('direction') : 'horizontal',
                $mouseScroll = ($t.data('mouse-scroll')) ? $t.data('mouse-scroll') : false,
                $autoplay = ($t.data('autoplay')) ? parseInt($t.data('autoplay'), 10) : 0,
                $autoheight = ($t.hasClass('auto-height')) ? true: false,
                $slidesSpace = ($showItems > 1) ? 20 : 0;

            if ($showItems > 1) {
                $breakPoints = {
                    480: {
                        slidesPerView: 1,
                        slidesPerGroup: 1
                    },
                    768: {
                        slidesPerView: 2,
                        slidesPerGroup: 2
                    }
                }
            }

            swipers['swiper-' + index] = new Swiper('.swiper-' + index, {
                pagination: '.pagination-' + index,
                paginationClickable: true,
                direction: $scrollDirection,
                mousewheelControl: $mouseScroll,
                mousewheelReleaseOnEdges: $mouseScroll,
                slidesPerView: $showItems,
                slidesPerGroup: $scrollItems,
                spaceBetween: $slidesSpace,
                keyboardControl: true,
                setWrapperSize: true,
                preloadImages: true,
                updateOnImagesReady: true,
                autoplay: $autoplay,
                autoHeight: $autoheight,
                loop: $loop,
                breakpoints: $breakPoints,
                effect: $effect,
                fade: {
                    crossFade: $crossfade
                },
                parallax: true,
                onSlideChangeStart: function (swiper) {
                    var sliderThumbs = $t.siblings('.slider-slides');
                    if (sliderThumbs.length) {
                        sliderThumbs.find('.slide-active').removeClass('slide-active');
                        var realIndex = swiper.slides.eq(swiper.activeIndex).attr('data-swiper-slide-index');
                        sliderThumbs.find('.slides-item').eq(realIndex).addClass('slide-active');
                    }
                }
            });
            initIterator++;
        });
        

        //swiper arrows
        $('.btn-prev').on('click', function () {
            var sliderID = $(this).closest('.slider-slides').siblings('.swiper-container').attr('id');
            swipers['swiper-' + sliderID].slidePrev();
        });

        $('.btn-next').on('click', function () {
            var sliderID = $(this).closest('.slider-slides').siblings('.swiper-container').attr('id');
            swipers['swiper-' + sliderID].slideNext();
        });
        
        //swiper arrows
        $('.btn-prev-without').on('click', function () {
            var sliderID = $(this).closest('.swiper-container').attr('id');
            swipers['swiper-' + sliderID].slidePrev();
        });

        $('.btn-next-without').on('click', function () {
            var sliderID = $(this).closest('.swiper-container').attr('id');
            swipers['swiper-' + sliderID].slideNext();
        });
        
        
        // Click on thumbs
        $('.slider-slides .slides-item').on('click', function () {
            if ($(this).hasClass('slide-active')) return false;
            var activeIndex = $(this).parent().find('.slides-item').index(this);
            var sliderID = $(this).closest('.slider-slides').siblings('.swiper-container').attr('id');
            swipers['swiper-' + sliderID].slideTo(activeIndex + 1);
            $(this).parent().find('.slide-active').removeClass('slide-active');
            $(this).addClass('slide-active');

            return false;
        });
    };

    
    /* -----------------------
     * Progress bars Animation
     * --------------------- */
    CRUMINA.progresBars = function () {
        $progress_bar.appear({force_process: true});
        $progress_bar.on('appear', function () {
            var current_bar = $(this);
            if (!current_bar.data('inited')) {
                current_bar.find('.skills-item-meter-active').fadeTo(300, 1).addClass('skills-animate');
                current_bar.data('inited', true);
            }
        });
    };



    /* -----------------------------
     * Isotope sorting
     * ---------------------------*/

    CRUMINA.IsotopeSort = function () {
        var $container = $('.sorting-container');
        $container.each(function () {
            var $current = $(this);
            var layout = ($current.data('layout').length) ? $current.data('layout') : 'masonry';
            $current.isotope({
                itemSelector: '.sorting-item',
                layoutMode: layout,
                percentPosition: true
            });

            $current.imagesLoaded().progress(function () {
                $current.isotope('layout');
            });

            var $sorting_buttons = $current.siblings('.sorting-menu').find('li');

            $sorting_buttons.on('click', function () {
                if ($(this).hasClass('active')) return false;
                $(this).parent().find('.active').removeClass('active');
                $(this).addClass('active');
                var filterValue = $(this).data('filter');
                if (typeof filterValue != "undefined") {
                    $current.isotope({filter: filterValue});
                    return false;
                }
            });
        });
    };

    /* -----------------------------
     * Toggle functions
     * ---------------------------*/

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href"); // activated tab
        if('#events' === target){
            $('.fc-state-active').click();
        }
    });

    // Toggle aside panels
    $(".js-sidebar-open").on('click', function () {
        $(this).toggleClass('active');
        $(this).closest($sidebar).toggleClass('open');
        return false;
    } );

    // Close on "Esc" click
    $window.keydown(function (eventObject) {
        if (eventObject.which == 27 && $sidebar.is(':visible')) {
            $sidebar.removeClass('open');
        }
    });

    // Close on click outside elements.
    $document.on('click', function (event) {
        if (!$(event.target).closest($sidebar).length && $sidebar.is(':visible')) {
            $sidebar.removeClass('open');
        }
    });

    // Toggle inline popups

    var $popup = $('.window-popup');

    $(".js-open-popup").on('click', function (event) {
        var target_popup = $(this).data('popup-target');
        var current_popup = $popup.filter(target_popup);
        var offset = $(this).offset();
        current_popup.addClass('open');
        current_popup.css('top', (offset.top - (current_popup.innerHeight() / 2)));
        $body.addClass('overlay-enable');
        return false;
    });

    // Close on "Esc" click
    $window.keydown(function (eventObject) {
        if (eventObject.which == 27) {
            $popup.removeClass('open');
            $body.removeClass('overlay-enable');
            $('.profile-menu').removeClass('expanded-menu');
            $('.popup-chat-responsive').removeClass('open-chat');
            $('.profile-settings-responsive').removeClass('open');
        }
    });

    // Close on click outside elements.
    $document.on('click', function (event) {
        if (!$(event.target).closest($popup).length) {
            $popup.removeClass('open');
            $body.removeClass('overlay-enable');
            $('.profile-menu').removeClass('expanded-menu');
        }
    });

    // Close active tab on second click.
    $('[data-toggle=tab]').on('click', function(){
        if ($(this).hasClass('active') && $(this).closest('ul').hasClass('mobile-app-tabs')){
            $($(this).attr("href")).toggleClass('active');
            $(this).removeClass('active');
            return false;
        }
    });


    // Close on "X" click
    $(".js-close-popup").on('click', function () {
        $(this).closest($popup).removeClass('open');
        $body.removeClass('overlay-enable');
        return false
    });

    $(".profile-settings-open").on('click', function () {
        $('.profile-settings-responsive').toggleClass('open');
        return false
    });

    $(".js-open-choose-from-my-photo").on('click', function () {
        $('.choose-from-my-photo').addClass('open');
        $('.update-header-photo').removeClass('open');
    });

    $(".js-expanded-menu").on('click', function () {
        $('.profile-menu').toggleClass('expanded-menu');
        return false
    });

    $(".js-chat-open").on('click', function () {
        $('.popup-chat-responsive').toggleClass('open-chat');
        return false
    });
    $(".js-chat-close").on('click', function () {
        $('.popup-chat-responsive').removeClass('open-chat');
        return false
    });
        /* -----------------------------
     * On DOM ready functions
     * ---------------------------*/

    $document.ready(function () {
        CRUMINA.Bootstrap();
        CRUMINA.Materialize();
        CRUMINA.initSwiper();
        CRUMINA.progresBars();
        CRUMINA.IsotopeSort();

        // Run scripts only if they included on page.

        if (typeof $.fn.selectize !== 'undefined'){
            CRUMINA.TopSearch();
        }
        if (typeof $.fn.matchHeight !== 'undefined'){
            CRUMINA.equalHeight();
        }
        if (typeof $.fn.magnificPopup !== 'undefined'){
            CRUMINA.mediaPopups();
        }
        if (typeof $.fn.gifplayer !== 'undefined'){
            $('.gif-play-image').gifplayer();
        }
        if (typeof $.fn.mediaelementplayer !== 'undefined'){
            $('#mediaplayer').mediaelementplayer({
                "features": ['prevtrack', 'playpause', 'nexttrack', 'loop', 'shuffle', 'current', 'progress', 'duration', 'volume']
            });
        }

        $('.mCustomScrollbar').perfectScrollbar({wheelPropagation:false});

    });
})(jQuery);
/*----------------------Abhsihek's ChangesStarts from here----------------------*/


function educationClone() {
    var titleedu = document.getElementById("titleedu");
    var schooledu = document.getElementById("schooledu");
    var periodedu = document.getElementById("periodedu");
    var descedu = document.getElementById("descedu");
    var titlecln = titleedu.cloneNode(true);
    var schoolcln = schooledu.cloneNode(true);
    var periodcln = periodedu.cloneNode(true);
    var desccln = descedu.cloneNode(true);
    var moreedu = document.getElementById("more-edu");
    moreedu.appendChild(titlecln);
    moreedu.appendChild(schoolcln);
    moreedu.appendChild(periodcln);
    moreedu.appendChild(desccln);
}
function workClone() {
    var titlework = document.getElementById("titlework");
    var namework = document.getElementById("namework");
    var periodwork = document.getElementById("periodwork");
    var descwork = document.getElementById("descwork");
    var titlecln = titlework.cloneNode(true);
    var namecln = namework.cloneNode(true);
    var periodcln = periodwork.cloneNode(true);
    var desccln = descwork.cloneNode(true);
    var morework = document.getElementById("more-work");
    morework.appendChild(titlecln);
    morework.appendChild(namecln);
    morework.appendChild(periodcln);
    morework.appendChild(desccln);
}


//Loader
window.onload=function(){
        $('#loadermain').hide();

}
//Upload Avatar




/*--------------------Header Manipulation--------------------*/

var _coverURL = window.URL || window.webkitURL;
    $("#user-header").change(function(){
            $('#loadermain').show();
        var coverCurrentFile, img;
        if ((coverCurrentFile = this.files[0])) {
            img = new Image();
            img.onload = function () {
                var maxWidth  = 3500; // Max width for the image
                var maxHeight = 3000;    // Max height for the image
                var minWidth  = 900; // Max width for the image
                var minHeight = 400;    // Max height for the image
                var ratio = 0;  // Used for aspect ratio
                var nWidth  = this.width;
                var nHeight = this.height;
                /*if(nHeight > maxHeight || nWidth < minWidth || nHeight < minHeight ){
                    $('#filelargehit').click();
                   return false;
                }*/
                if(nWidth > maxWidth){
                    ratio = maxWidth / nWidth;   // get ratio for scaling image
                    nHeight = nHeight * ratio;    // Reset height to match scaled image
                    nWidth  = nWidth * ratio;    // Reset width to match scaled image
                }
                var coverReader = new FileReader();
                coverReader.onload = function (e) {
                    $('#header-to-crop').attr('src', e.target.result);
                }  
                coverReader.readAsDataURL(coverCurrentFile);
                setTimeout(function(){
                    var source_img = document.getElementById("header-to-crop");
                    var target_img = document.getElementById("covershow");
                    var quality =  70;
                    target_img.src = jic.compressCover(source_img,quality,nWidth,nHeight).src;
                    $('#covershow').attr('src',target_img.src);
                    $('#header-to-crop').css('display','none');
                    setTimeout(function(){$('#hit-cover-change').click();},1000);
                     setTimeout(function(){
                        $('#covershow').rcrop({
                            minSize : [960,350],
                            grid : true,
                            preserveAspectRatio:true,
                        });
                    },2000);
                    $('#loadermain').hide();
                    $('#coverimagebase64').val(target_img.src);
                },1000);

            };
            img.src = _coverURL.createObjectURL(coverCurrentFile);
        }
    });

    var header_to_crop = $('#covershow'),
    inputsCover = {
        x : $('#cover-x'),
        y : $('#cover-y'),
        width : $('#cover-width'),
        height : $('#cover-height')
    },
    fillCover = function(){
        var values = header_to_crop.rcrop('getValues');
        for(var coord in inputsCover){
            inputsCover[coord].val(values[coord]);
        }
    };

    // Fill inputs when Responsive Cropper is ready and when crop area is being resized or dragged 
    header_to_crop.on('rcrop-change rcrop-ready', fillCover);
    $('.upload-cover-result').click(function(){
        $('#header-forms').submit();
    });


    /*--------------------Header Manipulation End--------------------*/
    

/*--------------------Upload Note Featured--------------------*/

/*--------------------Avatar Manipulation--------------------*/

var _avatarURL = window.URL || window.webkitURL;
    $("#user-avatar").change(function(){
        var avatarCurrentFile, avatarimg;
        if ((avatarCurrentFile = this.files[0])) {
            avatarimg = new Image();
            avatarimg.onload = function () {
                var maxWidthAvatar  = 1920; // Max width for the image
                var maxHeightAvatar = 6000;    // Max height for the image
                var minWidthAvatar  = 600; // Max width for the image
                var minHeightAvatar = 300;    // Max height for the image
                var avatarRatio = 0;  // Used for aspect avatarRatio
                var nWidthAvatar  = this.width;
                var nHeightAvatar = this.height;
                if(nHeightAvatar > maxHeightAvatar || nWidthAvatar < minWidthAvatar || nHeightAvatar < minWidthAvatar){
                    $('#avatarfilelargehit').click();
                   return false;
                }
                if(nWidthAvatar > maxWidthAvatar){
                    avatarRatio = maxWidthAvatar / nWidthAvatar;   // get avatarRatio for scaling image
                    nHeightAvatar = nHeightAvatar * avatarRatio;    // Reset height to match scaled image
                    nWidthAvatar  = nWidthAvatar * avatarRatio;    // Reset width to match scaled image
                }
                var avatarReader = new FileReader();
                avatarReader.onload = function (e) {
                    $('#avatar-to-crop').attr('src', e.target.result);
                }  
                avatarReader.readAsDataURL(avatarCurrentFile);
                setTimeout(function(){
                    var source_img = document.getElementById("avatar-to-crop");
                    var target_img = document.getElementById("avatarShow");
                    var quality =  70;
                    target_img.src = jic.compressCover(source_img,quality,nWidthAvatar,nHeightAvatar).src;
                    setTimeout(function(){$('#hit-avatar-change').click();},1000);
                    $('#avatarShow').attr('src', target_img.src);
                    $('#avatar-to-crop').css('display','none');
                     setTimeout(function(){
                        $('#avatarShow').rcrop({
                            /*minSize : [200,200],
                            maxSize : [900,900],*/
                            preserveAspectRatio:true,
                            grid : true,
                            /*preview : {
                                display: true,
                                size : [300,300],
                            }*/
                        });
                    },2000);
                    $('#avatarimagebase64').val(target_img.src);
                },1000);

            };
            avatarimg.src = _avatarURL.createObjectURL(avatarCurrentFile);
        }
    });

    var avatar_to_crop = $('#avatarShow'),
    inputsAvatar = {
        x : $('#avatar-x'),
        y : $('#avatar-y'),
        width : $('#avatar-width'),
        height : $('#avatar-height')
    },
    fillAvatar = function(){
        var valuesAvatar = avatar_to_crop.rcrop('getValues');
        for(var coordAvatar in inputsAvatar){
            inputsAvatar[coordAvatar].val(valuesAvatar[coordAvatar]);
        }
    };

    // Fill inputs when Responsive Cropper is ready and when crop area is being resized or dragged 
    avatar_to_crop.on('rcrop-change rcrop-ready', fillAvatar);
    $('.upload-avatar-result').click(function(){
        $('#avatar-forms').submit();
    });


    /*--------------------Avatar Manipulation End--------------------*/

    

/*--------------------Upload Note Featured--------------------*/
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#fetatured-upload').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#note-featured").change(function(){
    var noteFile, noteImg;
    if ((noteFile = this.files[0])) {
        noteImg = new Image();
        noteImg.onload = function () {
            var maxWidthAvatar  = 1920; // Max width for the image
            var maxHeightAvatar = 6000;    // Max height for the image
            var minWidthAvatar  = 600; // Max width for the image
            var minHeightAvatar = 300;    // Max height for the image
            var avatarRatio = 0;  // Used for aspect avatarRatio
            var nWidthAvatar  = this.width;
            var nHeightAvatar = this.height;
            if(nWidthAvatar > maxWidthAvatar){
                avatarRatio = maxWidthAvatar / nWidthAvatar;   // get avatarRatio for scaling image
                nHeightAvatar = nHeightAvatar * avatarRatio;    // Reset height to match scaled image
                nWidthAvatar  = nWidthAvatar * avatarRatio;    // Reset width to match scaled image
            }
            var avatarReader = new FileReader();
            avatarReader.onload = function (e) {
                $('#fetatured-upload').attr('src', e.target.result);
            }  
            avatarReader.readAsDataURL(noteFile,);
            $('.if-featured').show();
            setTimeout(function(){
                var source_img = document.getElementById("fetatured-upload");
                var target_img = document.getElementById("fetatured-upload");
                var quality =  70;
                target_img.src = jic.compressCover(source_img,quality,nWidthAvatar,nHeightAvatar).src;
                $('#fetatured-upload').attr('src', target_img.src);
                //$('#avatar-to-crop').css('display','none');
                //$('#avatarimagebase64').val(target_img.src);
            },2000);

        };
        noteImg.src = _avatarURL.createObjectURL(noteFile,);
    }
});
$('.olymp-close-icon').click(function(){
    $('.if-featured').hide();
    $('#note-featured').val('');
});

/*--------------------Upload Note Featured End--------------------*/


    




