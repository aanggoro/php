<html>
  <head><title>looping dengan java web</title></head>
	<body>
	  <h2>perintah form di jsp</h2>
	  
	  <form name="f1" action="" method="post">  
		Tanggal Lahir:
		<select name="tgl">
		<%
			for(byte tanggal_lahir = 1; tanggal_lahir <= 31; tanggal_lahir+=1){
				out.print("<option value='"+tanggal_lahir+"'>"+tanggal_lahir+"</option>");
			}
		%>
		</select>
		<select name="bln">
		<%
			for(int bulan_lahir = 1; bulan_lahir <= 12; bulan_lahir+=1){
				out.print("<option value='"+bulan_lahir+"'>"+bulan_lahir+"</option>");
			}
		%>
		</select>			
	  </form>
	</body> 
</html>	