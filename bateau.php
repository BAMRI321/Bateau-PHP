<?php
$bateau = array("Manureva"=>array("Equipages "=>3,"Passagers "=>4), 
                "Sirius"=>("Equipages "=>4,"Passagers "=>6),
                "Sorcouf"=>"Equipages "=>8,"Passagers "=>15
);
foreach($bateau as $Nombateau =>$info)
{
    if($info[Passagers]>10)
    {
        echo $Nombateau;
    }
}

?>