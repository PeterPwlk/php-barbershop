		
			let number = Math.floor(Math.random()*4)+1;
			let timer = 0;
			let dots = document.getElementsByClassName("dot");
			console.log(dots)
			
			function setslide(nrslajdu){
				number = nrslajdu - 1;
				nextslide();
			}
			
		
			function nextslide(){
				clearTimeout(timer);
				clearDots();
				if (++number>4) number=1;
				dots[number-1].className += " active";
				let plik = "<img src=\"about" + number + ".jpg\"  width = 615 height = 451/>";
				
				document.getElementById("saloon").innerHTML = plik;
				
				timer = setTimeout("nextslide()", 1000);
			
			}

			function previousslide(){	
				clearTimeout(timer);	
				clearDots();
				if (--number<1) number=4;
				dots[number-1].className += " active";

				let plik = "<img src=\"about" + number + ".jpg\"  width = 615 height = 451/>";
				document.getElementById("saloon").innerHTML = plik;
				timer = setTimeout("nextslide()", 5000);
			}
				
			 function clearDots(){
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
			 }
	
