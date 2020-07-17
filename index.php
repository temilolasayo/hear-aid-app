<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="icon" href="./imgs/logo.png" type="image/png">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- <script src="https://kit.fontawesome.com/cf87ec6cf2.js" crossorigin="anonymous"></script> -->
    <title>HearAid</title>
  </head>
  <body>
      <section class="">
        <div class="header">
        <div class="section-underline "></div>
           <div class="aid_logo text-center">
              <img src="imgs/line.png" alt="Hear_aid_logo">
              <hr class="heading_underline">       
           </div>
           <div class="container">
             <div class="row">
                <div class="col-12 col-md-6">
                  <h1 class="coming_soon">COMING SOON</h1>
                  <div class="underline"></div>

                  <p class="lead1 py-3">HearAid Convert Sounds And Text Into Video Simulations For<br>The Hearing Impaired With The Coolest Illustrations Possible</p>
                  <p class="lead2 pb-2">Notify Me When The App Drops</p>
  

                            <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
          

                    <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 30px;color: #fff;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
                                        <?php if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) { ?>
                        <div class="error-message" style="margin-bottom: 20px;font-size: 30px;color: red;"><?php echo $_SESSION['error_message']; ?></div>
                        <?php
                        unset($_SESSION['error_message']);
                    }
                    ?>

                      <div class="form-group" id="desktopForm">
                                            <form method="post" action="save.php" >

                                                            <div class="input-group mb-3 py-2">
                            <input type="email" class="px-2 pr-5 pl-5"  id="email"  placeholder="Enter Email Address" name="email" required>
                      <div class="input-group-append">
                        <!-- <button type="submit" name="submit" value="Submit" class="input-group-text input-group-bg py-3 px-3">
                           SUBSCRIBE
                        </button> -->
                                                    <input type="submit" class="btn input-group-text input-group-lg py-3 px-3 pr-5 subscribeBtn" name="save" value="SUBSCRIBE"/>
 </form>
                      </div>
                      </div>
                       </form>
                    </div>

                                   <div class="input-group mb-3 formMargin" id="mobileForm">
                                                         <form method="post" action="save.php" >

                            <input type="email" class=" pl-3" id="email"  placeholder="Enter Email Address" name="email" required>
  <div class="input-group-append">

                                                        <input type="submit" class="btn input-group-bg input-group-text input-group-bg  pb-4 pt-4 subscribeBtn"  name="save" value="SUBSCRIBE"/>
  </div>
