<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DentalGram</title>
    <style type="text/css">
      :root{
        --btncolor: #16D9D6;
        --btncolortwo: #F9F9F6;
        --input-invalid: red;
      }
      /*nav style*/
      *{
        margin: 0;padding: 0;box-sizing: border-box;
        font-family: arial;
      }
      html{
        font-size: 62.5%;
      }
      .login,.book-appoinment{
        border-radius: 2rem;font-size: 1.7rem;
      }
      .nav-item{
        font-size: 2rem;
      }
      li{
        padding: 1rem;
      }
      .nav-link{
        color: black;
      }
      .nav-link:hover{
        color: var(--btncolor);
      }
      /*dentalgram list*/
      .dentalgram-list{
        background:url('images/header-image/BackGroundImage.png');background-size: 100% 100%;
      }
      /*emergancy*/
      .store-img{ width: 16.6rem; padding: .5rem; 
      }
      .card-bg,.icon-even{
        background-color: var(--btncolor);padding: 1.1rem; border-radius: 2rem; color: var(--btncolortwo);
      }
      .card-bg-even,.icon{
        background-color: var(--btncolortwo);padding: 1.1rem; border-radius: 2rem; color: var(--btncolor);
      }
      .icon,.icon-even{
        width:6.5rem;height: 6.5rem; padding: 1rem;
      }
      /*teeth*/
      .card{
        border-radius: 2rem; border: .3rem solid #0a99ec;padding: 3rem;
      }
      .choose-form-color{color: var(--btncolor);font-size: 2rem;
      }
      .card-icon{
        margin-top:-2rem;margin-left: 5rem; position:absolute; z-index: 1;width: 7rem;
      }
      /*form video*/
      input.invalid {
        background-color: var(--input-invalid);
      }
      label{
        font-size: 1.5rem;
      }

      /* Hide all steps by default: */
      .tab {
        display: none;
      }

      .btn-next,.btn-prev {background-color: #04AA6D;color: #ffffff;border: none;padding: 1rem 2rem;font-size: 1.5rem;cursor: pointer;
      }

      .btn-next,.btn-prev:hover {
        opacity: 0.8;
      }

      #prevBtn {
        background-color: #bbbbbb;
      }
      #regForm{
        height:29rem;
      }
      /* Make circles that indicate the steps of the form: */
      .step {height: 15px;width: 15px;margin: 0 2px;background-color: #bbbbbb;border: none;  border-radius: 50%;display: inline-block;opacity: 0.5;
      }

      .step.active {
        opacity: 1;
      }
      /*mobile view css*/
      .overlay {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: var(--btncolor);
      overflow-x: hidden;
      transition: 0.5s;
    }

    .overlay-content {
      position: relative;
      width: 100%;
    }

    .overlay a {
      padding: 2px;
      text-decoration: none;
      font-size: 14px;
      color: black;
      display: block;
      transition: 0.3s;
    }

    .overlay a:hover, .overlay a:focus {
      color:var(--btncolor);
    }

    .overlay .closebtn {
      position: absolute;
      top: 20px;
      right: 45px;
      font-size: 63px;
    }

    @media screen and (max-height: 450px) {
      .overlay a {font-size: 20px}
      .overlay .closebtn {
      font-size: 40px;
      top: 15px;
      right: 35px;
      }
    }

      /* Mark the steps that are finished and valid: */
      .step.finish {
        background-color: #04AA6D;
      }

      /*nav responsive*/
      @media screen and (max-width: 998px) {
       .d-n-mb{
          display: none;
        }
      }
       @media screen and (max-width: 2000px) {
       .tripple-icon{
          display: none;
        }
      }
      @media screen and (max-width: 768px) {
       .mainLogo{
        width: 100vw;
       }
       .d-n-mb{
          display: none;
        }
        .navbar{
          color: black;
        }
        .main-menu{
          display: inline;
       }
       .d-n-all{
        display: none;
       }
    }
      @media screen and (max-width: 400px) {
        .store-img{
          width: 10rem;
        }
        .d-n-mb{
          display: none;
        }
        .navbar{
          color: black;
        }
        .d-n-all{
        display: none;
       }
       .tripple-icon{
        display: block;
       }
       .mobile-nav{
        display: flex;
        width: 60%;
        background-color: danger;
       }
       .mainlogo{
        width: 100%;
       }
       .mobile-nav-icon{
        width: auto;
       }
       .mobile-text-style{
        font-size: 10px;
       }
       form{
        margin: 5rem;
       }
       .nav-link:hover{
        color: var(--btncolortwo);
      }
      .{
        border: .1rem solid var(--btncolor);
        padding: 1rem 2rem;
        border-radius: 1rem;
      }
      .dental-service-icon{
        width: 6rem; height: 6rem; margin: .3rem;
      }
      .borderd{
        border: .1rem solid var(--btncolor);
        border-radius: 2rem;
        margin-bottom: 1rem;
        padding: .5rem 1rem;
      }
    }
    </style>
