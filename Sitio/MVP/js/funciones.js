function autocompleta(inputString) {
   if(inputString.length == 0) {
      $('#suggestions').fadeOut(); // Hide the suggestions box
   } else if (inputString.length>2){
      $.post("../MVP/AppCode/get-autocomplete.php", {queryString: ""+inputString+""}, function(data) { // Do an AJAX call
         $('#suggestions').fadeIn(); // Show the suggestions box
         $('#suggestions').html(data); // Fill the suggestions box
      });
   }
}