</div>

                  </form>             
        </div>



                </div>
                <div class="col-12 col-md-5">
                  <h3 class="launch text-center pl-5">LAUNCHING IN</h3>
                  <h3 class="countdown text-center pl-5">
                    <span id="days"></span>
                    <span id="subscript">days</span>
                    <span id="hours"> </span>
                     <span id="subscript">hours</span>
                     <span id="minutes"></span>
                      <span id="subscript">minutes</span>
                      <span id="seconds">  </span>
                      <span id="subscript">seconds</span></h3>
                  <img src="imgs/X - 10.png" class="desktopheader" alt="Onboarding-screen">
                </div>
                

             </div>

             </div>
                  </div>
                               <img src="imgs/headerphonemobile.png" class="mobileheader" alt="Onboarding-screen">

      </section>

      <section class="features">
          <div class="container">
            <div class="container py-5">
              <div class="row app-features">
                <div class="col-12 col-md-6 feat-img1 zoom">
                  <img src="imgs/X - 15.png" alt="sound-detector">
                </div>
                  <div class="col-12 col-md-6 detect-sound">
                    <span class="first-line">
                      <hr class="detectLineLeft" />
                      <img src="imgs/fa-solid_wifi.png" class="wifiSize" alt="Wifi Icon" />
                                            <hr class="detectLineRight" />

                    </span>
                    <div class="features-details">
                       <h4 class=" features-heading">Detect Sounds</h4>
                       <p class=" features-text"> Set HearAid to automatically start listening when someone starts talking close to you, or when a particular sound is around the user .the user can manually record sounds at any time to be simulated</p>
                    </div>
                  </div>
                </div>
                <div class="row app-features2 py-5">
                  <div class="col-12 col-md-6 detect-sound">
                    <span class="first-line">
                                            <hr class="listenLineLeft" />

                      <img src="imgs/listen.png" class="wifiSize" alt="Wifi Icon" />
                                            <hr class="listenLineRight" />

                    </span>
                    <div class="features-details">
                       <h4 class="text-center features-heading" id="stubborn-headings">Listen to Sound</h4>
                       <p class="features-text"> Set HearAid to automatically start listening when someone starts talking close to you, or when a particular sound is around the user .the user can manually record sounds at any time to be simulatedo</p>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 feat-img2 zoom">
                    <img src="imgs/X - 11.png" alt="sound-detector">
                  </div>
                  </div>
                <div class="row app-features3 py-5">
                  <div class="col-12 col-md-6 feat-img1 zoom">
                    <img src="imgs/X - 15.png" alt="sound-detector">
                  </div>
                    <div class="col-12 col-md-6 detect-sound">
                      <span class="first-line">
                                                                    <hr class="convertLineLeft" />

                      <img src="imgs/convert.png" alt="Wifi Icon" />
                                                                                          <hr class="convertLineRight" />

                      </span>
                      <div class="features-details">
                         <h4 class="text-center features-heading" id="stubborn-headings">Convert Sounds to Video Simulation</h4>
                         <p class="features-text">hearAid uses AI to understand sounds and create a video depicting actions creating the sound</p>
                      </div>
                    </div>
                </div>
                  <div class="row app-features4 py-5">
                    <div class="col-12 col-md-6 detect-sound">
                      <span class="first-line">
                                                                                            <hr class="createLineLeft" />

                        <i class="fas fa-wifi fa-4x"></i>
                                                                                            <hr class="createLineRight" />

                      </span>
                      <div class="features-details">
                         <h4 class="text-center features-heading">Create your Unique avatar</h4>
                         <p class="features-text">HearAid uses AI to understand sounds and create a video depicting actions creating the sound</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 feat-img2 zoom">
                      <img src="imgs/create avatar.png" alt="sound-detector">
                    </div>
                 </div>
                 <div class="row app-features5 py-5">
                  <div class="col-12 col-md-6 feat-img1 zoom">
                    <img src="imgs/X - 13.png" alt="sound-detector">
                  </div>
                    <div class="col-12 col-md-6 detect-sound">
                      <span class="first-line">
                            <hr class="saveLineLeft" />
                        <i class="fas fa-wifi fa-4x"></i>
                            <hr class="previewLineRight" />

                      </span>
                      <div class="features-details">
                         <h4 class="text-center features-heading">Preview simulation</h4>
                         <p class="features-text">Watch sounds as videos , choose qualities and edit videos</p>
                      </div>
                    </div>
                  </div>
                  <div class="row app-features6 py-5">
                    <div class="col-12 col-md-6 detect-sound">
                      <span class="first-line">
                       <hr class="saveLineLeft" />

                        <i class="fas fa-wifi fa-4x"></i>
                         <hr class="saveLineRight" />

                      </span>
                      <div class="features-details">
                         <h4 class="text-center features-heading">Save, share and connect to community</h4>
                         <p class="features-text">Set HearAid To Automatically start listening when someone starts talking close to you, or when a particular sound is around the user .the user can manually record sounds at any time to be simulated</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 feat-img2 zoom" id="features6">
                      <img src="imgs/X-17.png" alt="sound-detector">
                    </div>
                 </div>
              </div>
            </div>
      </section>

            <section class="mobilefeatures">
          <div class="container">
           
              <div class="row app-features">
                  <div class="col-12 col-md-12 col-sm-12  detect-sound">
                    <span class="first-line">
                                            <hr class="detectLineLeft" />

                      <img src="imgs/fa-solid_wifi.png" class="wifiSize" alt="Wifi Icon" />
                                            <hr class="detectLineRight" />

                    </span>
                    <div class="features-details">
                       <h4 class=" feature-heading">Detect Sounds</h4>
                                       <div class="col-12 col-md-12 col-sm-12 zoom" id="sound">
                  <img src="imgs/x15mobile.png" alt="sound-detector">
                </div>
                       <p class=" feature-text"> Set HearAid to automatically start listening when someone starts talking close to you, or when a particular sound is around the user .the user can manually record sounds at any time to be simulated</p>
                  </div>
                  </div>


                                    <div class="col-12 col-md-12 col-sm-12  detect-sound">
                    <span class="first-line">
                        <hr class="detectLineLeft" />

                      <img src="imgs/listen.png" class="wifiSize" alt="Wifi Icon" />
                                            <hr class="detectLineRight" />

                    </span>
                    <div class="features-details">
                       <h4 class=" feature-heading">Listen to Sound</h4>
                                       <div class="col-12 col-md-12 col-sm-12 zoom">
                  <img src="imgs/listenphone.png" alt="sound-detector">
                </div>
                       <p class=" feature-text">Set HearAid to automatically start listening when someone starts talking close to you, or when a particular sound is around the user .the user can manually record sounds at any time to be simulated</p>
                  </div>
                  </div>
                </div>


                                  <div class="col-12 col-md-12 col-sm-12  detect-sound">
                    <span class="first-line">
                      <hr class="detectLineLeft" />
                      <img src="imgs/convert.png" class="wifiSize" alt="Wifi Icon" />
                      <hr class="detectLineRight" />
                    </span>
                    <div class="features-details">
                       <h4 class=" feature-heading">Convert Sounds to Video Simulation</h4>
                                       <div class="col-12 col-md-12 col-sm-12 zoom">
                  <img src="imgs/listenphone.png" alt="sound-detector">
                </div>
                       <p class=" feature-text">HearAid uses AI to understand sounds and create a video depicting actions creating the sound</p>
                  </div>
                  </div>

                                    <div class="col-12 col-md-12 col-sm-12  detect-sound">
                    <span class="first-line">
                      <hr class="createLineLeft" />
                      <img src="imgs/create.png" class="wifiMidSize" alt="Wifi Icon" />
                      <hr class="createLineRight" />
                    </span>
                    <div class="features-details">
                       <h4 class=" feature-heading">Create your Unique avatar</h4>
                                       <div class="col-12 col-md-12 col-sm-12 zoom">
                  <img src="imgs/createphone.png" alt="sound-detector">
                </div>
                       <p class=" feature-text">hearAid uses AI to understand sounds and create a video depicting actions creating the sound</p>
                  </div>
                  </div>

                                    <div class="col-12 col-md-12 col-sm-12  detect-sound">
                    <span class="first-line">
                      <hr class="createLineLeft" />
                      <img src="imgs/preview.png" class="wifiMidSize" alt="Wifi Icon" />
                      <hr class="createLineRight" />
                    </span>
                    <div class="features-details" id="preview">
                       <h4 class=" feature-heading">Preview simulation</h4>
                                       <div class="col-12 col-md-12 col-sm-12 zoom">
                  <img src="imgs/previewphone.png" alt="sound-detector">
                </div>
                       <p class=" feature-text">watch sounds as videos , choose qualities and edit videos</p>
                  </div>
                  </div>

                                               <div class="col-12 col-md-12 col-sm-12  detect-sound pt-5">
                    <span class="first-line">
                      <hr class="createLineLeft" />
                      <img src="imgs/save.png" class="wifiSmallSize" alt="Wifi Icon" />
                      <hr class="createLineRight" />
                    </span>
                    <div class="features-details" id="save">
                       <h4 class=" feature-heading">Save, share and connect to community</h4>
                                       <div class="col-12 col-md-12 col-sm-12 zoom">
                  <img src="imgs/savephone.png" alt="sound-detector">
                </div>
                       <p class=" feature-text">Set HearAid To Automatically start listening when someone starts talking close to you, or when a particular sound is around the user .the user can manually record sounds at any time to be simulated</p>
                  </div>
                  </div>       

        
      </section>

      <section class="subscribe pt-5 text-center subscribeFooter">
          <div class="container">
                          <div class="padBottom">

             <div class="pt-5">
               <h4 class="subscribe-header">Sounds Interesting?</h4>
             </div>
             <div>
               <p class="subscribe-text pt-5">Subscribe to get notified</p>
             </div>
