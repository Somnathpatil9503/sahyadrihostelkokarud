<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>university Website Design - Easy Tutorials</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="images/logo04.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times-circle" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">KEYPOINTS</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
               </ul>    
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
      
        <h1>About us</h1>

    </section>

    <!---------about us content------->

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>  सह्याद्री विद्यार्थी वस्तीगृह, कोकरूड      </h1>
                <p> <b>मा. आमदार कै. वसंतराव नाईक बाबा यांची परम पूज्य स्वामी विवेकानंद सेवाश्रम संस्था, 
                    शिराळा.ही संस्था गरीब आणि होतकरू विद्यार्थ्यांच्या शैक्षणिक वाटचालीसाठी योगदान करते,
                    या संस्थेतील एक शाखा म्हणजे सह्याद्री विद्यार्थी वस्तीगृह, कोकरूड </b><br><br>
                    <h3> 1.निसर्गाच्या सानिध्यात मुसज्य इमारत. <br>

                    2. इ. ५ वी बइ. १० वी विद्यार्थ्यांना गणवेश व वसतिगृहामध्ये प्रवेश घेणाऱ्यांना

                    पाठ्यपुस्तके मोफत.<br>
                    
                    3. आभ्यास व मार्गदर्शनासाठी तज्ञ शिक्षकांची नेमणूक.<br>
                    
                    4. निवास, भोजन व नाष्टा इ. उत्तम सोयी निवासासाठी सर्व साहित्य.<br>5. जातीचा दाखला पाल्याचा पालकांचा
                    
                    वसतिगृहामध्ये उपलब्ध.<br>
                    
                    6. संगणक प्रशिक्षण देता येईल.<br>
                    
                    7. सुसज्य ग्रंथालय.<br>
                    
                    8. आरोग्य विषयक सोयी ग्रामीण रुग्णालय कोकरुड.<br>
                    
                    9. इ. 8 वी पासून सेमी इंग्रजीची सोय.<br>
                    
                    10. आधार कार्ड आवश्यक आहे.<br>
                    
                    ।। इंग्रजी व गणितची तयारी करून घेतली जाईल. <br>
                    
                    12. नवीदय व स्कॉलरशिप तयारी करून घेतली जाईल.</h3></p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/about01.jpg">
            </div>
        </div>
    </section>
     
    

      <!---------Footer--------->

      <section class="footer">
          <h4>About Us</h4>
          <p>परम पूज्य स्वामी विवेकानंद सेवाश्रम संस्था, शिराळा यांचे सह्याद्री विद्यार्थी वस्तीगृह कोकरूड<br>
            हे गरीब होतकरू विद्यार्थ्यांना शैक्षणिक वाटचाल करून देत आहे.
          </p>
          <p>made by Somnath Patil.</p>
          </div>
      </section>



    <!------javascript for toggle------->
<script>
       var navLinks = document.getElementById("navLinks")

       function showMenu(){
           navLinks.style.right = "0";
        }
        function hideMenu(){
           navLinks.style.right = "-200px";
        }
</script>

</body>
</html>
