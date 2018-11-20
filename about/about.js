		
			let number = Math.floor(Math.random()*4)+1;
			let timer = 0;
			
			
			function setslide(nrslajdu)
			{
				clearTimeout(timer);
				number = nrslajdu - 1;
				nextslide();
			}
			
		
			function nextslide()
			{
				if (++number>4) number=1;
				
				let plik = "<img src=\"salon" + number + ".jpg\"  width = 615 height = 451/>";
				
				document.getElementById("saloon").innerHTML = plik;
				
				timer = setTimeout("nextslide()", 5000);
			
			}
				
	
