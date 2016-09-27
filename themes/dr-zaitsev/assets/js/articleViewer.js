var articlesModel = function (articles) {
    var that = {};

    var createImageMarkup = function (articlePath, imageName, format) {
        return '<div class="image-container"><img src="' + articlePath + '/' + imageName + "." + format + '"></div>';
    };

    var createArticlePreviewMarkup = function (article, id) {
        var explicit = parseInt(article['explicit']) ? 'explicit' : '';

        return '' +
            '<div class="article-preview ' + explicit + '" data-id="' + id + '">' +
                createImageMarkup(article['directory_path'], 'cover',  article['image_format']) +
                '<p class="article-name">' +
                    article['date_of_creation'] + article['place_of_creation'] + '<br>' +
                    article['article_name'] +
                '</p>' +
            '</div>'
    };

    var warning = '<div class="second-warning">' + createImageMarkup('themes/dr-zaitsev/assets/images', 'warning-sign-grey', 'png') +
        '<p>Этим знаком отмечены материалы, которые могут нести тяжелый характер. Если вы неуверены что, готовы ' +
        'к просмотру фотографий реальных глубоких повреждений кожи, лучше не открывайте их.' +
        '</p></div>';

    that.createArticleCatalogueMarkup = function () {
        var catalogueItems = '';

        for (var articleId in articles) {
            catalogueItems += createArticlePreviewMarkup(articles[articleId], articleId);
        }

        return '<div class="articles-catalogue">' + warning + catalogueItems + '</div>' +
            '<div style="clear: both;"></div>';
    };

    that.getArticlePages = function (articleId) {
        var article = articles[articleId];
        var images = [];
        var articlePath = article['directory_path'];
        var format = article['image_format'];

        for (var page = 1; page <= parseInt(article['number_of_pages']); page++) {
            images.push(createImageMarkup(articlePath, page, format))
        }

        return images;
    };

    return that;
};

var articlesController = function (articlesModel, articlesViewConstructor) {
    var that = {};
    var articlesView = articlesViewConstructor(that);

    that.handleArticleClick = function (articleId) {
        var slides = articlesModel.getArticlePages(articleId);
        articlesView.renderSlider(slides);
    };

    that.displayArticlesCatalogue = function () {
        articlesView.removeWarning();
    };

    articlesView.renderArticlesCatalogue(articlesModel.createArticleCatalogueMarkup());

    return that;
};

var articlesView = function (articlesController) {
    var that = {};
    var articlesWarning = $('.first-warning');
    var articlesCatalogue = $('.articles-catalogue');
    var articles;

    $('.ready-button').click(function () {
        articlesController.displayArticlesCatalogue();
    });

    $('.not-ready-button').click(function () {
        $('html, body').animate({
            scrollTop: $('#contacts').offset().top
        }, 300);
    });

    var percent = function (number) {
        return number.toString() + '%';
    };

    that.removeWarning = function () {
        articlesWarning.css('display', 'none');
    };

    that.renderArticlesCatalogue = function (markup) {
        articlesCatalogue.html(markup);
        var articles = articlesCatalogue.find('.article-preview');

        articles.click(function () {
            articlesController.handleArticleClick( $(this).attr('data-id') );
        });

        var initialWarningHeight = articlesWarning.height();

        articlesWarning.height(articlesCatalogue.height());
    };

    var sliderContainer = $('.articles-section');
    var articleSlider = $('.article-slider');
    var slidingPart = articleSlider.find('.slider');
    var slideWidth;
    var currentSlideNum;
    var numberOfSlides;

    var slideMarkup = function (slideImage) {
        return '<div class="slide">' + slideImage + '</div>'
    };

    var setSliderWidths = function (numberOfSlides) {
        slideWidth = 100 / numberOfSlides;
        slidingPart.width(percent(numberOfSlides * 100));
        slidingPart.find('.slide').width(percent(slideWidth));
    };

    that.renderSlider = function (slides) {
        currentSlideNum = 0;
        numberOfSlides = slides.length;
        var slidesMarkup = '';

        for (var slideNum = 0; slideNum < slides.length; slideNum++) {
            slidesMarkup += slideMarkup(slides[slideNum]);
        }

        slidingPart.html(slidesMarkup);

        setSliderWidths(numberOfSlides);

        articleSlider.addClass('active-slider');
    };

    var changeSlide = function (slideNum) {
        slidingPart.css({
            left: '-' + percent(100 * slideNum)
        });
    };

    var prevSlide = function () {
        currentSlideNum -= 1;

        if (currentSlideNum < 0) {
            currentSlideNum = numberOfSlides - 1;
        }

        changeSlide(currentSlideNum);
    };

    $('.left-arrow').click(prevSlide);

    var nextSlide = function () {
        currentSlideNum += 1;

        if (currentSlideNum === numberOfSlides) {
            currentSlideNum = 0;
        }

        changeSlide(currentSlideNum)
    };

    $('.right-arrow').click(nextSlide);

    $('.close').click(function () {
        articleSlider.removeClass('active-slider');
        sliderContainer.removeClass('full-screen-slider zoomed-slider')
    });

    $('.full-screen').click(function () {
        sliderContainer.toggleClass('full-screen-slider');
    });

    $('.zoom').click(function () {
        sliderContainer.toggleClass('zoomed-slider');
    });

    return that;
};

$.ajax({
    url: 'postweb-zaycev/get-article-records'
}).done(function (data) {
    var articles = articlesModel($.parseJSON(data));
    articlesController(articles, articlesView)
});
