// $(document).ready(function(){
	// $('span.btn').click(function(){
		// alert('test');
		
		// var xhttp = new XMLHttpRequest();
		// xhttp.onreadystatechange = function(){
			// if(this.readyState == 4 && this.status == 200){
				// alert(this.responseText)
			// }
		// }
		// xhttp.open("GET","insertContacts.php?name=name&contact=contact&house=house&remarks=remarks",true)
		// xhttp.send()
	// });
// });

$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});