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
      
        <h1>Our Keypoints</h1>

    </section>

    <!----------course--------->
    <section class="course">
        <h1>प्रवेश मर्यादित</h1>
        <p> आजच्या सह्याद्री विद्यार्थी वसतिगृहामध्ये प्रवेश देणे सुरु आहे. </p>
        
        <div class="row">
           <div class="course-col">
               <h3>1. निसर्गाच्या सानिध्यात मुसज्य इमारत.<br> <P></P>2. इ. ५ वी बइ. १० वी विद्यार्थ्यांना गणवेश व वसतिगृहामध्ये प्रवेश घेणाऱ्यांना

                पाठ्यपुस्तके मोफत.<p></p>3.अभ्यास व मार्गदर्शनासाठी तज्ञ शिक्षकांची नेमणूक.<p></p>4. संगणक प्रशिक्षण देता येईल.</h3>
               
           </div>
           <div class="course-col">
            <h3>5. निवास, भोजन व नाष्टा इ. उत्तम सोयी निवासासाठी सर्व साहित्य <p></p>6. जातीचा दाखला पाल्याचा पालकांचा

                वसतिगृहामध्ये उपलब्ध.<p></p>7.सुसज्य ग्रंथालय.<p></p>8.आरोग्य विषयक सोयी ग्रामीण रुग्णालय कोकरुड.<P></P>9. इ. 8 वी पासून सेमी इंग्रजीची सोय.</h3>
            
        </div>
           <div class="course-col">
            <h3>10.आधार कार्ड आवश्यक आहे.<P></P>11.इंग्रजी व गणितची तयारी करून घेतली जाईल.<p></p> 12. नवीदय व स्कॉलरशिप तयारी करून घेतली जाईल.<p></p><h4>टिप :- बी.सी., ओ.बी.सी. एन.टी. विद्यार्थ्यांना प्रथम प्राधान्य जागा मर्यादित असलेने त्वरीत संपर्क साधावा</h4></h3>
           
           </div>

        </div>
    
    
    </section>


    <!---------facilities------>
     
    <section class="facilities">
        <h1> सह्याद्री विद्यार्थी वसतिगृह, कोकरूड येथे आमच्या सुविधा</h1>
        <p> </p>
        
        <div class="row">
            <div class="facilities-col">
                <img src="images/library01.jpg">
                <h3>
                    पुस्तकालय</h3>
                <p>माझी लायब्ररी, माझी जीवनरेखा. आपले जग उघडा. ज्ञानाचे द्वार उघडणे. भूतकाळ जतन करणे, भविष्य उघडणे. </p>
            </div>
            <div class="facilities-col">
                <img src="images/playground.jpg">
                <h3>खेळाचे मैदान</h3>
                <p> तुमच्या आवडीचे खेळ खेळा! तुमच्या कॅटलॉगमध्ये खेळांना योग्य स्थान द्या! एक निरोगी मन मजबूत शरीरात वसते, म्हणून खेळ खेळा! खेळ तुम्हाला सांघिक भावना वाढवण्यास मदत करतात! </p>
            </div>
            <div class="facilities-col">
                <img src="images/computer2.jpg">
                <h3>संगणक कक्ष</h3>
                <p> संगणक विद्यार्थ्यांना जगाबद्दल जाणून घेण्यास आणि त्यात काय चालले आहे हे जाणून घेण्यास मदत करतात. हे त्यांना भविष्यात उत्कृष्ट नोकऱ्यांचे ध्येय ठेवण्यास आणि त्यात यशस्वी होण्यास मदत करते. संगणक हे जगभरातील शिक्षणाचे मानक बनले आहे. </p>
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
