<?php
    if ( isset($_POST['text']) ) {
		
		$f = fopen("in.txt","w");
		
		$in = $_POST['text'];
	    fwrite($f,$in);
	    fclose($f);
		
        die($_POST['text'] . $_POST['add']);
		
    }
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  
  <style>
  
   body {
   	       background: #c7b39b;
		   color: #fc0;
          }
	  h1{
		  font-family: 'GOST type B', Times, serif; /* Шрифт с засечками */
          font-style: italic; /* Курсивное начертание */
		  }
		  
   #Layer {
           padding: 5px;
          }
   #source_1 {  
           border-radius:  50px;
          }
      #button_1 {  
           border-radius:  10px;
          } 
   #button_2 {  
           border-radius:  5px;
          }
		  
   </style>
  
 </head>    

<body>
  <div align="center">
  
  </br></br></br></br></br></br> 
  </br></br></br></br></br></br>
  
  <h1> INFO: </h1>
  <iframe width="320" height="240" src="https://www.youtube.com/embed/cZFsx3G-Ux4?controls=0&autoplay=1&mute=1;" frameborder="0" allowfullscreen></iframe>

 <form id="ajax-form" action="script.php" method="post">
    
    <input type="text" name="text" id="button_1" size="44">
    <input type="submit" id="button_2" size="50" value = "OK">
	
 </form>

 </div>
</body>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  
  <script>

    $('#ajax-form').submit(function(e) {
        e.preventDefault();
        var method = $(this).attr('method');
        var url = $(this).attr('url');
        $[method](url, $(this).serialize(), function(data) {
            $('#result').html(data);
        });
    });
	
</script>


</html>