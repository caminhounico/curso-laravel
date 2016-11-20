$(document).ready(function () {
    $('.message .close')
        .on('click', function () {
            $(this)
                .closest('.message')
                .transition('fade')
            ;
        });

    $('.btn-delete').click(function (e) {
        $link = $(this).attr("href");
        e.preventDefault();
        $('.ui.modal').modal('show');
        $('.ui.ok.button').click(function () {
            $(location).attr('href', $link);
        });
    });
});