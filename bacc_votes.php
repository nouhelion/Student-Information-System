<?php
require_once('db.php');
if($link){
    //FOR SVT
    $SVT="Sciences de la Vie et de la Terre";
    $sql="SELECT serie_bacc, COUNT(*) as total
    FROM students
     where serie_bacc='$SVT'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $SVT=$values['total'];
       $sql="UPDATE series 
       SET 
           nbr = '$SVT'
       WHERE
           nom = 'Sciences de la Vie et de la Terre'";
   mysqli_query($link, $sql);
   //FOR SPC
   $SPC="Sciences Physiques et Chimiques";
    $sql="SELECT serie_bacc, COUNT(*) as total
    FROM students
     where serie_bacc='$SPC'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $SPC=$values['total'];
       $sql="UPDATE series 
       SET 
           nbr = '$SPC'
       WHERE
           nom = 'Sciences Physiques et Chimiques'";
   mysqli_query($link, $sql);
   //FOR SMA 
   $SMA="Sciences Maths A";
   $sql="SELECT serie_bacc, COUNT(*) as total
   FROM students
    where serie_bacc='$SMA'";
   $result = mysqli_query($link,$sql);
   $values=mysqli_fetch_assoc($result);
   $SMA=$values['total'];
      $sql="UPDATE series 
      SET 
          nbr = '$SMA'
      WHERE
          nom = 'Sciences Maths A'";
  mysqli_query($link, $sql);
   //FOR SMB
   $SMB="Sciences Maths B";
   $sql="SELECT serie_bacc, COUNT(*) as total
   FROM students
    where serie_bacc='$SMB'";
   $result = mysqli_query($link,$sql);
   $values=mysqli_fetch_assoc($result);
   $SMB=$values['total'];
      $sql="UPDATE series 
      SET 
          nbr = '$SMB'
      WHERE
          nom = 'Sciences Maths B'";
  mysqli_query($link, $sql);
   //FOR SE 
   $SE="Sciences Economiques";
   $sql="SELECT serie_bacc, COUNT(*) as total
   FROM students
    where serie_bacc='$SE'";
   $result = mysqli_query($link,$sql);
   $values=mysqli_fetch_assoc($result);
   $SE=$values['total'];
      $sql="UPDATE series 
      SET 
          nbr = '$SE'
      WHERE
          nom = 'Sciences Economiques'";
  mysqli_query($link, $sql);
  //FOR TGC 
  $TGC="Techniques de Gestion et de Comptabilité";
  $sql="SELECT serie_bacc, COUNT(*) as total
  FROM students
   where serie_bacc='$TGC'";
  $result = mysqli_query($link,$sql);
  $values=mysqli_fetch_assoc($result);
  $TGC=$values['total'];
     $sql="UPDATE series 
     SET 
         nbr = '$TGC'
     WHERE
         nom = 'Techniques de Gestion et de Comptabilité'";
 mysqli_query($link, $sql);
//FOR STE 
$STE="Sciences et Technologies Electriques";
$sql="SELECT serie_bacc, COUNT(*) as total
FROM students
 where serie_bacc='$STE'";
$result = mysqli_query($link,$sql);
$values=mysqli_fetch_assoc($result);
$STE=$values['total'];
   $sql="UPDATE series 
   SET 
       nbr = '$STE'
   WHERE
       nom = 'Sciences et Technologies Electriques'";
mysqli_query($link, $sql);
//FOR STM 
$STM="Sciences et Technologies Mécaniques";
$sql="SELECT serie_bacc, COUNT(*) as total
FROM students
 where serie_bacc='$STM'";
$result = mysqli_query($link,$sql);
$values=mysqli_fetch_assoc($result);
$STM=$values['total'];
   $sql="UPDATE series 
   SET 
       nbr = '$STM'
   WHERE
       nom = 'Sciences et Technologies Mécaniques'";
mysqli_query($link, $sql);
    }
?>