
$(document).ready(function() {
    $('#pagination').DataTable(
        {
            "searching":  false
        }
    );
});

// modal
$(document).on("click", ".open-modal", function () {
    var image =$(this).data('image');
    // var id = $(this).data('id');
    var species = $(this).data('species');
    var DandT = $(this).data('date')+" - "+$(this).data('time');
    var location = $(this).data('location');
    var description = $(this).data('description');


    $('#snakeImage').attr("src",image);
    // document.getElementById('deleteId').value=id;
    document.getElementById('snakeSpecies').innerHTML=species;
    document.getElementById('snakeDateTime').innerHTML=DandT;
    document.getElementById('snakeLocation').innerHTML=location;
    document.getElementById('snakeDescription').innerHTML=description;


});


$(document).on("click", ".open-deleteModal", function () {
    var id = $(this).data('delete_id');
    var image = $(this).data('delete_image');
    var user_id = $(this).data('delete_user_id');
    var href_link = "/admin/rescued-snakes/delete/" + id + "/" + image + "/" + user_id;

    $('#deleteLink').attr('href',href_link);

});
