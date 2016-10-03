var assignDynamicEventHandlers = function (document) {

    var dynamicProperties = {
        properties: {},
        determiningEvents: [],
        add: function (property, event) {
            if (this.properties[event]) {
                this.properties[event].push(property)
            } else {
                this.properties[event] = [property]
            }

            this.determiningEvents.push(event)
        },
        computeForEvent: function (event) {
            var changingProperties = this.properties[event];

            for (var j = 0; j < changingProperties.length; j++) {
                changingProperties[j]();
            }
        },
        computeInitial: function () {
            for (var i = 0; i < this.determiningEvents.length; i++) {
                this.computeForEvent(this.determiningEvents[i])
            }
        }
    };

    //height adaptivity for top section

    var headerHeight = 95;

    var topSection = $('.personal-page');
    var topSectionContent = topSection.children();
    var divider = topSection.find('.divider-line');
    var maxTopSectionHeight = 804;

    var relativeElementHeight = function (element, property, percentage) {
        return {
            element: element,
            property: property,
            percentage: percentage
        }
    };

    var topSectionHeightParameters = [
        relativeElementHeight(topSection, 'padding-top', 0.3304347826086956),
        relativeElementHeight(topSection, 'padding-bottom', 0.39130434782608695),
        relativeElementHeight(divider, 'margin-top', 0.09782608695652174),
        relativeElementHeight(divider, 'margin-bottom', 0.10869565217391305),
        relativeElementHeight(topSection.find('p'), 'margin-bottom', 0.07173913043478261)
    ];

    /**
     * Computes height of set of DOM elements
     * @param elements
     * @return {number}
     */

    var computeElementsHeight = function (elements) {
        var height = 0;

        elements.each(function () {
            height += $(this).height();
        });

        return height;
    };

    /**
     * Makes the top section fit the screen by height
     * @param windowHeight
     */

    var setTopSectionHeights = function (windowHeight) {
        if (windowHeight > 900) {
            setTopSectionHeights(maxTopSectionHeight + headerHeight);
            return false;
        }

        var totalHeight = windowHeight - headerHeight - computeElementsHeight(topSectionContent);

        for (var i = 0; i < topSectionHeightParameters.length; i++) {
            var elementProperties = topSectionHeightParameters[i];
            var cssObj = {};
            cssObj[elementProperties['property']] = (totalHeight * elementProperties['percentage']).toString() + 'px';
            elementProperties['element'].css(cssObj);
        }
    };

    setTopSectionHeights(document.height());

    var resizeTimeout;

    document.on('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function () {
            setTopSectionHeights(document.height());
        }, 50);
    });

    var infoHeader = $('.about-doctor-header');
    var commentsSection = $('.comments-section');
    var infoHeaderHeight = 45;
    var aboutDoctorSection = $('.about-doctor-section');
    var infoHeaderMovementUpperBorder;
    var infoHeaderMovementLowerBorder;

    dynamicProperties.add(function () {
        infoHeaderMovementUpperBorder = commentsSection.offset().top - infoHeaderHeight - headerHeight;
        infoHeaderMovementLowerBorder = aboutDoctorSection.offset().top - headerHeight;
    }, 'resize');

    var doctorsInfo = $( '.info-scroll' );

    var moveDoctorInfoHeader = function (scrollValue) {
        if (scrollValue < infoHeaderMovementLowerBorder) {
            infoHeader.css({
                position: 'absolute',
                top: 0,
                bottom: 'auto'
            });
            doctorsInfo.css({'overflow-y': 'hidden'});
        } else if (infoHeaderMovementLowerBorder <= scrollValue && scrollValue <= infoHeaderMovementUpperBorder) {
            infoHeader.css({
                position: 'fixed',
                top: 95,
                bottom: 'auto'
            });
            doctorsInfo.css({'overflow-y': 'scroll'})
        } else if (infoHeaderMovementUpperBorder < scrollValue ) {
            infoHeader.css({
                position: 'absolute',
                top: 'auto',
                bottom: 0
            });
            doctorsInfo.css({'overflow-y': 'hidden'});
        }
    };

    var header = $('.header');
    var doctorsInfoOffset;

    dynamicProperties.add(function () {
        doctorsInfoOffset = aboutDoctorSection.offset().top - headerHeight
    }, 'resize');

    var toggleHeaderColor = function (scroll) {
        if (scroll > doctorsInfoOffset) {
            header.addClass('header-orange');
        } else {
            header.removeClass('header-orange');
        }
    };

    var scrollEventTimeout;

    document.on('scroll load', function () {
        var scrollTop = document.scrollTop();

        moveDoctorInfoHeader(scrollTop);

        clearTimeout(scrollEventTimeout);
        scrollEventTimeout = setTimeout(function() {
            toggleHeaderColor(scrollTop);
        }, 50)
    });

    var numberOfSlides = 0;

    // takes a number and makes it into a string with percent at the end
    var cssPercent = function (number) {
        return number.toString() + '%';
    };

    var calculateMissingParts = function (partsInOneSlide, numberOfParts) {
        var numberOfMissingParts = partsInOneSlide - (numberOfParts % partsInOneSlide);
        return numberOfMissingParts === partsInOneSlide ? 0: numberOfMissingParts;
    };

    // render slider with given number of slides in one frame
    // returns number of slides
    var setSliderWidths = function (partsInSlide, slideBlock) {
        var slideParts = slideBlock.find('.slide-part');
        var numberOfParts = slideParts.length;
        var numberOfSlides = Math.ceil(numberOfParts / partsInSlide);
        var partWidth = 100 / (numberOfParts + calculateMissingParts(partsInSlide, numberOfParts));
        slideBlock.css('width', cssPercent(100 * numberOfSlides));
        slideParts.css('width', cssPercent(partWidth));
        return numberOfSlides;
    };

    // moves slide on click
    var changeSlide = function (slider, index) {
        slider.css('left', '-' + cssPercent(index * 100));
    };

    // renders comments slider view
    var renderCommentsSlider = function (sliderName, pagerName, controlsTemplate) {
        var slider = $(sliderName);
        var pager = $(pagerName);
        numberOfSlides = setSliderWidths(3, slider);

        for (var i = 0; i < numberOfSlides; i++) {
            pager.append(controlsTemplate(i));
        }

        var pagerItem = pager.find('.slider-control');

        pagerItem.click(function () {
            var target = $(this);
            changeSlide(slider, target.attr('data-index'));
            pagerItem.removeClass('active-pager-item');
            target.addClass('active-pager-item');
        });

        pagerItem.first().addClass('active-pager-item');

        pager.width(pagerItem.outerWidth(true) * numberOfSlides)
    };

    renderCommentsSlider('.comments-moving-block', '.comments-slider-controls', function (index) {
        return "<div class='slider-control' data-index='" + index +"'></div>"
    });

    for (var i = 0; i < dynamicProperties.determiningEvents.length; i++) {
        var event = dynamicProperties.determiningEvents[i];

        document.on(event, function () {
            dynamicProperties.computeForEvent(event);
        })
    }

    dynamicProperties.computeInitial();

};

