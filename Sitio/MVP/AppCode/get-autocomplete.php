<p id="searchresults">
    <?php 
      require_once("../../4sq/src/FoursquareAPI.class.php");
      // Set your client key and secret
      $client_key = "GKZR4D2DMKI3FRFVDPGEFFQJFSAJUXCHQN3HY4N10WXCDFP0";
      $client_secret = "UQ5JIJOFDOGO0V4OF3QUHBP5FSN2EE2UKQHORWZ3CK0E2NNI";
      // Load the Foursquare API library

      if($client_key=="" or $client_secret=="")
      {
            echo 'Load client key and client secret from <a href="https://developer.foursquare.com/">foursquare</a>';
            exit;
      }

      $foursquare = new FoursquareAPI($client_key,$client_secret);
      
    ?>


<?php 


  $params = array("ll"=>"19.379406,-99.159145 ", "query"=>$_POST['queryString']);
  // Perform a request to a public resource
  //$response = $foursquare->GetPublic("venues/search",$params);
  $response = $foursquare->GetPublic("venues/suggestcompletion",$params);

  $minivenues = json_decode($response);
  
?>


      <?php 


      
      foreach($minivenues->response->minivenues as $venue): 

      echo'<span class="category">Webdesign</span>';
      echo '<a href="https://foursquare.com/v/'.$venue->id.'">';
         echo '<img alt="" src="https://foursquare.com/img/categories/building/default_88.png"/>';
         echo '<span class="searchheading">Head</span>';
         echo '<span>'.$venue->name.'</span>';
      echo '</a>';


   echo'<span class="seperator">';
      echo'<a href="http://www.marcofolio.net/sitemap.html">Nothing interesting here? Try the sitemap.</a>';
   echo'</span>';


      endforeach;

    ?>


    