 
 
 function readURL(input) {
    
        $('#blah').show();
        $('#upload-button').show();
        $('#image-upload-wrapper-id').hide();
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
}

function showImageUpload(){
    $('#upload-button').hide();
    $('#image-upload-wrapper-id').show();
}