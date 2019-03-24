$(document).ready(function () {
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            $('#searchAjax').keyup(function () {
                var searchValue = $('#searchAjax').val();
                delay(function () {
                    $.ajax({
                        url: "/app_dev.php/search",
                        type: "POST",
                        dataType: "json",
                        data: {
                            searchedFor: searchValue
                        },
                        success: (function (search) {
                            var searched = $.parseJSON(search);
                            $('#search-content').css('display', 'none');
                            $('#searchResults').css('display', 'block');
                            for (i = 0; i < searched.length; i++) {
                                "<tr>"
                            +   $('#naslov').html(searched[i].title);
                                $('#autor').html(searched[i].author);
                                $('#akcije').twig("<a href='{{asset('uploads/posts/')}}'" + searched[i].body + "target='_blank'>Prikazi</a>");
                               "<tr>";
                            };
                        })
                    });
                }, 1000);

            });

        });
            