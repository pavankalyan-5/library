
<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'elibrary.anits@gmail.com';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: contactform.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>

<html>
    <head>
            <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ContactPage</title>
    <style>
.navbar{
    height: 10%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: rgba(0,0,0,0.3);
    border-radius: 6px;
}
nav{
    flex: 1;
    text-align: left;
    margin-left: 15px;
    font-weight: bold;
}

nav ul li{
    list-style: none;
    display: inline;
    margin-left: 30px;
}
li a:hover {
    background-color: #111;
    padding: 8px;
  }
  nav ul li button
  {
      font-size: 20px;
      color: white;
      outline: none;
      border:none;
      background:transparent;
      cursor: pointer;
      font-family: sans-serif;
      width:110%;
      height: 35px;
  
  }
  nav ul li button:hover
  {
      background-color:rgb(73, 129, 129);
      border-radius:10px;
      border-width: 5px;
      transform: translateY(-2px);
  }
    </style>
    </head>
<body>
<div class="navbar">
            <nav>
                <ul>
                    <li><button onclick="location.replace('mainpage.html')"class="loginbtn" style="width: auto;">Home</button>
                    <li><button onclick="location.replace('aboutus.html')"class="loginbtn" style="width: auto;">About Us</button>
                    <li><button onclick="location.replace('contactform.php')"class="loginbtn" style="width: auto;">Contact Us</button>
                </ul>
            </nav>
        </div>
<div class="container my-3 my-sm-5">


<h1 class="mb-sm-4 text-center mb-4">Contact Us</h1>
<hr>
<div class="row">
    <div class="col-12 col-md-6">



        <h4>Address</h4>
        <address>
            <strong>
                Sangivalasa 
            </strong>
            <br>
            #beside Anil nerukonda hospital <br>
            Thagarapalasa,India <br>
            <abbr title="Telephone">T:</abbr> <a href="tel:+919989141258">+91 99891 41258</a><br>
            <abbr title="Mail">M:</abbr><a href="mailto:elibray.anits@gmail.com">elibray.anits@gmail.com</a><br>
        </address>
    </div>
    <div class="col-12 col-md-6">


        <h4>Opening hours</h4>
        <p>
            Monday-Thursday: <span class="float-right">10 am - 3 pm  </span> <br>
        </p>
        <p>
            Friday-Saturday: <span class="float-right"> 10 am - 2 pm</span> <br>
        </p>
        <p>
            Sunday: <span class="float-right"> Holiday </span> <br>
        </p>
    </div>
</div>
<div class="row">

    <div class="col-12 col-md-6 mb-3">
        <h4>Send us a message</h4>
        <form action="contactform.php" method="post" id="contact-form">
        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
            <div class="row">
                <div class="col-12 col-md-6">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" required>

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>

                    </div>
                </div>

            </div>
            <div class="form-group">
                <label for="textarea">Message:</label>
                <textarea class="form-control" placeholder="Write your message here..." name="message" id="textarea" cols="30" rows="10" required></textarea>



            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>
    <div class="col-12 col-md-6">


        <h4>Our Library</h4>
        <div class="embed-responsive embed-responsive-4by3">
           <img style="margin-top:-70%;"src="https://www.targetadmission.com/img/colleges/newc/22923-212633.jpg" alt="library">
        </div>
    </div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
      const constraints = {
          name: {
              presence: { allowEmpty: false }
          },
          email: {
              presence: { allowEmpty: false },
              email: true
          },
          message: {
              presence: { allowEmpty: false }
          }
      };

      const form = document.getElementById('contact-form');

      form.addEventListener('submit', function (event) {
          const formValues = {
              name: form.elements.name.value,
              email: form.elements.email.value,
              message: form.elements.message.value
          };

          const errors = validate(formValues, constraints);

          if (errors) {
              event.preventDefault();
              const errorMessage = Object
                  .values(errors)
                  .map(function (fieldValues) {
                      return fieldValues.join(', ')
                  })
                  .join("\n");

              alert(errorMessage);
          }
      }, false);
  </script>
</body>
</html>