function readURL(input) {
    if (input.files && input.files[0]) {

        $("#profileImage").css("display", "block");
        $(".click-p").css("display", "none");
        $(".upload-camera").css("display", "none");

        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profileImage')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
