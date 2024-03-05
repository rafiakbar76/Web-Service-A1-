<?php
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml";
$result= new SimpleXMLElement($url,null,true);
//echo "<pre>";print_r($result);
echo "<h2>Wilayah Dirasakan</h2>";
$tmp="<table border='1'>";
$tmp.="<tr><td><b>Tanggal</b></td><td><b>Informasi</b></td>";
$tmp.="<tr><td><b>Nama : Mohammad Rafi Akbar Putra</br>Nim : 1221184</b></td</tr>";
for($i=0;$i<count($result->gempa);$i++){
    $tmp.="<tr><td>{$result->gempa[$i]->Tanggal}</td>
     <td><b>Pukul :{$result->gempa[$i]->Jam}</b></br>
     <b>DateTime :{$result->gempa[$i]->DateTime}</b></br>
     <b>Koordinat :{$result->gempa[$i]->point->coordinates}</b></br>
     <b>Lintang :{$result->gempa[$i]->Lintang}</b></br>
     <b>Bujur :{$result->gempa[$i]->Bujur}</b></br>
     <b>Magnitudo :{$result->gempa[$i]->Magnitude}</b></br>
     <b>Kedalaman :{$result->gempa[$i]->Kedalaman}</b></br>
     <b>Wilayah :{$result->gempa[$i]->Wilayah}</b></br>
     <b>Dirasakan :{$result->gempa[$i]->Dirasakan}</b></br></td>";

  }
$tmp.="</table>";
echo $tmp; 
?>