</head>
<body>
<section class="container-fluid">
  <div class="row">
  <div class="col-sm-12 col-md-8 col-lg-8 pt-4 mobile-nav col-9">
    <!-- column started -->
    <div>
      <!-- logo -->
      <img src="images/header-image/MainLogo.png" class="mainlogo
      img-fluid px-5 mainLogo">
    </div>
  </div>
  <!-- end column -->
  <div class="col-sm-4 col-md-4 col-lg-4 pt-5 col-3">
    <!-- started column -->
    <span class="tripple-icon justify-content-end mobile-nav-icon float-right w-50" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <div class="d-flex justify-content-end">
      <li class="nav-item dropdown d-flex ">
        <button class="book-appoinment btn-info px-3 mx-2 text-light fw-bold d-n-mb">book an appoinment</button>
        <button class="login px-3 py-2 mx-1 text-light fw-bold nav-link dropdown-toggle btn-secondary d-n-mb" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span>login</span><img src="images/header-image/layer_163.png" class="px-2"></button>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#">Temps</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Dental office</a>
            </li>
          </ul>
        </li>
      </div>
    </div>
  </div>

  <!-- navbar new -->
  <div class="row container-fluid">
    <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between">
        <nav class="navbar navbar-expand-lg d-n-all">
          <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-capitalize fw-bold nav-item">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">treatments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">about us </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">blog</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">contact us </a>
                </li>
              </ul>
            
        </div>
      </nav>
      <div class="d-flex p-3 w-25 d-n-all">
        <img src="images/header-image/layer36.png" class="img-fluid store-img px-4  d-n-all">
        <img src="images/header-image/layer37.png" class="img-fluid store-img px-4  d-n-all">
      </div>
      <!-- mobile view -->
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content"> <!-- class use change style-->
          <!-- <img src="images/header-image/MainLogo.png" class="img-fluid p-5"> -->
          <hr class="bg-light" style="height: 2px;">
          <ul class="navbar-nav text-capitalize fw-bold fs-4 mobile-text-style">      
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">treatments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">about us </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">blog</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">contact us </a>
                </li>
              </ul>
             <div class="d-flex p-5">
                <img src="images/header-image/layer36.png" class="img-fluid w-50">
                <img src="images/header-image/layer37.png" class="img-fluid w-50">
             </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- form video -->
