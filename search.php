<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
  border: none; background:transparent; color:#bdb8d7;font-size:16px;
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
#search form
{
 margin-left: 30%;
  
}
#search input
{
  height: 30px;
}
#search form button{
  color: white;
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
  color: white;
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
#search table tr td button
{
    height: 20px;
    width: 50px;
    border-radius: 5px;
    background-color: blueviolet;
    color: white;
}
#search table tr td button:hover
{
    background-color: red;
    
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
*{
  box-sizing: border-box;
}
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}
.searchresults:after {
  content: "";
  display: table;
  clear: both;
}
.searchresults
{
  text-align: center;
}
.bdetails button
{
  background-color: blueviolet;
  border-radius: 5px;
  width: 30%;
  height: 20px;
}
    </style>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <form action="studentpage1.php" method="post">
        <ul>
            <li><button type="button"  onclick="showhide1();" name="btn" ><i style="padding-right:10px;"class="fas fa-home"></i>Home</button></li>
            <li><button type="button"  onclick="showhide2();" name="btn" ><i style="padding-right:10px;"class="fas fa-user"></i>Profile</button></li>
            <li><button type="button"  onclick="showhide3();" name="btn" ><i style="padding-right:10px;"class="fas fa-address-card"></i>About</button></li>
            <li><a href="search.php"><i style="padding-right:10px;" class="fas fa fa-search"></i>Search</a></li>

            <li><button type="button"  onclick="showhide5();" name="btn" ><i style="padding-right:10px;"class="fas fa fa-money"></i>Fine</button></li>
            <li><button type="button"  onclick="showhide6();" name="btn" ><i style="padding-right:10px;"class="fas fa-address-book"></i>Request</button></li>
            <li><button type="button"  onclick="showhide1();" name="btn" ><i style="padding-right:10px;"class="fas fa-map-pin"></i></button></li>
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
            

            <div id="search"  >
              <form action="search.php" method="post">
                <input type="text" placeholder="enter book name" style="width:30% " name="bname" required>
                <button type="submit" name="search">search</button>
              </form>
              
              <div class="searchresults" style="margin-top: 15px;">
                  
                <?php
              $con=mysqli_connect('localhost','root',"","library");
              if(!$con)
              {
                echo "db not connected";
              }
              
              if(isset($_POST['search']) && isset($_POST['bname']))
              {
                $b=$_POST['bname'];
                $s="select * from book where title='$b'";
              }
              else if(!isset($_POST['bname']))
              $s="select * from book";
              else
              $s="select * from book";
              $query=mysqli_query($con,$s);
              while($row=mysqli_fetch_assoc($query))
              {
              ?>
              <div class="column">
                
                  <div class="card" style=" padding:10px;">
                  <div class="image">
                  <img style="width: 100%; height:100%" src="data:image/jpeg;base64,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">
                  </div>
                    
                    <div class="bdetails">
                      <centre>
                        <p><b>Bookid: </b><?php echo $row['book_id'];?></p>
                        
                        <p><b>Title: </b><?php echo $row['title'];?></p>
                       
                        <p><b>Author: </b><?php echo $row['author'];?></p>
                        
                        <p><b>Publisher: </b><?php echo $row['publisher'];?></p>
                       
                        <p><b>Copies: </b><?php echo $row['copies'];?></p>
                      <centre><button type="button">Book</button></centre>
                    </centre>

                        </div>

                        
                    </div>
                  </div>
                
                  

              <?php
              }
              ?>
               
                
              </div>
            </div>
            
          <script>
      
    </script>
        </div>
       
    </div>
    
    
    
</div>
  </body>
</html>
