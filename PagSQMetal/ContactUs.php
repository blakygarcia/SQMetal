<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SQ Metal is a company dedicated mainly to the commercialization of ferrous scrap for export, located in Costa Rica" />
    <meta name="keywords" content="Scrap Metal, scrap, Metal, recycling, ferrous, not ferrous, reciclaje, chatarra, ferreo, materials, materiales" />
    <meta name="author" content="Nils Carrillo and Cesar Garcia" />
    <meta name="copyright" content="Copyright© All rights reserved 2022" />
    <title>Contact us</title>
    <link rel="shortcut icon" href="images/logo/favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- This is a library for animation on scroll -->
    <link rel="stylesheet" href="css/contactUs.css">
    <link rel="stylesheet" href="css/navOtherPages.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
    <header>
        <nav id="nav">
            <ul class="contentNavTextUL">
                <li><a href="#"><div id="crownLogoNvabar" width="32" height="32"></div></a></li>
                <div class="containerTextNav" id="containerTextNavbar">
                <li class="itemNavbar"><a href="index.php" class="textNav firstTextNav">Home</a></li>
                    <li class="itemNavbar"><a href="Who.php" class="textNav">Who we are?</a></li>
                    <li class="itemNavbar"><a href="Galery.php" class="textNav">Gallery</a></li>
                    <li class="itemNavbar"><a href="theQueen.php" class="textNav">The Queen</a></li>
                    <li class="itemNavbar"><a href="ContactUs.php" class="textNav">Contact us</a></li>
                </div>
                
            </ul>
        </nav>
    </header>

