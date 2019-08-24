
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
    // var id = $(this).data('id');
    var name = $(this).data('name');
    var email = $(this).data('email');
    var aadhar = $(this).data('aadhar');
    var bloodgroup = $(this).data('bloodgroup');

    var Dob = $(this).data('dob');
    var phone1 = $(this).data('phone1');
    var phone2 = $(this).data('phone2');
    var constituency =$(this).data('constituency');
    var address = $(this).data('address');
    var snakesCount = $(this).data('count');


    $('#userImage').attr("src",image);
    // document.getElementById('userId').innerHTML=id;
    document.getElementById('userName').innerHTML=name;
    document.getElementById('userEmail').innerHTML=email;
    document.getElementById('userAadhar').innerHTML=aadhar;
    document.getElementById('userBloodGroup').innerHTML=bloodgroup;
    document.getElementById('userDob').innerHTML=Dob;
    document.getElementById('userPhone1').innerHTML=phone1;
    document.getElementById('userPhone2').innerHTML=phone2;
    document.getElementById('userConstituency').innerHTML=constituency;
    document.getElementById('userAddress').innerHTML=address;
    document.getElementById('snakesCount').innerHTML=snakesCount;
});
