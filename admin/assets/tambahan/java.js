 ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        
 (function () {
  // Display the image to be uploaded.
  $('#fotoku').on('change', function (e) {
    return readURL(this);
  });

  this.readURL = function (input) {
    var reader;

    // Read the contents of the image file to be uploaded and display it.

    if (input.files && input.files[0]) {
      reader = new FileReader();
      reader.onload = function (e) {
        var $preview;
        $('.image_to_upload').attr('src', e.target.result);
        $preview = $('.preview');
        if ($preview.hasClass('hide')) {
          return $preview.toggleClass('hide');
        }
      };
      return reader.readAsDataURL(input.files[0]);
    }
  };

}).call(this);

//# sourceURL=coffeescript