<body>
    <br>
    <br>
    <br>
    <br>
    <!-- Lo siguiente es un toast -->
    <div class="container directMessageWhatsapp fixed-bottom " >
        <a href="https://api.whatsapp.com/send?phone=50687091060&text=%C2%A1Hola%20quiero%20mas%20informacion!">
            <img id="whatsappImageLogo" class=" rounded-circle whatsappLogoVisible" src="images/logo/whatsappLogo.png" alt="">
        </a>

    </div>
    <div class="row featurette">
        <div class="col-md-4"></div>
        <div class="col-md-4 ">
            <a href="#contactSQ"><img src="images/manos.PNG" alt="" id="whoImagesSQMetal2" width="450px" height="250px" ></a> 
            <p> We really are here to be your support partner  if you have been toying with the idea of exporting your scrap in containers , setting up a new scrap recycling facility, or just want to see if we can provide you with better prices for your scrap. why not contact us What have you got to lose?</p>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row" id="form">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <form id="contactSQ" class="row g-3" method="post" action="backEnd/sendEmail.php">
                <div class=" border border-dark col-md-9 p-3 mt-2 ml-2 mr-2">
                    <div class="row ">
                        <H1>
                            Send Your Comments
                        </H1>

                        <div class="col-9 form-floating mb-3">
                            <input type="text" class="form-control"  name="usernameEmail" placeholder="Name">
                            <label>Name</label>
                        </div>

                        <div class="col-md-6"></div>
                        <div class="col-md-9 form-floating mb-3">
                            
                            <input type="email" class="form-control" id="inputEmail4" name="userEmail" placeholder="Email">
                            <label for="inputEmail4" class="form-label ">Email</label>
                        </div>

                    </div>
                    <div class="col-9 form-floating mb-3">
                        
                        <input type="text" class="form-control" id="subject" name="subjectEmail" placeholder="Subject">
                        <label for="subject" class="form-label ">Subject</label>
                    </div>
                    <div class="row">

                        <div class="col-md-9">
                            <textarea name="comentsEmail" id="" class="form-control" cols="30" rows="10" placeholder="Coments"></textarea>
                        </div>
                        <br>
                        <br>

                    </div>
                    <div class="col-md-2"></div>

                    <div class="row">

                        <div class="col-md-2 p-3 mt-2 ml-2 mr-2">
                            <button type="submit" class="btn btn-primary " name="submitEmail">Send</button>
                        </div>

                    </div>
                </div>

            </form>
        </div>

        <div class="col-md-2"></div>
    </div>

    <br>
    <br>
    <div class="row" >
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <div class="col-md-12">
                <div class="row "id="maps">
                    <div class="col-md-4 ">
                        <h6 id="subtitleTextImagesCircle">Scrap Queen El Tanque</h6>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15712.326982474344!2d-84.38518732191585!3d10.09238795144037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa073a88167a8db%3A0xe768eda19aefa18c!2sScrap%20Queen%20Metal%20Corp%20S.R.L.!5e0!3m2!1ses-419!2scr!4v1657327279460!5m2!1ses-419!2scr" width="190" height="130" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h6 id="subtitleTextImagesCircle">Locations S.Q Metal</h6>
                        <p>location:Province of Alajuela, The Fortuna, The Fortuna, 21007.</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-4 ">
                        <h6 id="subtitleTextImagesCircle">Scrap Queen Ciudad Quesada</h6>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.19045372422!2d-84.42450288520311!3d10.326638192627657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc734c19400603ebc!2zMTDCsDE5JzM1LjkiTiA4NMKwMjUnMjAuMyJX!5e0!3m2!1ses!2scr!4v1657472443934!5m2!1ses!2scr" width="190" height="130" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h6 id="subtitleTextImagesCircle">Locations S.Q Metal</h6>
                        <p>location: 8HGH+M33 Cd Quesada, Province of Alajuela.</p>

                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-4 ">
                        <h6 id="subtitleTextImagesCircle">Scrap Queen San Ramon  (Headquarter Office)</h6>
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.287879181456!2d-84.4830065852052!3d10.075481392799478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15c37901888764cd!2zMTDCsDA0JzMxLjciTiA4NMKwMjgnNTAuOSJX!5e0!3m2!1ses!2scr!4v1657472273553!5m2!1ses!2scr" width="190" height="130" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h6 id="subtitleTextImagesCircle">Locations S.Q Metal</h6>
                        <p>location: 3GG9+5MV San Ramón, Province of Alajuela </p>

                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <div class="col-md-2"></div>
        </div>



        <main>
        <!-- FOOTER -->
        <div class="b-example-divider"></div>
        <div class="container bg-dark" data-aos="fade-up">
            <footer class="py-3 my-4">
            <ul class="justify-content-center border-bottom pb-3 mb-3">
                <li class="itemNavbar"><a href="index.php" class="textNav firstTextNav">Home</a></li>
                <li class="itemNavbar"><a href="Who.php" class="textNav">Who we are?</a></li>
                <li class="itemNavbar"><a href="Galery.php" class="textNav">Gallery</a></li>
                <li class="itemNavbar"><a href="theQueen.php" class="textNav">The Queen</a></li>
                <li class="itemNavbar"><a href="ContactUs.php" class="textNav">Contact us</a></li>
            </ul>
                <div class="row row-social-media">
                    <div class="coll-md-4"></div>
                    <div class="col-md-4 social-media-footer">
                        <u class="underlinedTextFooter"><h3 class="followUsTextFooter">Follow us</h3></u>
                            <a href="https://www.facebook.com/scrapqueenmetalcorp"><i class="fa-brands fa-facebook fa-2x"></i></a>
                            <a href="https://www.instagram.com/scrapqueenmetalcorp/" class="iconInstagram"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    </div>
                    <div class="coll-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <span class="email-infomation">
                            <i class="fa-solid fa-envelope fa-2x"></i><a href="mailto:info-sqgroup@scrapqueenmetal.com"><h6 class="email-information text-white">info-sqgroup@scrapqueenmetal.com</a></h6>
                        </span>
                        <br>
                        <span class="phone-number">
                            <i class="fa-solid fa-phone fa-2x" ></i><a href="tel:+506 8709-1060" class="phoneNumberFooter"><h6 class="phone-information text-white">+506 87091-060</h6></a>
                        </span>
                    </div>
                    
                    <div class="col-md-7 copyrightText">
                        <p class="text-center text-white"> <strong>Copyright All Rights Reserved © 2022 Scrap Queen Metal Corporation SRL. </strong></p>
                    </div>
                </div>
            </footer>
        </div>
        </main>



        <!-- The following script is for initialize the toast -->
        <script>
            window.onload = (event) => {
                let myAlert = document.querySelector('.toast');
                let bsAlert = new bootstrap.Toast(myAlert);

                bsAlert.show();
                console.log("Inicia la ventana");
            }

            var count = 0;

            function closeToast() { //Se cumple solamente cuando presiona el boton cerrar
                count++;
                console.log("Presiona el boton cerrar");

                let icon = document.querySelector('.whatsappLogoVisible');
                icon.className = 'whatsappLogoHidden';
            }


            var myToastEl = document.querySelector('.toast');
            myToastEl.addEventListener('hidden.bs.toast', function() { //esta funcion se cumple cada vez que se cierra el toast
                if (count == 0) {
                    console.log("Se cierra el toast");
                    let myAlert = document.querySelector('.toast');
                    let bsAlert = new bootstrap.Toast(myAlert);
                    bsAlert.show();
                } else {
                    console.log("ya no se abre mas");
                }

            });
        </script>


        <style text="stylesheet">
            .whatsappLogoHidden {
                visibility: hidden;
            }

            .messageWhatsapp {

                max-width: 250px;
                border: 1px solid #000;
                margin-bottom: 0px;
            }

            .whatsappImageLogo {
                margin-left: 100%;
                max-height: 50px;
                border: 1px solid #000;
            }

            .directMessageWhatsapp {
                position: absolute;
                position: fixed;
                margin-left: 0%;

                z-index: 41;
                /*Colocamos el mensaje de primero */
            }
        </style>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><!-- This is a library for animation on scroll -->
        <script src="js/navOtherPages.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            AOS.init();
        </script>
    </body>

</html>