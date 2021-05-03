<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <script>
    document.getElementById('login-form').style.display='block';
   function validate()
   { 
    var id = document.add.book_id.value;
    var title = document.add.title.value;
    var edition = document.add.edition.value; 
    var author = document.add.author.value;
    var copies= document.add.copies.value;
    var publisher= document.add.publisher.value;
    var remarks= document.add.remarks.value;
    var numbers = /^\d+$/;
    if (id==null || id=="")
    { 
    alert("id can't be blank"); 
    
    return false; 
    }

    else if(!id.match(numbers))
    {
      alert('book id should be numerical');
      return false;
    }
    else if (title==null || title=="")
    { 
    alert("title can't be blank"); 
    return false; 
    }
    else if (edition==null || edition=="")
    { 
    alert("edition can't be blank"); 
    return false; 
    }
    else if (author==null || author=="")
    { 
    alert("author can't be blank"); 
    return false; 
    }
    else if (publisher==null || publisher=="")
    { 
    alert("publisher can't be blank"); 
    return false; 
    }
    else if (copies==null || copies=="")
    { 
    alert("copies can't be blank"); 
    return false; 
    }
    else if (remarks==null || remarks=="")
    { 
    alert("remarks can't be blank"); 
    return false; 
    }
    return true; 
   } 
   </script>
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
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li button{
  color: #bdb8d7;
  
  display: block;
  border: none;
 
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color:red;
}
   
.wrapper .sidebar ul li:hover a{
  color: #fff;
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
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
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
#add form
{
  margin-top:100px;
  margin-left: 30%;
}
#add h1{
  align-items: center;
  transform: translate(90px);
  height: 50px;
}

#add label{
  width: 120px;
  display: inline-block;
  height: 50px;
  font-size: 20px;
}

#delete form
{
  margin-top:100px;
  margin-left: 30%;
}
#delete h1{
  align-items: center;
  transform: translate(90px);
  height: 50px;
}

#delete label{
  width: 120px;
  display: inline-block;
  height: 50px;
  font-size: 20px;
}

#uname{
  height: 20px;
  width: 250px;
}

#submit{
  transform: translate(100px);
  padding: 8px 30px;
}


    </style>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <form action="deletebook.php" method="post">
        <ul>
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="addbook.php"><i style="padding-right:10px;" class="fas fa fa-plus"></i>Add Book</a></li>
            <li><a href="deletebook.php"><i style="padding-right:10px;" class="fas fa fa-minus"></i>Delete Book</a></li>
            <li><a href="#"><i class="fas fa fa-info"></i>Details</a></li>
            <li><a href="request.php"><i class="fas fa-address-book"></i>Request</a></li>
        </ul>
</form>
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
          <div id="content" style="display: block;">

            <div id="add" >
            <form name="add"  onsubmit='return validate()' action="addbook.php" method="post">
                  <h1>Add Book</h1>
                  <p>
                  <label for="user">Book id</label>
                  <input id="uname" type="text" name="book_id">
                  </p>
                  <p>
                      <label for="user">Title</label>
                      <input id="uname" type="text" name="title">
                  </p>
                    
                  <p>
                      <label for="user">Edition</label>
                      <input id="uname" type="text" name="edition">
                  </p>
                  
                  <p>
                      <label for="user">author</label>
                      <input id="uname" type="text" name="author">
                  </p>

                  <p>
                      <label for="user">publisher</label>
                      <input id="uname" type="text" name="publisher">
                  </p>

                  <p>
                      <label for="user">copies</label>
                      <input id="uname" type="text" name="copies">
                  </p>

                  <p>
                      <label for="user">remarks</label>
                      <input id="uname" type="text" name="remarks">
                  </p>
                <input type="submit" value="Add" id="submit" name="submit">
            </form>
            </div>
          </div>
        </div>
    </div>
</div>
  </body>
</html>

<?php
$con=mysqli_connect("localhost","root","","library");
if(!$con)
{
    echo "not connected";
}

    if(isset($_POST['submit']))
    {
        $Name=$_POST['book_id'];
        $title=$_POST['title'];
        $edition=$_POST['edition'];
        $author=$_POST['author'];
        $publisher=$_POST['publisher'];
        $copies=$_POST['copies'];
        $remarks=$_POST['remarks'];
    
        $query= mysqli_query($con,"select * from book where book_id='$Name'");
        if(mysqli_num_rows($query) > 0)
        {
            echo '<script>alert("Book id already existed");</script>';
        }
        else
        {
            $sql="insert into book values('$Name','$title','$edition','$author','$publisher','$copies','$remarks')";
    
            if(!mysqli_query($con,$sql))
            {
                echo "not inserted";
            }
            else
            {
                echo '<script>alert("inserted sucessfully");</script>';
            }
        }
    }

?>