<div class="footerBg">
<img src="imgs/blacklogo.png" alt="Footer Logo" />
</div>

<div class="container py-3 pt-5">
    <span class="text-center">
      
                    <?php if (isset($_SESSION['success_messagetwo']) && !empty($_SESSION['success_messagetwo'])) { ?>
                        <div class="success_messagetwo" style="margin-bottom: 20px;font-size: 30px;color: #fff;"><?php echo $_SESSION['success_messagetwo']; ?></div>
                        <?php
                        unset($_SESSION['success_messagetwo']);
                    }
                    ?>
                                        <?php if (isset($_SESSION['error_messagetwo']) && !empty($_SESSION['error_messagetwo'])) { ?>
                        <div class="error_messagetwo" style="margin-bottom: 20px;font-size: 30px;color: red;"><?php echo $_SESSION['error_messagetwo']; ?></div>
                        <?php
                        unset($_SESSION['error_messagetwo']);
                    }
                    ?>

                    <form method="post" action="insert.php">



                    <div class="input-group mb-3 formMargin">
                            <input type="email" class="paddingForm pl-3" id="email"  placeholder="Enter Email Address" name="email" required>
  <div class="input-group-append">

                                                        <input type="submit" class="btn input-group-bg input-group-text input-group-bg paddingForm pb-4 pt-4"  name="save" value="SUBSCRIBE"/>
  </div>
