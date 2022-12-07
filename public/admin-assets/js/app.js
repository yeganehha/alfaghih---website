$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".change_status").change(function () {
        var link = $(this).data("link");
        var checked = "0";
        if ($(this).is(":checked")) checked = "1";
        link = link + "/"+ checked;
        var value = $(this).val();
        $.ajax({
            type: "POST",
            url: link,
            success: function (msg) {
                var notify = $.notify({message: "Activity status successfully updated."});
                notify.update('type', 'success');
            },
            error: function () {
                var notify = $.notify({message: 'Error occurred while processing!'});
                notify.update('type', 'danger');
            }
        });
    });

    $(".change_switch").change(function () {
        var link = $(this).data("link");
        var title = $(this).data("title");
        var checked = "0";
        if ($(this).is(":checked")) checked = "1";
        link = link + "/"+ checked;
        var value = $(this).val();
        $.ajax({
            type: "POST",
            url: link,
            success: function (msg) {
                var notify = $.notify({message: title+" status successfully updated."});
                notify.update('type', 'success');
            },
            error: function () {
                var notify = $.notify({message: 'Error occurred while processing!'});
                notify.update('type', 'danger');
            }
        });
    });


});