var segmentedScrollWithTracking = function (scroll, scrollingBlock, segments, navBlock) {

    navBlock.click(function () {
        var scrollTarget = segments.filter('#' + $(this).attr('data-to'));

        scrollingBlock.animate({
            scrollTop: scrollTarget.position().top
        })
    });

    var getSegmentPositions = function () {
        return segments.map(function () {
            return $(this).position().top;
        }).get();
    };

    var changeCurrent = function (newCurrent) {
        navBlock.removeClass('current');
        newCurrent.addClass('current');
    };

    var isCurrent = function (currentNum, currentScroll, positions) {
        return positions[currentNum] < currentScroll + 1
    };

    var scrolledToBottom = function (currentScroll) {
        var scrollingBlock = scroll.find('.scroll-moving-part');

        if (scrollingBlock.length === 0) {
            scrollingBlock = $('body');
        }

        return scrollingBlock.height() <= scroll.height() + currentScroll
    };

    var determineCurrentlyViewedSegment = function () {
        var positions = getSegmentPositions();
        var currentScroll = scroll.scrollTop();

        if (scrolledToBottom(currentScroll)) {
            changeCurrent(navBlock.last());
            return
        }

        var currentSection = positions.length - 1;

        while (!isCurrent(currentSection, currentScroll, positions) && currentSection > 0) {
            currentSection -= 1;
        }

        changeCurrent(navBlock.eq(currentSection));
    };

    var scrollTimeout;

    scroll.scroll(function () {
        clearTimeout(scrollTimeout);

        scrollTimeout = setTimeout(function () {
            determineCurrentlyViewedSegment();
        }, 50)
    });

    $(window).load(function () {
        determineCurrentlyViewedSegment();
    });
};

