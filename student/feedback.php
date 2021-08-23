<?php
include('security.php');

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background:rgb(46,31,26);
  padding: 30px 0px;
  position: fixed;
  border-right:2px solid #FFD700;
}

.wrapper .sidebar h2{
  color:#FFD700;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #FFD700;
  border-bottom: 1px solid #FFD700;
  border-top: 1px solid #FFD700;
}    

.wrapper .sidebar ul li a{
  color: #FFD700;
  display: block;
}

.wrapper .sidebar ul li button{
  color: #FFD700;
  
  display: block;
  border: none;
  border: none; background:transparent; color:rgb(46,31,26);font-size:16px;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:#FFD700;
}
   
.wrapper .sidebar ul li:hover a{
  color:black;
}
.wrapper .sidebar ul li button:hover {
  cursor:pointer;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: rgb(46,31,26);
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #FFD700;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: rgb(46,31,26);
  color: #FFD700;
  border-bottom: 1px solid #e0e4e8;
  position: fixed;
  z-index: 2;
  width: 85%;
  height: 61px;;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
button
{
  background:green;
  border: none;
}
@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
#search form
{
 margin-left: 30%;
  
}
#search input
{
  height: 30px;
}
#search form button{
  color: black;
  width: 10%;
  height: 30px;
  border: none;
  border-radius:5px;

}
#search table {

margin-top: 2%;
}
#search table th {
  background-color: blueviolet;
  color: black;
  border-radius: 5px;
  width: 1%;
  height: 30px;
}
#search table
{
  border-spacing: 10px;
}
#search tr td
{
  text-align: center;
}
.profile{
  width: 25px;
  height: 25px;
  border-radius: 30px;
}
.btn-warning{
  position: relative;
  right: 85px;
  top:35px
}

.dropdown {
  float: right;
  position: relative;
  top: -10px;
  right:50px;
}

.dropbtn{
  position: relative;
  top: -10px;
}