<section class=" container-fluid">
    <div class="row bg-dark">
      <div class="col-sm-4 col-md-4 col-lg-4 bg-info" style="background-image: url('images/header-image/BlueBackground.png');">
        <form id="regForm" action="#" class="m-5">
          <h1 class="text-center text-capitalize p-3 fw-bold">are you patient ?</h1>
          <!-- One "tab" for each step in the form: -->
          <!-- step 1 from -->
          <div class="tab">
            <div class="row">
              <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label  margin_bootom_0">Patient Name <span class="text-danger">*</span></label>
                          <input name="name" id="name" type="text" class="form-control p-3" placeholder="Name">
                          <span class="rating-error" id="name-errors"></span>
                      </div>
                  </div><!--end col-->

                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label  margin_bootom_0">Your Email <span class="text-danger">*</span></label>
                          <input name="email" id="email" type="email" class="form-control p-3" placeholder="Email">
                      </div> 
                  </div><!--end col-->

                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">Your Phone <span class="text-danger">*</span></label>
                          <input name="phone" id="phone" type="tel" class="form-control p-3" placeholder="Phone">
                      </div> 
                  </div><!--end col-->

                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">Address <span class="text-danger">*</span></label>
                          <input name="address" id="address" type="text" class="form-control p-3 pac-target-input" placeholder="Address" autocomplete="off">
                      </div> 
                  </div><!--end col-->
                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">Unit Number</label>
                          <input name="unit_no" id="unit_no" type="text" class="form-control p-3" placeholder="UnitNo">
                      </div> 
                  </div>

                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">City <span class="text-danger">*</span></label>
                          <input name="city" id="city" type="tel" class="form-control p-3" placeholder="City">
                      </div> 
                  </div>
                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label  margin_bootom_0">State <span class="text-danger">*</span></label>
                          <input name="state" id="state" type="text" class="form-control p-3" placeholder="State">
                      </div> 
                  </div><!--end col-->

                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">Country <span class="text-danger">*</span></label>
                          <input name="country" id="country" type="tel" class="form-control p-3" placeholder="Country">
                      </div> 
                  </div>
                  <div class="col-lg-6">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">Zipcode <span class="text-danger">*</span></label>
                          <input name="zipcode" id="zipcode" type="text" class="form-control p-3" placeholder="Zipcode">
                      </div> 
                  </div>
            </div>
          </div>

          <div class="tab">
           <div class="row">
               <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0 ">Query <span class="text-danger">*</span></label>
                          <textarea name="description" id="description" rows="1" class="form-control p-3" placeholder="Write your query here...."></textarea>
                      </div>
                  </div><!--end col-->

                 

                  <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0">When was your last visit to the dentist? </label>
                          <select class="col-lg-8 form-control p-3" name="last_visit" id="last_visit">
                              <option value="">Please select</option>
                              <option value="< 1 Year">&lt; 1 Year</option>
                              <option value="1-2 Years">1-2 Years</option>
                              <option value="2+ Years">2+ Years</option>
                              <option value="I've never visited">I've never visited</option>
                          </select>
                          <p style="font-size:10px;">This question helps us determine your appointment length.</p>
                        </div> 
                  </div>

                  <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0">How soon would you like to visit the dentist? </label>
                          <select class="col-lg-8 form-control p-3" name="coming_visit" id="coming_visit">
                              <option value="">Please select</option>
                              <option value="Within 1 week">Within 1 week</option>
                              <option value="Within 2 weeks">Within 2 weeks</option>
                              <option value="In more then 2 weeks ">In more than 2 weeks </option>
                          </select>
                          <p style="font-size:10px;">We'll try to connect you with a dentist who has appointments in your time range.</p>
                        </div> 
                  </div>
                
                  
                  <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0">Do you have dental insurance? </label>
                          <select class="col-lg-8 form-control p-3" name="insurance" id="insurance">
                              <option value="">Please select</option>
                              <option value="Yes - I have Insuracne">Yes - I have insurance </option>
                              <option value="No - I don't have insurance">No - I don't have insurance</option>
                          </select>
                          <p style="font-size:10px;">Why do we ask? We want connect you with a dentist who accepts your plan!</p>
                        </div> 
                  </div>
           </div>
          </div>

          <div class="tab">
            <div class="row">
              <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0">Please identify the type of procedure(s) you are interested in. (if unsure, leave blank) </label>

                          <div class="row" style="margin-left: 0px;font-size:12px;">
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Root Canal" id="flexCheckDefault1">
                                  <label class="form-check-label" for="flexCheckDefault">Root Canal</label>
                              </div>
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Teeth Whitening" id="flexCheckChecked2">
                                  <label class="form-check-label" for="flexCheckChecked">Teeth Whitening</label>
                              </div>  
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Snap on Dentures" id="flexCheckChecked4">
                                  <label class="form-check-label" for="flexCheckChecked">Snap on Dentures</label>
                              </div>
                            
                             
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Bridge/Crown" id="flexCheckChecked5">
                                  <label class="form-check-label" for="flexCheckChecked">Bridge/Crown</label>
                              </div>
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Implants(s)" id="flexCheckChecked6">
                                  <label class="form-check-label" for="flexCheckChecked"> Implants(s)</label>
                              </div>
                              
                             
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Braces (Metal)" id="flexCheckChecked9">
                                  <label class="form-check-label" for="flexCheckChecked">Braces (Metal) </label>
                              </div>
                              
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Dental Extractions" id="flexCheckChecked11">
                                  <label class="form-check-label" for="flexCheckChecked">Dental Extractions</label>
                              </div>
                            
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Veneers" id="flexCheckChecked10">
                                  <label class="form-check-label" for="flexCheckChecked">Veneers </label>
                              </div> 
                              
                              <div class="form-check col-lg-4">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Other" id="flexCheckChecked12">
                                  <label class="form-check-label" for="flexCheckChecked">Other </label>
                              </div>
                              
                              <div class="form-check col-lg-5">
                                  <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Removable Dentures" id="flexCheckChecked8">
                                  <label class="form-check-label" for="flexCheckChecked">Removable Dentures</label>
                              </div>
                              <div class="form-check col-lg-6">
                              <input name="interested_procedure[]" class="form-check-input" type="checkbox" value="Clear Aligners (Invisalign)" id="flexCheckChecked3">
                                  <label class="form-check-label" for="flexCheckChecked">Clear Aligners (Invisalign)</label>
                              </div>
                              
                          </div>
                      </div> 
                  </div>
            </div>
          </div>

        <div class="tab">employeed:
          <div class="row">
            <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0">Are you presently employed? </label>
                          <select class="col-lg-8 form-control p-3" name="presently_employed" id="presently_employed">
                              <option value="">Please select</option>
                              <option value="Employed">Employed</option>                                                    
                              <option value="Retired / Senior">Retired / Senior</option>
                              <option value="Unemployed / Dependent">Unemployed / Dependent</option>
                              <option value="Student">Student</option>
                          </select>
                        </div> 
                  </div>


                  <div class="col-lg-12">
                      <div class="mb-1">
                          <label class="form-label margin_bootom_0">How did you hear about us? </label>
                          <select class="col-lg-8 form-control p-3" name="hear_about_us" id="hear_about_us">
                              <option value="">Please select</option>
                              <option value="Google">Google</option>                                                    
                              <option value="Social Media">Social Media</option>
                              <option value="Radio">Radio</option>
                              <option value="Referral">Referral</option>
                              <option value="Others">Others</option>
                          </select>
                        </div> 
                  </div>

                  <br>
                  <div class="col-12" style="margin-top:10px;">
                  <p style="font-size:11px;"><input value="Yes" type="checkbox" name="send_email_permission" id="send_email_permission"> 
                  By checking this box you agree with the <a style="color:#fff;font-weight:bold;text-decoration:underline!important;font-size:13px;" target="_blank" href="https://www.dentalgram.ca/Terms"><span>Terms and Conditions</span></a> and consent to the 
                  secure collection, use and disclosure of your personal information as described in our 
                  <a style="color:#fff;font-weight:bold;text-decoration:underline!important;font-size:13px;" target="_blank" href="https://www.dentalgram.ca/Privacy"><span>Privacy Policy</span></a>
                  </p></div>
                  
              </div><!--end row-->
              
              <input type="hidden" id="latitude" name="latitude" value="">
              <input type="hidden" name="longitude" id="longitude" value="">
          </div>

          <div class="py-3">
            <div class="py-2 mb-5" style="float:right;">
              <button type="button" class="btn-next" id="prevBtn" onclick="nextPrev(-1)" style=" border-radius: 15px;">Previous</button>
              <button type="button" class="btn-prev" id="nextBtn" onclick="nextPrev(1)" style=" border-radius: 15px;">Next</button>
            </div>
          </div>
          <!-- Circles which indicates the steps of the form: -->
          <!-- <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div> -->
        </form>   
      </div>  
      <div class="col-sm-8 col-md-8 col-lg-8">
          <video class="video-fluid w-100 h-100" autoplay loop controls muted style="pointer-events: none;">
            <source src="video/video-bg.mp4" type="video/mp4">
          </video>
      </div>    
    </div>
