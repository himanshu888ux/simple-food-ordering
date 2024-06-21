<?php
// Start the session if it hasn't been started already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<head>
        <style>
        body{
        overflow-x: hidden;
            font-size: 100%;
            font-family:  'Poppins', sans-serif;
                }
/* hero section */
#hero{
    position: relative;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
#hero::before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(project/images/hero.jpeg);
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat ;
    background-attachment: fixed;
    filter: brightness(50%);
}
#hero_content{
    position:absolute;
}
#hero_content h1{
    font-size: 2.8rem;
    color:white;
    text-shadow: 2px 2px 2px #000;
}
 
#hero_content h2{
    font-size: 2rem;
    color:white;
    font-family: cursive;
    margin-top: 1rem;
    margin-bottom: 4rem;
}
#hero_content a{
    color:white;
    padding: 3px 20px 3px 20px;
    border: 1px solid orange;
    background: rgb(0, 0, 0, 0.6);
    font-size: 1.5rem;
    text-decoration: none;
    border-radius: 25px;
}
#hero_content a:hover{
    background: navy;
}
/* ------------------------------------- */
/* Header section */
#Header{
    position: fixed;
    top: 0;
    width: 100vw;
    height: 70px;
    line-height: 70px;
}
#navbar{
    display: flex;
    justify-content: space-around;
    background-color: rgb(0, 0, 0, 0.5);  
}
#navbar h1{
    color:orange;
    font-size: 1.8rem;
    text-shadow: 2px 2px 2px #000;
    font-family: cursive;
}
#navbar ul{
    display: flex;
}
#navbar ul li{
    list-style: none;
    padding: 3px 15px 3px 15px;
}
#navbar ul li :hover,#Phone a:hover,#menu ul li:hover{
    background: navy;
    cursor: pointer;
}
#navbar ul li a{
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
}
#Phone a{
    text-decoration: none;
    color: white;
    font-size: 1.1rem;
    padding: 3px 15px 3px 15px ;
    border: 1px solid orange;
}
/* Menu section */
#Menu{
    padding: 25px 0 25px 0;
}
#section{
    padding: 25px 0 25px 0;
    text-align: center;
    font-size: 2rem;
    font-family: Verdana;
}
#Menu_row{
    display: flex;
    padding: 0 100px 0 100px;
}
#Menu_col{
    box-shadow: 2px 2px 2px #bbb;
    border: 1px solid  #bbb;
    background-color: #f5f5f5;
    margin: 10px;
    padding: 10px;
    flex: 1;
}
#Menu_col h2{
    background-color: #dc3545;
    color: white;
    text-align: center;
    padding: 10px;
    font-family: cursive;
    margin-top: 0;
}
#image{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    padding: 5px;
    border: 2px solid orange;
    margin: 0 auto;
}
#image img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}
.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin: 5px;
}
/* Add to Cart button */
button[name="add_to_cart"] {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
button[name="add_to_cart"]:hover {
    background-color: #218838;
}
/* Chef section Begin*/
#Chef{
    padding: 25px 0 25px 0;
}
#Chef_row{
    display:flex;
    justify-content: center;
    background-color: darkred;
}
.Chef_col{
    text-align: center;
    padding: 10px;
    margin: 5px;
    background-color: aqua;
}
#img{
    width: 200px;
    height: 250px;
    margin: auto;
}
#img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Chef section end*/
/* About section begin */
#About{
    padding: 25px 0 25px 0;
}
#About_row{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 0 100px 0 100px;
    background-color: crimson;
}
.About_col{
    flex: 1;
}
#About_img{
    width: 300px;
    height: 300px;
    border-radius: 50%;
    margin: auto;
}
#About_img img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: fill;
}
.About_col h1{
    text-align: center;
    font-family: cursive;
    background-color: darkcyan;
}
.About_col p{
    text-align: justify;
    font-weight: bold;
}
/* About section end */
/* Contact section begin */
#Contact{
    padding: 25px 0 25px 0;
    background-color: darkgoldenrod;
}
#Contact_row{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 100px 0 100px;
    flex-wrap: wrap;
}
.Contact_col{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
}
.Contact_col p,h3{
    font-weight: bold;
    color: #000;
    margin: 10px;
}
.Contact_col p a{
    text-decoration: none;
    color: #000;
}
.Contact_col form{
    display: flex;
    flex-direction: column;
    background-color: fuchsia;
    width: 70%;
    padding: 20px 40px 20px 20px;
}
.Contact_col form h2{
    text-align: center;
    font-family: cursive;
}
.Contact_col form input{
    width: 100%;
    height: 17pt;
    padding: 5px;
}
.Contact_col form button{
    margin: auto;
    padding: 10px;
    color: navy;
    background-color:orange;
    border: 1px soli  orange;
    cursor: pointer;
}
/* Contact section end */
/* Footer section begin */
#Footer{
    background-color: black;
    padding: 20px;
    position: relative;
}





/* Footer section end */


        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
   <!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>The Heaven Restaurant</title>
</head>
<body>
<!-- hero section begin -->
   
<!-- hero section end -->
<!-- Header section begin -->
<div id="Header">
    <nav id="navbar">
        <h1>The Heaven Restaurant</h1>
       <ul>
       <li><a href="webpage.php"> Home</a></li>
       <li><a href="#Menu"> Menu</a></li>
       <li><a href="#Chef"> Cheaf</a></li>
       <li><a href="#About"> About</a></li>
       <li><a href="#Contact"> Contact</a></li>
       <li><a href="feedback.php"> Feedback</a></li>
       <li><a href="cart.php"> Cart</a></li>
       <?php  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "<li class='text-light' style='font-size: 1.1rem;'><i class='fa fa-user' style='margin-right:10px'></i>". $_SESSION['username']."</li>";           
    echo "<li><a href='logout.php' style='font-size: 1.1rem;'> Logout</a></li>";
       } else {        
           echo '<li><a href="login.php"> Login</a></li>';       
       }
       ?>
       </ul>
       <div id="Phone">
        <a href="tel:+842188545">+8421885454</a>
       </div>
   </nav>
</div>