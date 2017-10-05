<html>
  <head><title>looping dengan java web</title></head>
	<body>
	  <h2>perintah perulangan di jsp</h2>
	  <% 
		/*
		   variable Flag untuk membatasi perulangan
		*/
		
		byte Flag = 1;
			 
		for(byte angkaUntukFor = 1; angkaUntukFor <= 5; angkaUntukFor += 1){ 
			
			if(angkaUntukFor <= Flag){
				out.print(angkaUntukFor);
			
			} else {
				out.print("<br>");
				Flag+=1;
				angkaUntukFor = 0;
			}
		}
	  %>
	</body>
</html>