</section>
<!-- servicess -->
<section class="container-fluid" style="margin-top:5.5rem">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <img src="images/header-image/Dentist.png" class="img-fluid" align="images">
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div>
        <h1 class="text-capitalize fw-bold text-center display-3">dentalGram</h1>
        <p class="mb-5 fs-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        ></p>
      </div>
      <div class="row b-5">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="d-flex borderd " style="align-items: center;
          ">
            <img src="images/header-image/Icon01_1.png" class="m-1">
            <p class="text-capitalize px-3 py-1 fw-bold fs-3">affortable</p>
          </div>

          <div class="d-flex borderd" style="align-items: center;
          ">
            <img src="images/header-image/Icon02_1.png" class=" dental-service-icon py-2">
            <p class="text-capitalize px-3 py-1 fw-bold fs-3">affortable</p>
          </div>

          <div class="d-flex borderd" style="align-items: center;
          ">
            <img src="images/header-image/Icon03_1.png" class=" dental-service-icon py-2">
            <p class="text-capitalize px-3 py-1 fw-bold fs-3">affortable</p>
          </div>
        </div>
        <!-- second column -->
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="d-flex borderd" style="align-items: center;
          ">
            <img src="images/header-image/Icon04_1.png" class="img-fluid dental-service-icon py-2">
            <p class="text-capitalize dental-service-icon px-3 py-1 fw-bold fs-3">affortable</p>
          </div>

          <div class="d-flex borderd" style="align-items: center;
          ">
            <img src="images/header-image/Icon05_0.png" class=" dental-service-icon py-2">
            <p class="text-capitalize px-3 py-1 fw-bold fs-3">affortable</p>
          </div>

          <div class="d-flex borderd" style="align-items: center;
          ">
            <img src="images/header-image/Icon06_0.png" class=" dental-service-icon py-2">
            <p class="text-capitalize px-3 py-1 fw-bold fs-3">affortable</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- choose -->
