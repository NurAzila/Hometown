<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: Login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: Login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Hometown ~ MELAKA 💖</title>
    <link rel="stylesheet" href="Style.css"/> <link rel="icon" href="images/R.png" type="image/gif">
    <style>
      textarea{resize: none;}
    </style>
  </head>

  <font face="cambria" color="#D1633C" size="5">
    <marquee behavior="scroll" direction="left" scrollamount="10"
      ><b><i>~ THERE'S NO PLACE LIKE HOMETOWN :) ~</i></b></marquee
    >
  </font>

  <body>
    <table height="250" align="center">
      <tr>
        <td align="center" width="240" height="50">
          <a href="Hometown.html" title="HOME">
            <button
              class="button"
              style="
                background-color: brown;
                color: burlywood;
              "
            >
              <b><big>HOME</big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
          <a href="#history" title="HISTORY">
            <button
              class="button"
              style="
                background-color: brown;
                color: burlywood;
              "
            >
              <b><big>HISTORY</big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
          <a href="#gallery" title="GALLERY">
            <button
              class="button"
              style="
                background-color: brown;
                color: burlywood;
              "
            >
              <b><big>GALLERY</big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
          <a href="#aboutme" title="ABOUTME">
            <button
              class="button"
              style="
                background-color: brown;
                color: burlywood;
              "
            >
              <b><big>ABOUT ME</big></b>
            </button>
          </a>
        </td>

        <td align="center" width="240" height="50">
          <a href="#contactme" title="CONTACTME">
            <button
              class="button"
              style="
                background-color: brown;
                color: burlywood;
              "
            >
              <b><big>CONTACT ME</big></b>
            </button>
          </a>
        </td>
      </tr>

      <tr>
        <td colspan="10">
          <p align="center">
                <font face="cambria" color="#E69138" size="5">
                    <big><big><big><big><big><b>WELCOME TO MY HOMETOWN</b></big></big></big></big></big>
                </font>
          </p>
        </td>
      </tr>
    </table><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    <!--HISTORY-->
    <div id="history">
        <table width="1200" align="center" bgcolor="#B8860B">
            <tr>
                <td>
                    <center>
                        <p style="background-color:darkgoldenrod;color:blanchedalmond;">
                        <big><big><big><big><big><b>HISTORY</b></big></big></big></big></big></p>
                    </center>
                </td>
            </tr>
        </table>
        <table style="border-radius: 50px;" width="1200" align="center" bgcolor="#EEEEEE">
        <tr>
            <td width="100"></td>
            <td>
                <p style="color:#783f04">
                    <big><big><b>HISTORY OF MELAKA</b></big></big>
                </br>
                </br>
                <big><i>It was in the fourteenth century that the fishing village of Melaka gained 
                  the attention a Hindu prince named Parameswara from Sumatra. 
                  The ruler decided to make this place a permanent settlement and named it ‘Melaka’ 
                  after a tree. Melaka served as the perfect platform on which the Dutch, Portuguese 
                  and English played their roles towards shaping the history of this beautiful place. 
                  The strategic location of Melaka made it a popular trading centre with merchants and ships 
                  arriving from India, Japan, China, South Africa and Arab. The red Christ Church which is a 
                  prominent feature of Melaka city was built with pink bricks that were imported from Holland. 
                  Local red lacerite was then used to give the structure that red appearance. 
                  The European presence is constantly reminded by some of the famous structures 
                  like the St. Paul’s Church and A Famosa.</big></i>
                </p>
            </td>
            <td align="center" width="750"><img src="images/FAMOUS.jpg" width="700" style="border-radius: 50px;"></td>
        </tr>
        </table>
    </div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <!--GALLERY-->
    <div id="gallery">
        <table width="1200" align="center" bgcolor="#CE7E00">
            <tr>
                <td>
                    <center>
                        <p style="background-color:#CE7E00;color:peachpuff;">
                        <big><big><big><big><big><b>GALLERY</b></big></big></big></big></big></p>
                    </center>
                </td>
            </tr>
        </table>
        <table style="border-collapse: collapse;border-radius: 30px;" width="1200" align="center" bgcolor="EEEEEE">
        <tr>
            <th align="center"><img src="images/BECA.jpg" width="350" style="border-radius: 50px;"></th>
            <th align="center"><img src="images/PALACE.jpg" width="430" style="border-radius: 50px;"></th>
            <th align="center"><img src="images/RED.jpg" width="420" style="border-radius: 50px;"></th>
        </tr>
        <tr>
          <td><p align="center" style="color:#783f04"><b><i>Di Melaka, beca merupakan kenderaan beroda tiga yang berasal dari lanca.
            Beca ini mempunyai pengayuh di sebelah sisi penumpang. 
            Terdapat juga model beca dengan pengayuh di belakang atau di hadapan penumpang. 
            Bumbung  juga dipasang bagi memberi teduhan kepada penumpang.</i></b></p></td>
          <td><p align="center" style="color:#783f04"><i>Istana Kesultanan Melaka (replika Istana Kesultanan Melayu Melaka) 
            terletak di atas Bukit St. Paul. Replika Istana ini dibina semula berdasarkan catatan Sejarah Melayu 
            yang menggambarkan keunikan seni bina Istana Melayu di zaman Sultan Mansur Shah yang memerintah 
            dari tahun 1456 hingga 1477.</i></p></td>
          <td><p align="center" style="color:#783f04"><b><i>Gereja Christ yang berwarna merah ini terletak bersebelahan dengan 
            Pejabat Pos Jalan Laksamana dan Muzium Belia Malaysia di Melaka, Malaysia.Gereja ini dibina sekitar 
            tahun 1753 pada tempat yang sama.Gereja ini merupakan testimoni kepada seni rekabentuk 
            Belanda yang tulen. Di sini dapat diperhatikan bangku gereja yang buatan tangan, siling 
            cahaya matahari yang dibina tanpa penyambung, kitab Injil tembaga, batu nisan yang ditulis 
            dalam bahasa Armenia dan lukisan yang menggambarkan Santapan Terakhir Yesus pada jubin yang bersinar.</i></b></p></td>
        </tr>
        </table>
    </div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <!--ABOUT ME-->
    <div id="aboutme">
        <table width="1200" align="center" bgcolor="#CD853F">
            <tr>
                <td>
                    <center>
                        <p style="background-color:peru;color:palegoldenrod;">
                        <big><big><big><big><big><b>ABOUT ME</b></big></big></big></big></big></p>
                    </center>
                </td>
            </tr>
        </table>
        <table style="border-radius: 50px;" align="center" bgcolor="#EEEEEE">
        <tr>
            <td><img src="images/ME.jpg" width="700" style="border-radius: 50px;"></td>
            <td align="center" width="500">
                <p style="color:#744700">
                    <big><big><b>MY FAMILY</b></big></big>
                </br>
                </br>
                <big>I am Nur Azila Binti Muhammad.<br>
                    Matric number 1190507.<br>
                    <br>Email: azilamuhammad7127@gmail.com<br>
                    Instagram: nur_azila_<br>
                    Phone number: 017-7828310
                </big>
                </p>
            </td>
        </tr>
        </table>
    </div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <!--CONTACT ME-->
    <div id="contactme">
        <table width="1200" align="center" bgcolor="#7f6000">
            <tr>
                <td>
                    <center>
                        <p style="background-color: #7f6000;color: papayawhip;">
                        <big><big><big><big><big><b>CONTACT ME</b></big></big></big></big></big></p>
                    </center>
                </td>
            </tr>
        </table>
        <table style="border-radius: 30px;" width="1200" height="300" align="center" bgcolor="#EEEEEE">
            <tr>
                <td width="300"></td>
                <td>
                    <form>
                        <p align="left">Username</p>
                        <input type="text"></br>
                        <p align="left">Email</p>
                        <input type="email"></br></br></br>
                        <input type="submit">
                    </form>
                </td>
                <td align="center">
                    <textarea rows="15" cols="50">
                    </textarea>
                </td>
                <td width="300"></td>
            </tr>
        </table>
    </div>
