		
			let numer = Math.floor(Math.random()*4)+1;
	
			let timer1 = 0;
			
			
			function setslide(nrslajdu)
			{
				clearTimeout(timer1);
				numer = nrslajdu - 1;
				setTimeout("nextslide()", 200);
			}
			
		
			function nextslide()
			{
				if (++numer>4) numer=1;
				
				let plik = "<img src=\"salon" + numer + ".jpg\"  width = 615 height = 451/>";
				
				document.getElementById("saloon").innerHTML = plik;
				
				timer1 = setTimeout("nextslide()", 5000);
			
			}
				
	
