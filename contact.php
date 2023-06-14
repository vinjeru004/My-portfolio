<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color: dimgray;">
 
    <header>
    <div class="links">
    <a href= "tel:0985499703"><img src="icons8-call-50.png" width="30" alt="call">contact:+265 985409703</a><br/> 
    </div>
    <div class="links">
    <a href="mailto: tapiwachipoka@gmail.com"><img src="icons8-email-30.png" /> send email</a> <br/>
    </div>
    <div class="links">
    <a href="https://wa.me/0880944798"><img src="icons8-whatsapp-50.png" width="30" /> WhatsApp</a><br/>
    </div>
    <div class="links">
    <a href="http://www.instagram.com/piwa_vinjeru"><img src="icons8-instagram-50.png" width="30">Instagram</a> 
</div>
</header>
<br>
<div class="navbar">
  <a href="home.html"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="projects.html"><i class="fa fa-fw fa-search"></i>Projects</a> 
  <a href="skills.html"><i class="fa fa-fw fa-envelope"></i>Skills</a> 
  <a class="active" href="contact.html"><i class="fa fa-fw fa-user"></i>Contact</a>
</div>

<div class="contact">
<h1 style="color: rgb(13, 5, 20);">CONTACT</h1>
</br>
    <p> Need to get in touch with me? Either fill out the<br>
         form with your inquiry or find me through any of the social-<br>
         media sites in the header up top.</p><br>

    <div class="form-container">
<p><b>Verify your details</b></p><br>
    <form name="myForm" action="portfolio2.php" onsubmit="return validateForm()"  method="post">
      <label for="username">Username</label> 
      <input type="text" id="username" name="Username"></br>

      <label for="email">Email</label> 
      <input type="text" id="email" name="email"><br>

      <label for="message">What can I do for you?</label><br>
      <textarea> message</textarea><br>
      <input type="submit" value="Submit">
    </form>
</div>

    <script>
        function validateForm() {
          let x = document.forms["myForm"]["Username"].value;
          if (x == "") {
            alert("Name must be filled out");
            return false;
          }
        }
        </script>
</div>
<section class="footer">
<footer></footer>
</section>
</body>
</html>