<section class="pt-5 container-fluid" style="background:url('images/header-image/BlueDesign.png');" style="background-size: 100% 100%;">
  <h1 class="text-capitalize text-center p-5 display-5 fw-bold">why choose dentalgram?</h1>
  <div class="row justify-content-center mt-5 container-fluid">
    <div class="col-sm-4 col-md-4 col-lg-4 mb-5">
      <fieldset>
        <legend><img src="images/header-image/Icon01_0.png" class="card-icon" ></legend>
        <div class="card m-4">
          <div class="card-title mt-4" style="position: relative;">
            <p class="text-capitalize choose-form-color fs-1 fw-bold">qualified dentiest</p>
            <p class="fw-bold fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et d
            </p>
          </div>
        </div>
      </fieldset>
    </div>  
    <div class="col-sm-4 col-md-4 col-lg-4">
      <fieldset>
          <legend class="" style=""><img src="images/header-image/Icon04_0.png" class="card-icon"></legend>
          <div class="card m-4">
            <div class="card-title mt-4" style="position: relative;">
              <p class="text-capitalize choose-form-color fs-1 fw-bold">emergancy priorty</p>
              <p class="fw-bold fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et d
              </p>
            </div>
          </div>
        </fieldset>
    </div> 
  </div>
  <!-- second row -->
  <div class="row justify-content-end mt-5">
    <div class="col-sm-4 col-md-4 col-lg-4 mb-5">
      <fieldset>
        <legend><img src="images/header-image/Icon02_0.png" class="card-icon" ></legend>
        <div class="card m-4">
          <div class="card-title mt-4" style="position: relative;">
            <p class="text-capitalize choose-form-color fs-1 fw-bold">centerally located</p>
            <p class="fw-bold fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et d
            </p>
          </div>
        </div>
      </fieldset>
    </div>  
    <div class="col-sm-4 col-md-4 col-lg-4">
      <fieldset>
          <legend class="" style=""><img src="images/header-image/Icon04_0.png" class="card-icon"></legend>
          <div class="card m-4">
            <div class="card-title mt-4" style="position: relative;">
              <p class="text-capitalize choose-form-color fs-1 fw-bold">qualified dentiest</p>
              <p class="fw-bold fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et d
              </p>
            </div>
          </div>
        </fieldset>
    </div>    
  </div>
</section>

<!-- dental list -->
<section class="container-fluid" style="background:url('images/header-image/BackGroundImage.png');background-size: 100% 100%;">
  <!-- titttle and heading -->
      <div class="text-capitalize text-center py-5">
        <h1 class="display-3 fw-bold pt-5">dentalGram</h1>
        <p class="fs-4">
          ours state of arts dental gram offices following dental treatment.
        </p>
      </div>
      <div class="row" style="padding-bottom: 7rem;" >

        <!-- start column -->
        <div class="col-sm-6 col-md-6 col-lg-6 ">
          <!-- start row -->
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg">
                  <img src="images/header-image/Icon01.png" class="p-3 img-fluid icon">
                  <p class="text-capitalize p-3 fw-bold fs-2">eemrgancy dentistry</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg-even">
                  <img src="images/header-image/Icon02.png" class="p-3 img-fluid icon-even">
                  <p class="text-capitalize p-3 fw-bold fs-2">invisalign clear braces</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg">
                  <img src="images/header-image/Icon03.png" class="p-3 img-fluid icon" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">teeth-whitening</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg-even">
                  <img src="images/header-image/Icon08.png" class="p-3 img-fluid icon-even" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">dental extrations</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg">
                  <img src="images/header-image/Icon07.png" class="p-3 img-fluid icon" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">sedation dentistry</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg-even">
                  <img src="images/header-image/Icon08.png" class="p-3 img-fluid icon-even" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">metal free crowns</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- start col-2 -->
        <div class="col-sm-6 col-md-6 col-lg-6 ">
          <!-- start row -->
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg-even">
                  <img src="images/header-image/Icon09.png" class="p-3 img-fluid icon-even" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">dental implants</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg">
                  <img src="images/header-image/Icon10.png" class="p-3 img-fluid icon" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">preventative dentistry</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg-even">
                  <img src="images/header-image/Icon11.png" class="p-3 img-fluid icon-even" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">crown-&-bridge</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg">
                  <img src="images/header-image/Icon12.png" class="p-3 img-fluid icon" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">denturess-technolgy</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg-even">
                  <img src="images/header-image/Icon13.png" class="p-3 img-fluid icon-even" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">advance-technology</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- start column -->
            <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="w-100 mb-3">
                <div class="d-flex card-bg">
                  <img src="images/header-image/Icon14.png" class="p-3 img-fluid icon" style="">
                  <p class="text-capitalize p-3 fw-bold fs-2">restorative dentistry</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- end row -->
      </div>
