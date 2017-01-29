<?php

  $cnx = mysqli_connect("localhost", "root", "root", "DUTIROIR") or die("error".mysqli_connect_errno());
  $res = mysqli_query($cnx, "SELECT * FROM parameters ORDER BY id DESC LIMIT 1");
  $data = mysqli_fetch_assoc($res);

  // var_dump($data);
  // echo "<br><br>";

  header('content-type: text/css');
  ob_start('ob_gzhandler');
  header('Cache-Control: max-age=31536000, must-revalidate');

?>
/* --------------------- Global --------------------- */
html,body {
    height: 100%;
}

body {
    padding-top: 50px;
}

/* -------------- Visuel du site web --------------- */
/* ----- TitleColor ----- */
h1, h2, h3, h4, h5, h6, th, #li{
  color: <?php echo $data['titleColor']; ?>;
}

/* ----- NavColor ----- */
nav, .onglet, th{
  background-color: <?php echo $data['navColor']; ?>;
}

/* ----- LienColor ----- */
a, input{
  color: <?php echo $data['lienColor']; ?>;
}

/* ----- ButtonColor ----- */
.btn{
  background-color: <?php echo $data['btnColor']; ?>;
  border-style: none;
}

/* ----- Police ----- */
h1, h2, h3, h4, h5, h6, p, a, input, textarea, table, li, .btn{
  font-family: <?php echo $data['police']; ?>;
}

.navbar{
  border-style: none;
}


/* --------------------- Home --------------------- */
header.carousel {
    height: 70%;
}

header.carousel .item,
header.carousel .item.active,
header.carousel .carousel-inner {
    height: 100%;
}

header.carousel .fill {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
}


/* --------------------- Repertory --------------------- */
.img-portfolio {
    margin-bottom: 30px;
}

.img-hover:hover {
    opacity: 0.8;
}

.portfolio-item{
    height: 250px;
    margin-bottom: 30px;
    overflow: hidden;
}


/* --------------------- Contact --------------------- */
form textarea{
    height: 200px;
}

thead{
    background: #333;
    color: #fff;
}
/* --------------------- Footer --------------------- */
footer {
    margin: 50px 0;
}


/* --------------------- Responsive  --------------------- */
@media(max-width:991px) {
    .customer-img,
    .img-related {
        margin-bottom: 30px;
    }
}

@media(max-width:767px) {
    .img-portfolio {
        margin-bottom: 15px;
    }

    header.carousel .carousel {
        height: 70%;
    }
}

/* --------------------- Administration --------------------- */
#home{
  display: block;
}

.koliko{
  height: 80vh;
  display: none;
}

.onglet{
  height:120vh;
  padding-top: 10px;
  padding-bottom: 10px;
  border: 0px 1px 1px 0px solid black;
  background-color: rgba(0, 0, 0, 0.85);
}

.nav-pills a{
  color: white;
}

.nav-pills a:hover{
  color: rgba(0, 0, 0, 0.85);
}

/* ----- Personnalisation du visuel ----- */
.parametres{
  padding: 20px;
  background-color: rgb(239, 239, 239);
  border-radius: 20px;
}

.submit{
  width: 80%;
}

/* ----- Réception des messages ----- */
table, th, td{
  padding: 5px 5px 5px 5px;
  border: 1px solid black;
}
