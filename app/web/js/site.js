$('#js-add-new-comment').click(function () {
    var form = $(this).closest('form');
    var data = form.serialize();

    // clean up view response before submit
    $('.js-add-new-ajax-response').html('');

    // Make an ajax call to add a new comment
    $.ajax({
        url: "/index.php?r=comment/add-new",
        data: data,
        type: "POST"
    }).success(function (msg) {
        var obj = JSON.parse(msg);

        // If response has some errors then show error message
        if (typeof (obj.error) !== "undefined") {
            $('.js-add-new-ajax-response').html(obj.message);
            return false;
        }
        // If response has got success param then add the created comment on the comment list
        else if (typeof (obj.success) !== "undefined") {
            var commentId = obj.comment.id;
            $.ajax({
                url: "/index.php?r=comment/one/",
                data: {
                    id: commentId
                }
            }).success(function (msg) {
                $('#js-comment-list').prepend(msg);
                $('.js-no-comment').hide();
            });

            // Reset the form
            form.trigger("reset");
        }
    });

    // Return false to prevent further markup native actions
    return false;
});