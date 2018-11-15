		
			var numer = Math.floor(Math.random()*4)+1;
	
			var timer1 = 0;
			
			
			function setslide(nrslajdu)
			{
				clearTimeout(timer1);
				numer = nrslajdu - 1;
				setTimeout("zmienslajd()", 200);
			}
			
		
			function zmienslajd()
			{
				numer++; if (numer>4) numer=1;
				
				var plik = "<img src=\"salon" + numer + ".jpg\"  width = 615 height = 451/>";
				
				document.getElementById("saloon").innerHTML = plik;
				
				timer1 = setTimeout("zmienslajd()", 5000);
			
			}
				
	