</div>
                    </form>
                  </span>

                  </div>
                  </div>
                                      <div class="bottom-left desktopfooter"><img src="imgs/greenfooter.png" alt="Green Footer" /></div>
                                      <div class="absoluteFooter">
<img src="imgs/footersocial.png" alt="Green Footer"  />
<div class="centered">
<img class="centeredImg" src="imgs/socialone.png" alt="Social One"  />
<img class="centeredImg" src="imgs/socialtwo.png" alt="Social Two"  />
<img class="centeredImg" src="imgs/socialthree.png" alt="Social Three"  />
<!-- <img src="imgs/socialfour.png" alt="Social Four"  /> -->

                  </div>
                  </div>
                  </div>
      </section>

            <section class="subscribemobile pt-5 text-center subscribeFooter">
          <div class="container">
                          <div class="padBottom">

             <div class="pt-5">
               <h4 class="subscribe-header">Sounds Interesting?</h4>
             </div>
             <div>
               <p class="subscribe-text pt-5">Subscribe to get notified</p>
             </div>
<div class="footerBg">
<img src="imgs/mobilebacklogo.png" alt="Footer Logo" />
</div>

<div class="container py-3 pt-5">
    <span class="text-center">
      
                    <?php if (isset($_SESSION['success_messagethree']) && !empty($_SESSION['success_messagethree'])) { ?>
                        <div class="success_messagethree" style="margin-bottom: 15px;font-size: 20px;color: #fff;"><?php echo $_SESSION['success_messagethree']; ?></div>
                        <?php
                        unset($_SESSION['success_messagethree']);
                    }
                    ?>
                                        <?php if (isset($_SESSION['error_messagethree']) && !empty($_SESSION['error_messagethree'])) { ?>
                        <div class="error_messagethree" style="margin-bottom: 15px;font-size: 20px;color: red;"><?php echo $_SESSION['error_messagethree']; ?></div>
                        <?php
                        unset($_SESSION['error_messagethree']);
                    }
                    ?>

                    <form method="post" action="insertmobile.php">

                    <div class="input-group mb-3 formMargin">
                            <input type="email" class=" pl-3" id="email"  placeholder="Enter Email Address" name="email" required>
  <div class="input-group-append">

                                                        <input type="submit" class="btn input-group-bg input-group-text input-group-bg  pb-4 pt-4 subscribeBtn"  name="save" value="SUBSCRIBE"/>
  </div>
</div>
                    </form>
                  </span>

                  </div>
                  </div>
                                      <div class="bottom-left mobileFooter "><img src="imgs/greenfootermobile.png"  alt="Green Footer" /></div>
                                      <div class="absoluteFooters">
<img src="imgs/socialmobile.png" alt="Green Footer"  />
<div class="centered">
<img class="centeredImg" src="imgs/socialone.png" alt="Social One"  />
<img class="centeredImg" src="imgs/socialtwo.png" alt="Social Two"  />
<img class="centeredImg" src="imgs/socialthree.png" alt="Social Three"  />
<!-- <img src="imgs/socialfour.png" alt="Social Four"  /> -->

                  </div>
                  </div>
                  </div>
      </section>
      <script>
// Set the date we're counting down to
var countDownDate = new Date("Aug, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with ids
  document.getElementById("days").innerHTML = days ;
    document.getElementById("hours").innerHTML = hours ;
        document.getElementById("minutes").innerHTML = minutes ;
    document.getElementById("seconds").innerHTML = seconds ;

  // days +' <span id="subscript">"days "</span>'+ hours '<span id="subscript">"hours"</span>'+ minutes '<span id="subscript">"minutes"</span>'+ seconds + '<span id="subscript">"seconds"</span>';

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script src="acript.js"></script> -->
  </body>
</html>