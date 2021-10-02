<?php
require_once('db.php');
if($link){
    //FOR AA
    $AA="Aéronautique et astronautique";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$AA'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $AA=$values['total'];
       $sql="UPDATE filieres 
       SET 
           nbr = '$AA'
       WHERE
           nom = 'Aéronautique et astronautique'";
   mysqli_query($link, $sql);
    //FOR GB
    $GB="Génie Biologique";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$GB'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $GB=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$GB'
    WHERE
        nom = 'Génie Biologique'";
mysqli_query($link, $sql);
    //FOR IC
    $IC="Ingénieur Chimiste";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$IC'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $IC=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$IC'
    WHERE
        nom = 'Ingénieur Chimiste'";
mysqli_query($link, $sql);
    //FOR GCE
    $GCE="Génie Civil et Environnemental";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$GCE'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $GCE=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$GCE'
    WHERE
        nom = 'Génie Civil et Environnemental'";
mysqli_query($link, $sql);
    //FIR DSS
    $DSS="Données, Systèmes et Société";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$DSS'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $DSS=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$DSS'
    WHERE
        nom = 'Données, Systèmes et Société'";
mysqli_query($link, $sql);
    //FOR GEI
    $GEI="Génie Électrique et Informatique";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$GEI'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $GEI=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$GEI'
    WHERE
        nom = 'Génie Électrique et Informatique'";
mysqli_query($link, $sql);
    // FOR SGM 
    $SGM="Science et Génie des Matériaux";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$SGM'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $SGM=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$SGM'
    WHERE
        nom = 'Science et Génie des Matériaux'";
mysqli_query($link, $sql);
    //FOR GM 
    $GM="Génie Mécanique";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$GM'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $GM=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$GM'
    WHERE
        nom = 'Génie Mécanique'";
mysqli_query($link, $sql);  
    //FOR GMS 
    $GMS="Génie Médical et Science";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$GMS'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $GMS=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$GMS'
    WHERE
        nom = 'Génie Médical et Science'";
mysqli_query($link, $sql); 
    //FOR SGN
    $SGN="Science et Génie Nucléaires";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$SGN'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $SGN=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$SGN'
    WHERE
        nom = 'Science et Génie Nucléaires'";
mysqli_query($link, $sql); 
    //FOR ASM 
    $ASM="Arts et Sciences Médiatiques";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$ASM'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $ASM=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$ASM'
    WHERE
        nom = 'Arts et Sciences Médiatiques'";
mysqli_query($link, $sql); 
    //FOR EPU 
    $EPU="Etudes et Planification Urbaines";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$EPU'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $EPU=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$EPU'
    WHERE
        nom = 'Etudes et Planification Urbaines'";
mysqli_query($link, $sql); 
    //FOR M
    $M="Management";
    $sql="SELECT filiere, COUNT(*) as total
    FROM students
     where filiere='$M'";
    $result = mysqli_query($link,$sql);
    $values=mysqli_fetch_assoc($result);
    $M=$values['total'];
    $sql="UPDATE filieres 
    SET 
        nbr = '$M'
    WHERE
        nom = 'Management'";
mysqli_query($link, $sql);


    }


?>