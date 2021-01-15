jQuery(function($) {


    $(".misha_loadmore").click(function() {
        $.post(
        	ajaxURL, 
        	{
                'action': 'your_load_more',
                'count': $(".bg-bord > div > .bg-post").length
            },
            function(response) {
                var posts = JSON.parse(response);

                for (var i = 0; i < posts.length; i++) {
                    if (posts[i] == "0")
                        $(".misha_loadmore").fadeOut();
                    else
                        $(".misha_loadmore").before(posts[i]);
                }

            }
        );
    });

});

