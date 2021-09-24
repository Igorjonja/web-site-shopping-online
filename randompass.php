<?php
//input data
if(isset($_POST['num_of_symbols'])){
    $numOfSymbol=intval($_POST["num_of_symbols"]);
}

//echo "<br>"."Input numbers of
// symbol: ";//TEST
// echo "<br>".var_dump($_POST["num_of_symbols"])."</br>";//TEST input data

if(isset($_POST['numberNo10'])){
    $case1=$_POST["numberNo10"];
}else{
    $case1=false;
  }


if(isset($_POST['Bletters'])){
    $case2=$_POST["Bletters"];
}else{
    $case2=false;
  }



if(isset($_POST['Sletters'])){
    $case3=$_POST["Sletters"];
  }else{
    $case3=false;
  }




function gernerate_pass($case1, $case2, $case3,$numOfSymbol){
    $caseNumbers = "0123456789";
    $caseBigLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $caseSmallLetters = "abcdefghijklmnopqrstuvwxyz";
    $keySpace="";
    $pattern="";
    $replacement="";
    $characters = "";
    $condition = [$case1, $case2, $case3];


    if($condition[0]=="true"){$pattern.="01"; $keySpace.=$caseNumbers;}
    if($condition[1]=="true"){$pattern.="Oo"; $keySpace.=$caseBigLetters;}
    if($condition[2]=="true"){$pattern.="l"; $keySpace.=$caseSmallLetters;}
//    var_dump("/[".$pattern."]/");
    $keySpace=preg_replace("/".$pattern."/","",$keySpace);
    $input_length=strlen($keySpace); // kolihestvo simvolov

// var_dump($keySpace);


    if($input_length>=$numOfSymbol){          //key space length should be greater then input numbers

        for ($i = 0; $i < $numOfSymbol;) { // characters counter

            $random_character = $keySpace[random_int(0, $input_length-1)];

            if (strpos($characters, $random_character) === false) { //same symbol searching

                if ($condition[0] === 'true' & $random_character !== "0" & $random_character !== "1")//Numbers without 0 and 1
                {
                    $characters .= $random_character;
                    $i++;

                } elseif($condition[1] === 'true' & $random_character !== "o" & $random_character !== "O") //Big letters without o and O
                {
                    $characters .= $random_character;
                    $i++;
                }

                elseif($condition[2] === 'true' & $random_character != "l") //Small letters without l
                {
                    $characters .= $random_character;
                    $i++;
                }
            }

        }
        echo"password : ".$characters;
    }else{echo"Please select more cases or insert more characters";}

}
if(isset($_POST['num_of_symbols'])){
    gernerate_pass($case1, $case2, $case3, $numOfSymbol);
}


?>