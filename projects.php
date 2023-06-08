<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <title>My Projects</title>
</head>
<style>
    h1{
        text-align: center;
        color: rgb(92, 10, 58);
    }
</style>
<body>
    <div class="navbar">
        <a href="home.html"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a class="active" href="projects.html"><i class="fa fa-fw fa-search"></i>Projects</a> 
        <a href="skills.html"><i class="fa fa-fw fa-envelope"></i>Skills</a> 
        <a href="contact.html"><i class="fa fa-fw fa-user"></i>Contact</a>
        <span> <a href="#search"><img src="icons8-search-32 (1).png" width="16px"></a>
          <ul></ul><input type="text" placeholder="Search..">
        </ul> ></span>
      </div>
    <h1>My Projects</h1>

    <div class="projects-container"  method="post">
        <div class="project">
            <img src="blackgirl1.jpg" width="300" length="500" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="project">
            <img src="pro3.jpg" width="300" length="500" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="project">
            <img src="blacklady1.jpg" width="300" length="500" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
            </div>
        <div class="project">
            <img src="blackgirl2.jpg" width="300" length="500" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
        <div class="project">
            <img src="pro6.jpg" width="300" length="500" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
        </div>
        <div class="project">
        <img src="pro5.jpg" width="300" length="500" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
        </div>
    </div>
            
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">            

        <div class="mySlides">
            <div class="numbertext">1 / 6</div>
            <img src="blackgirl1.jpg" style="width:70%">
                    <span class="w-90">90%</span>
            <div class="progress">
                <div class="progress-bar w-90"></div>
            </div>
        </div>
      
          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
            <img src="pro3.jpg" style="width:70%">
            <span class="w-65">65%</span>
                <div class="progress">
                    <div class="progress-bar w-65"></div>
                </div>
            </div>
      
          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
            <img src="blacklady1.jpg" style="width:70%">
            <span class="w-65">65%</span>
                <div class="progress">
                    <div class="progress-bar w-65"></div>
                </div>
            </div>
        
          
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
            <img src="blackgirl2.jpg" style="width:70%">
            <span class="w-65">65%</span>
                <div class="progress">
                    <div class="progress-bar w-65"></div>
                </div>
            </div>
        

          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
            <img src="pro5.jpg" style="width:70%">
            <span class="w-65">65%</span>
                <div class="progress">
                    <div class="progress-bar w-65"></div>
                </div>
            </div>

          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
            <img src="pro6.jpg" style="width:70%">
            <span class="w-65">65%</span>
        <div class="progress">
            <div class="progress-bar w-65"></div>
        </div>
          </div>
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
      
          <div class="project">
            <img class="demo cursor" src="blackgirl1.jpg" style="width:70%" onclick="currentSlide(1)" alt="an edited photo using photoshop, adjusted vintege">
          </div>

          <div class="project">
            <img class="demo cursor" src="pro3.jpg" style="width:70%" onclick="currentSlide(2)" alt="a flier for interior designers">
          </div>

          <div class="project">
            <img class="demo cursor" src="blacklady1.jpg" style="width:70%" onclick="currentSlide(3)" alt="polished the skin tone with the help of photoshop and added some colour to it">
          </div>

          <div class="project">
            <img class="demo cursor" src="blackgirl2.jpg" style="width:70%" onclick="currentSlide(4)" alt="polished the skin tone with the help of photoshop">
          </div>

          <div class="project">
            <img class="demo cursor" src="pro5.jpg" style="width:70%" onclick="currentSlide(5)" alt="a website snick pick of MP Designs, interior designers">
          </div>

          <div class="project">
            <img class="demo cursor" src="pro6.jpg" style="width:70%" onclick="currentSlide(6)" alt="NOLA, a website more less of a blog, for creativity coaching">
          </div>
        </div>
    </div>
</div>
      <script>
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }
        
        function closeModal() {
          document.getElementById("myModal").style.display = "none";
        }
        
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
        
</body>
</html>