$(document).ready(function () {

    var doc = $(window);
    var topSection = $('.top-section');
    var consultationCover = topSection.find( '.consult-form-cover' );

    var animateCoverMovement = function ( rightValue ) {
        var translateValue = 'translate3d(-' + rightValue + 'px, 0, 0)';
        consultationCover.css({
            '-webkit-transform': translateValue,
            '-moz-transform' : translateValue,
            '-ms-transform': translateValue,
            '-o-transform': translateValue,
            'transform': translateValue
        });
    };

    var topSectionMoveLength = 60;

    $('.display-consult-button').click( function () {
        animateCoverMovement(consultationCover.width() + topSectionMoveLength); // display consultation form
        topSection.addClass('form-visible');
    } );

    $( '.hide-consult-form-button' ).click(function () {
        animateCoverMovement(0); // hide consultation form
        topSection.removeClass('form-visible');
    });

    segmentedScrollWithTracking($(window), $('html, body'), $('.page-anchor'), $('.header .navigation li'));

    var infoScroll = $('.info-scroll');

    segmentedScrollWithTracking(
        infoScroll, infoScroll, infoScroll.find('.info-section'), $('.about-doctor-header li')
    );

    assignDynamicEventHandlers(doc);

    var consultForm = $('.consultation-form');

    consultForm.submit(function () {
        var that = $(this);

        that.find('.errors').html('');

        that.request('onConsultationRequest', {
            success: function (errors) {
                var valid = true;

                for (var field in errors) {
                    if (errors.hasOwnProperty(field)) {
                        var currentField = that.find('#' + field);
                        console.log(currentField);
                        currentField.siblings('.errors').html(errors[field]);
                        currentField.closest('.consultation-form-element').addClass('has-errors');
                        valid = false;
                    }
                }

                if (valid) {
                    that.siblings('.message-sent').css('display', 'block');
                }
            }
        });
        return false;
    });

    var toggleFormFocus = function (thisElem, isFocus) {
        var $this = $(thisElem).closest('.consultation-form-element');
        $this.toggleClass('label-visible', isFocus);

        var previousInput = $this.prev('.consultation-form-element');
        if (previousInput.length > 0) {
            previousInput.toggleClass('has-errors', !isFocus);
        }
    };

    consultForm.find("input, textarea").focus(function () {
        toggleFormFocus(this, true)
    }).blur(function () {
        toggleFormFocus(this, false);
    });

    var comments = $('.comments-slider .portrait-block');
    var collapsedHeight = 132;
    var collapsedPadding = 92;
    var hoverPadding = 42;

    comments.hover(
        function () {
            var $this = $(this);
            var description = $this.find('.description');
            var fullHeight = description.height('auto').height();
            description.height(collapsedHeight);

            if (fullHeight > collapsedHeight) {
                $this.css('padding-bottom', hoverPadding);
                description.height(fullHeight);
            }
        },
        function () {
            var $this = $(this);

            $this.find('.description').height(collapsedHeight);
            $this.css('padding-bottom', collapsedPadding);
        });
});
