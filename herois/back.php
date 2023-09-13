<?php
$universo = $_POST["universo"];
$heroi = $_POST["heroi"];
$x = 5;

if($universo == "marvel"){
    if($heroi == "hulk"){
        for($x=1; $x<=5; $x++){
            echo  "<img src='imgs/hulk.jpg' width='250px'>";
        }
    }

    else if($heroi == "thor"){
        for($x=1;$x<=5;$x++){
            echo  "<img src='imgs/thor.webp' width='250px'>";
        } 
    }
    else if($heroi == "homem-aranha"){
        for($x=1; $x<=5; $x++){
            echo "<img src='imgs/ha.jpg' width='250px'>" ;
        } 
    }
    else if($heroi == "homem de ferro"){
        for($x=1; $x<=5; $x++){
            echo "<img src='imgs/ferro.jpg' width='250px'>" ;
        } 
    }
    else if($heroi == "capitao américa"){
        for($x=1; $x<=5; $x++){
            echo "<img src='imgs/ca.webp' width='250px'>" ;
        } 
    }
}
else if($universo == "DC" ){
        if($heroi == "super homem"){
            for($x=1; $x<=5; $x++){
                echo "<img src='imgs/sh.webp' width='250px'>" ;
            } 
        }
        else if($heroi == "mulher maravilha"){
            for($x=1; $x<=5; $x++){
                echo "<img src='imgs/mm.webp' width='250px'>" ;
            } 
        }
        else if($heroi == "batman"){
            for($x=1; $x<=5; $x++){
                echo "<img src='imgs/bat.jpg' width='250px'>" ;
            } 
        }
        else if($heroi == "lanterna verde"){
            for($x=1; $x<=5; $x++){
                echo "<img src='imgs/verde.jpg' width='250px'>" ;
            } 
        }
        else if($heroi == "aquaman"){
            for($x=1; $x<=5; $x++){
                echo "<img src='imgs/aqua.jpg' width='250px'>" ;
            } 
        }
        else
        {
            echo "Universo inexistente!";
        }
    
}
?>