(function ($) {
    'use strict';

    $(document).ready(function () {
        const $container = $('#js-works-results');
        const $selects = $('.p_works_filter__select');

        if (!$container.length) return;

        function fetchWorks(page) {
            page = page || 1;

            const data = {
                action: 'works_filter',
                nonce: works_ajax_obj.nonce,
                page: page,
                work_genre: $('#filter-work-genre').val() || '',
                work_year: $('#filter-work-year').val() || '',
                work_use: $('#filter-work-use').val() || '',
                work_construction: $('#filter-work-construction').val() || ''
            };

            $container.css('opacity', '0.5');

            $.ajax({
                url: works_ajax_obj.ajax_url,
                type: 'POST',
                data: data,
                success: function (response) {
                    if (response.success) {
                        $container.html(response.data.html);
                        $container.css('opacity', '1');

                        // Smooth scroll to container top
                        const targetOffset = $container.offset().top - 120;
                        $('html, body').animate({ scrollTop: targetOffset }, 400);
                    }
                },
                error: function () {
                    $container.css('opacity', '1');
                }
            });
        }

        // Change event on dropdown filters
        $selects.on('change', function () {
            fetchWorks(1);
        });

        // Pagination click event
        $(document).on('click', '.p_works_pagination a', function (e) {
            e.preventDefault();
            const href = $(this).attr('href');
            let page = 1;

            if (href) {
                const match = href.match(/page\/(\d+)/) || href.match(/paged=(\d+)/);
                if (match && match[1]) {
                    page = parseInt(match[1], 10);
                }
            }

            fetchWorks(page);
        });
    });
})(jQuery);