</section>

<!-- emergancy -->
<section class="container-fluid" style="background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('images/header-image/DentistEmergency.png'); background-size: 100% 100%;">
  <div class="row" style="padding-bottom:7rem">
    <div class="col-sm-6 col-md-6 col-lg-6">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-8 col-md-8 col-lg-8 m-5 col-10 rounded" style="background-image:linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)) ">
            <div class="text-capitalize text-center p-5 m-3">
              <h1 style="color:var(--btncolor);" class="display-3 fw-bold">emerancy?</h1>
              <p class="display-5 fs-2 fw-bold py-3">we fondaly welcome how patient & dental emerancy!</p>
              <button class="btn w-100 p-3 fs-4 fw-bold text-capitalize bg-info">
                book an appoinment
              </button>
            </div>
        </div>
      </div>
      
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6"></div>
    <!-- <div class="col-sm-5 col-md-5 col-lg-5"></div> -->
  </div>
</section>
<!-- footer section -->
<section class="bg-dark">
  <div class="container pb-5">
    <div class="row container text-light ">
      <div class="col-sm-7 col-md-7 col-lg-7">
        <div class="mt-5">
          <img src="images/header-image/MainLogo.png">
          <div>
            <img src="images/header-image/Facebook.png" class="m-1">
            <img src="images/header-image/Twitter.png" class="m-1">
            <img src="images/header-image/Youtube.png" class="m-1">
            <img src="images/header-image/Instagram.png" class="m-1">
          </div>
          <p class="text-capitalize pt-3 fs-4">dentalgram provides yours digital solutions for dentals offices and dental treatment</p>
          <div class="d-block">
            <div class="d-flex">
              <img src="images/header-image/Tel.png" style="width: 2rem; height: 2rem; padding: 3px;"><p class="fs-4">+1-783738-7363</p>

            </div>            
            <div class="d-flex">
              <img src="images/header-image/Email.png" style="width: 2rem; height: 2rem; padding: 3px;"><p class="fs-4">info@dentalgram.ca</p>
            </div>
          </div>
          <div class="d-flex m-0">
            
          </div>
          <div class="d-flex">
            <p class="bg-light text-info text-center fs-4" style="border-radius:2rem; padding: .5rem; width: 20rem;">contact us</p>
          </div>
        </div>
      </div>  

      <!-- start col -->
      <div class="col-sm-5 col-md-5 col-lg-5 mt-5">
        <div class="m-5 py-5" style="display: grid;place-items:center;background: url('images/header-image/RoundedRectangle13.png'); background-repeat: no-repeat; background-size: 100% 100%; ">
          <h3 class="text-center text-capitalize p-4">download our app</h3>
          <img src="images/header-image/Layer17.png" style="width:20rem">
        </div>
      </div>
    </div>
    <!-- copy right -->
  </div>
  <div class="bg-info fs-3">
      <div class="d-flex justify-content-between p-2 px-5 container">
      <div class="p-2 fw-bold">
        <p>2022 #dentalGram.Inc. All Rights reserved</p>
      </div>
      <div class="p-2 fw-bold">
        <p>terms & conditions | private policy | about us</p>
      </div>
    </div>
  </div>
</section>
  <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
  function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>