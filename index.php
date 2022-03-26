<?php
include "dbconnect.php";





?>


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
    
    <section class="header">
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
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
      
        <div class="text-box">
            <h1> सह्याद्री विद्यार्थी वसतिगृह, कोकरूड</h1>
            <p>
                बाबा नाईक महाविद्यालय, कोकरूड, श्री.यशवंत विद्यालय कोकरूड आणि सह्याद्री वसतिगृह यांचे ध्येय या भागातील ग्रामीण आणि वनक्षेत्रात शिक्षणाच्या<br> प्रसारासाठी सर्वपक्षीय सतत प्रयत्न करणे हे आहे.
            </p><h4>फक्त पाचवी ते दहावी मुलांसाठी</h4>
            
            <a href="" class="hero-btn"><b>Visit Us To Know More</b></a>
        </div>

    </section>
     
    <!----course------>

    <section class="course">
        <h1>आमच्या संस्थेने सादर केलेले अभ्यासक्रम</h1>
        <p> आमच्या संस्थेत दिले जाणारे अभ्यासक्रम खालीलप्रमाणे आहेत: </p>
        
        <div class="row">
           <div class="course-col">
               <h3>पाचवी ते दहावीची शाळा :-</h3>
               <p> शाळा हा बालकाला दिलेल्या ज्ञानाचा मूलभूत पाया आहे. हे मुलांना शिक्षणाच्या विविध क्षेत्रांचे ज्ञान प्राप्त करण्याची संधी देते, जसे की लोक, साहित्य, इतिहास, गणित, राजकारण आणि इतर असंख्य विषय. <br>
                <b>दोन कोर्स माध्यम:</b><br>1)मराठी<br> 2)सेमी-इंग्रजी    </p>
           </div>
           <div class="course-col">
            <h3>11वी-12वी कॉलेज :-</h3>
            <p> कॉलेज शिक्षण हा प्रत्येक विद्यार्थ्याच्या आयुष्यातील सर्वात महत्त्वाचा टप्पा असतो. मुलींना सशक्त करण्यात मदत करणे, अनेक तरुणांना पाया प्रदान करणे, भारतातील बालमृत्यू दर कमी करणे आणि व्यक्तीचा आर्थिक स्तर उंचावण्याचा हा एक उत्तम मार्ग आहे.   <br>
            <b>तीन अभ्यासक्रम माध्यम:</b><br>1)कला<br> 2)विज्ञान <br>3)वाणिज्य    </p>       
        </div>
           <div class="course-col">
            <h3>पदवी कॉलेज :-</h3>
            <p>   ग्रॅज्युएशन पदवी मिळवणारी व्यक्ती चांगली नोकरी मिळवण्यासाठी आणि अधिक कमाई करण्यास जबाबदार आहे. हे उघड आहे की एखादी व्यक्ती, जो अधिक शिक्षित आहे, चांगले ज्ञान आहे, अधिक जागरूक आहे आणि म्हणूनच सामान्य उच्च माध्यमिक उत्तीर्ण होण्यापेक्षा चांगली नोकरी मिळविण्यासाठी पात्र आहे.
                <br><b>पदवी अभ्यासक्रम:</b><br>1)कला: (इतिहास, राजकारण, भूगोल...)<br>  2)विज्ञान: (भौतिकशास्त्र, रसायनशास्त्र, जीवशास्त्र मध्ये B.sc) <br> 3)वाणिज्य: (खाते, वित्त)    </p>
           </div>

        </div>
    
    
    </section>

    <!-----campus -->

    <section class="campus">
   <h1>आमच्या इतर शाळा आणि कॉलेज</h1>
   <p>आमच्या इतर शाखा खालीलप्रमाणे आहेतः</p>

   <div class="row">
       <div class="campus-col">
           <img src="images/yashwant02.jpeg">
           <div class="layer">
               <h3>श्री.यशवंत विद्यालय कोकरूड<br>पाचवी ते बारावी</h3>
           </div>
       </div>
       <div class="campus-col">
        <img src="images/babanaik.jpeg">
        <div class="layer">
            <h3>बाबा नाईक महाविद्यालय,कोकरूड<br>पदवी कॉलेज: कला(B.A.)</h3>
        </div>
       </div>
        <div class="campus-col">
              <img src="images/32 shirala collage.jpeg">
              <div class="layer">
                <h3>विश्वासराव नाईक कॉलेज,32 शिराळा<br>पदवी कॉलेज:<br>1)कला(B.A.)<br>2)विज्ञान(B.Sc.)<br>3)वाणिज्य(B.Com)</h3>
              </div>
        </div>
   </div>
    </section>
    <!---------faci;ities-->

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

    <!------testimonials----->

    <section class="testimonials">
        <h1> आमचे विद्यार्थी काय म्हणतात....</h1>
        <p> </p>

        <div class="row">
            <div class="testimonial-col">
                <img src="images/rushad.jpg">
                <div>
                  <p> मी गेल्या २ वर्षांपासून वसतिगृहात राहतो.माझा अनुभव चांगला आहे.येथील खोल्या व्यवस्थित आणि स्वच्छ आहेत. शिक्षक कर्मचारी खूप सहकार्य करतात.

                  </p>
                  <h3> ऋषद रायकर </h3>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/user2.jpg">
                <div>
                  <p>सह्याद्री वसतिगृहात चांगली सुविधा उपलब्ध आहे म्हणजे वाचनालय, स्वच्छता, खेळणे, खाणे, गरम पाणी, थंड पाणी, अभ्यासाच्या माहितीसाठी संगणक विभाग, बातम्यांसाठी टीव्ही इत्यादी...
                  </p>
                  <h3> विजय चव्हाण</h3>
                </div>
            </div>
        </div>

    </section>

     <!---------call to action--------->

     <section class="cta">
         <h1>मुलांच्या वसतिगृहामध्ये प्रवेशासाठी नोंदणी करा </h1>
         <a href="" class="hero-btn">CONTACT US</a>
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
