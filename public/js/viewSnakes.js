
$(document).ready(function() {
    $('#pagination').DataTable(
        {
            "searching":  false
        }
    );
} );

// modal
$(document).on("click", ".open-modal", function () {
    var image =$(this).data('image');
    var id = $(this).data('id');
    var species = $(this).data('species');
    var DandT = $(this).data('date')+" - "+$(this).data('time');
    var location = $(this).data('location');
    var description = $(this).data('description');

    $(".modal-body #snakeImage").src='http://127.0.0.1:8000/public/storage/upload/snake'+image;
    document.getElementById('snakeId').innerHTML=id;
    document.getElementById('snakeSpecies').innerHTML=species;
    document.getElementById('snakeDateTime').innerHTML=DandT;
    document.getElementById('snakeLocation').innerHTML=location;
    document.getElementById('snakeDescription').innerHTML=description;
});
