

<?php
 
$string = array("https://stackoverflow.com/questions/9607903/get-dpmain-name-from-given-url","https://websiteseocjecker.com/extract-url-to-domain/#arearresult","https://www.facebook.com/groups/1944204655670756/","https://localhost/waducpf18/finalterm/","https://www.youtube.com/watch?v=LSDxjp6sWYQ","https://epaper.dawn.com/?page=03_02_2019_001","https://www.google.com/search?q=extract","abcd");

 

 

 

 
foreach($string as $index){
	$regexp = "/((st|we|fa|y|g|e).*(com))|(localhost)/";
    if(preg_match($regexp, $index, $matches)){

    	
       echo "<p>".$matches[0]."</p>";
        
    }
    
}
 
?>