<br /><br /><br /><br /><br />

    <!--FOOTER-->
    <hr>
    <table width="1200" align="center">
        <tr>
          <td align="center" width="300">
            <a href="#history" title="HISTORY">
              <button
                class="button"
                style="
                  background-color: brown;
                  color: burlywood;
                "
              >
                <b><big>HISTORY</big></b>
              </button>
            </a>
          </td>
  
          <td align="center" width="300">
            <a href="#gallery" title="GALLERY">
              <button
                class="button"
                style="
                  background-color: brown;
                  color: burlywood;
                "
              >
                <b><big>GALLERY</big></b>
              </button>
            </a>
          </td>
  
          <td align="center" width="300">
            <a href="#aboutme" title="ABOUTME">
              <button
                class="button"
                style="
                  background-color: brown;
                  color: burlywood;
                "
              >
                <b><big>ABOUT ME</big></b>
              </button>
            </a>
          </td>
  
          <td align="center" width="300">
            <a href="#contactme" title="CONTACTME">
              <button
                class="button"
                style="
                  background-color: brown;
                  color: burlywood;
                "
              >
                <b><big>CONTACT ME</big></b>
              </button>
            </a>
          </td>
        </tr>
    </table>
    
    <div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: peachpuff;">Welcome <strong style="color: peachpuff;"><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="Hometown.php?logout='1'" style="color: rosybrown;">LOGOUT</a> </p>
    <?php endif ?>
</div>

</body>
</html>