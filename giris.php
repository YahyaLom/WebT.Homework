<?php


$gecici=$_POST['mail'];
$message = "HoşGeldin $gecici --> Tamam tuşuna basınca ana sayfaya yönlendirileceksiniz...";

if(!($_POST['mail']==""))
{
    if($_POST['mail']=="g201210012@sakarya.edu.tr" )
    {
       
        if(!($_POST['sifre']=="admin"))
        {
            echo "sifre  yanlış";
            echo "<p> <a href='Index.html'>&lt;GERİ DÖN&gt;</a></p> ";
        }
        else{
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Refresh: 0.1; url=https://yahyalom.github.io/WebT.Homework/indexBootstrap.html"); 
            
            exit();
        }
    }
    else{
        echo "e posta veya şifre hatalı";
        echo "<p> <a href='Index.html'>&lt;GERİ DÖN&gt;</a></p> ";
    }

}else
{
    echo "değerleri doldurun";
}



?>