.dropdown .dropbtn {
  font-size: 30px;  
  border: none;
  outline: none;
  color: black;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover{
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

::-webkit-scrollbar {
width: 0px; /* remove scrollbar space /
background: transparent; / optional: just make scrollbar invisible */
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
    </style>
  <body style="width: 100%; height:100%; background-image:url('background.jpg');background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <img src="1-removebg-preview.png" alt="" width="50px" height="50px" style="margin-left: 75px; margin-top:-20px;margin-bottom:10px;border:1px solid #ffd700;border-radius:10px; background-color:#ffd700;">
        <script>
          $(document).ready(function(){
            jQuery('#pic').hover(function(){
              jQuery('.dropdown-content').show();
            })
            jQuery(document).click(function(){
              jQuery('.dropdown-content').hide();
            })
          })
        </script>
        <ul>
            <li><a href="studentpage1.php"><i style="padding-right:10px;"class="fas fa-home"></i>Home</a</li>
            
            
            <li><a href="search.php"><i style="padding-right:10px;" class="fas fa fa-search"></i>Search</a></li>

            <li><a href="fine.php"><i style="padding-right:10px;font-size: 18px;"class="fa fa-rupee"></i>Fine</a></li>
            <li><a href="fine.php"><i style="padding-right:10px;" class="fas fa-comment-alt" aria-hidden="true"></i>Feedback</a></li>
            
        </ul>

        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    <div class="main_content">
    <div class="header">Welcome!! Have a nice day.
    <div class="dropdown" style="top: 2px;">
                <button class="dropbtn" style="display: inline; ">
                  <?php
                $con=mysqli_connect('localhost','root','','library');
                   if(!$con)
                   {
                     echo "problem in connecting database";
                   }
                   $reg=$_SESSION['stu_reg'];
                   $s="select * from login where regno='$reg'";
                   $qu=mysqli_query($con,$s);
                   $row=mysqli_fetch_assoc($qu);
                   $v=$row['password'];
                   ?>
                  
                  <?php
                    echo "<span style='color:#FFD700;font-size:22px;margin-left:40px;'>".$_SESSION['stu_name']."</span>";

                   
                  ?>
                  <img src= "uploads/<?=$row['image']?>" class="profile" id="pic">
                </button>
              <div class="dropdown-content" style="left:200px;background-color:rgb(46,31,26)">
                <a href="profile.php" style="color: #FFD700;">
                <i class="fa fa-user" style="color: #FFD700;"aria-hidden="true"></i>
                  Profile
                </a>
                <a href="#" data-toggle="modal" style="color: #FFD700;"data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"style="color: #FFD700;"></i>
                  Logout
                </a>
              
              </div>
            </div>
        
          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
              <form action="logout.php" method="POST"> 
                <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
              </form>
            </div>
              </div>
          </div>
        
        </div>  
       
       
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.25865" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_4').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_6').hint('ex: myname@example.com');
       }, 20);
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
	JotForm.clearFieldOnHide="disable";
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Feedback Form","type":"control_head"},{"name":"submitForm","qid":"2","text":"Submit Feedback","type":"control_button"},{"name":"feedbackType","qid":"3","text":"Feedback Type","type":"control_radio"},{"name":"describeYour","qid":"4","text":"Describe Your Feedback:","type":"control_textarea"},null,{"name":"email6","qid":"6","subLabel":"example@example.com","text":"E-mail","type":"control_email"},null,{"name":"name","qid":"8","text":"Name","type":"control_fullname"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Feedback Form","type":"control_head"},{"name":"submitForm","qid":"2","text":"Submit Feedback","type":"control_button"},{"name":"feedbackType","qid":"3","text":"Feedback Type","type":"control_radio"},{"name":"describeYour","qid":"4","text":"Describe Your Feedback:","type":"control_textarea"},null,{"name":"email6","qid":"6","subLabel":"example@example.com","text":"E-mail","type":"control_email"},null,{"name":"name","qid":"8","text":"Name","type":"control_fullname"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.25865" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.25865" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.25865" />
<form class="jotform-form" action="fsubmit.php" method="post" name="form_211623367788465" id="211623367788465" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="211623367788465" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Feedback Form
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="input_3"> Feedback Type </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_3" data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_0" name="q3_feedbackType" value="Comments" />
              <label id="label_input_3_0" for="input_3_0"> Comments </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_1" name="q3_feedbackType" value="Suggestions" />
              <label id="label_input_3_1" for="input_3_1"> Suggestions </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_3" class="form-radio" id="input_3_2" name="q3_feedbackType" value="Questions" />
              <label id="label_input_3_2" for="input_3_2"> Questions </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4">
          Describe Your Feedback:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
          <textarea id="input_4" class="form-textarea validate[required]" name="q4_describeYour" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_4"></textarea>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="first_8">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_8" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_8" name="q8_name[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_8 sublabel_8_first" required="" />
              <label class="form-sub-label" for="first_8" id="sublabel_8_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_8" name="q8_name[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_8 sublabel_8_last" required="" />
              <label class="form-sub-label" for="last_8" id="sublabel_8_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_6" name="q6_email6" class="form-textbox validate[required, Email]" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" required="" />
            <label class="form-sub-label" for="input_6" id="sublabel_input_6" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit Feedback
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
 

  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="211623367788465" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='211623367788465'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "211623367788465-211623367788465";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.25865"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.25865"></script>
<script>
      jQuery(document).ready(function(){
        jQuery('.dropdown-content a').hover(function(){
          jQuery(this).css({color:'black',background:'#ffd700'})
          jQuery(this).find('i').css({color:'black'})
        },function(){
          jQuery(this).css({color:'#ffd700',background:'rgb(46,31,26)'})
          jQuery(this).find('i').css({color:'#ffd700'});
        })
      })
    </script>
</div>
</body>
</html>
