<?php
$connect = new PDO('mysql:host=localhost;dbname=telecom','root','');
function get_surname($i){
    $surname_tables=[
        'Axel',
        'Arthur',
        'Evan',
        'Adrien',
        'Alexis',
        'Antoine',
        'Adam',
        'Alexandre',
        'Baptiste',
        'Enzo',
        'Julien',
        'Leo',
        'Lucas',
        'Matteo',
        'Mael',
        'Maxime',
        'Gabriel',
        'Raphael',
        'Pierre',
        'Quentin',
        'Hugo',
        'Romain',
        'Theo',
        'Tom',
        'Jules',
        'Nicolas',
        'Louis',
        'Mathis',
        'Nathan',
        'Paul',
        'Valentin',
        'Ethan',
        'Kylian',
        'Matheo',
        'Aaron',
        'Antonin',
        'Anthony',
        'Ayoub',
        'Bastien',
        'Alan',
        'Aymeric',
        'Bryan',
        'Charles',
        'Elias',
        'Dorian',
        'Dylan',
        'Alex',
        'Augustin',
        'Alban',
        'Aurelien',
        'Benjamin',
        'Arnaud',
        'Gael',
        'Gabin',
        'Florian',
        'Corentin',
        'Jean',
        'Jeremy',
        'Diego',
        'Emilien',
        'Esteban',
        'David',
        'Etienne',
        'Damien',
        'Erwan',
        'Lukas',
        'Loic',
        'Lorenzo',
        'Mathias',
        'Matthieu',
        'Gaetan',
        'Gaspard',
        'Morgan',
        'Rafael',
        'Kilian',
        'Samuel',
        'Simon',
        'Kevin',
        'Sacha',
        'Tristan',
        'Victor',
        'Jordan',
        'Killian',
        'Marius',
        'Vincent',
        'Martin',
        'Yann',
        'Mateo',
        'William',
        'Luca',
        'Remi',
        'Oscar',
        'Robin',
        'Noe',
        'Tony',
        'Tiago',
        'Thibaut',
        'Bilal',
        'Thibault',
        'Eliot','Elouan',
        'Ilan','Eliott','Julian','Ky','llianEwan','Luka',
        'Ilyes',
        'Jonathan','Mathys',
        'Mohamed',
        'Matis',
        'Malo',
        'Kenzo',
        'Nassim',
        'Nolan',
        'Lilian',
        'Mehdi',
        'Melvin',
        'Mathieu',
        'Timothe',
        'Timeo',
        'Ryan',
        'Younes',
        'Titouan',
        'Ruben',
        'Timothee',
        'Yannis',
        'Yassine',
        'Abbas',
        'Aime',
        'Albert',
        'Ambroise',
        'Armand',
        'Aubry',
        'Baptistin',
        'Basile',
        'Ben',
        'Bernard',
        'Boris',
        'Alberto',
        'Amaury',
        'Anthelme',
        'Anzo',
        'Arsene',
        'Aymar',
        'Boniface',
        'Bryce',
        'Adrian',
        'Alberic',
        'Alfred',
        'Allan',
        'Amadeo',
        'Amalric',
        'Anicet',
        'Antoni',
        'Arnold',
        'Austin',
        'Bartholome',
        'Benito',
        'Bill',
        'Billy',
        'Brendan',
        'Alaric',
        'Aloys',
        'Anatole',
        'Antonio',
        'Aurele',
        'Balthazar',
        'Beranger',
        'Brice',
        'Bruce',
        'Celestin',
        'Clementin',
        'Clovis',
        'Constant',
        'Cyril',
        'Dion',
        'Driss',
        'Eddy',
        'Edern',
        'Edwin',
        'Emil',
        'mile',
        'Eric',
        'Esteve',
        'Aimeric',
        'Aldo',
        'Andre',
        'Anton',
        'Ariel',
        'Artus',
        'Aubert',
        'Bachir',
        'Beryl',
        'Calixte',
        'Candide',
        'Carlos',
        'Casimir',
        'Caspar'
    ];
    return $surname_tables[$i];
}
function get_gouvernorat($i){
    $retour='';
    $tableau=[];
    $gouvernorats=[
        'Ariana',
        'Beja',
        'Ben Arous',
        'Bizerte',
        'Gabes',
        'Gafsa',
        'Jendouba',
        'Kairouan',
        'Kasserine',
        'Kebili',
        'Mahdia',
        'Médenine',
        'Monastir',
        'Nabeul',
        'Sfax',
        'Siliana',
        'Sousse',
        'Tataouine',
        'Tozeur',
        'Tunis',
        'Zaghouan'
    ];
    $gouverne=$gouvernorats[$i];
    if($gouverne=='Ariana'){
        $tableau=['Borj El Baccouche','Cité des Roses','Cité du Jardin','Cité du Printemps'];
    }else if ($gouverne=='Beja'){
       $tableau=
        ['Bir El Euch',
        'Cité Essanabel',
        'Cité El Kamh',
        'Cité El Hana'];
    }else if ($gouverne=='Ben Arous'){
        $tableau=['Cité Alyssa 1',
        'Cité Alyssa 2',
        'Cité Azza 1',
        'Cité Azza 2'];

    }else if ($gouverne=='Bizerte'){
        $tableau=['El Alia',
        'El Hariza',
        'Ezzitoune'];

    }else if ($gouverne=='Gabes'){
        $tableau=['Chatt Essalem',
        'Cité 26-26',
        'Cité Ben Kilani',
        'Cité Commerciale'];

    }else if ($gouverne=='Gafsa'){
        $tableau=['Cité Okba',
        'Cité Orbata Est',
        'Cité Orbata Ouest',
        'Cité Populaire'];

    }else if ($gouverne=='Jendouba'){
        $tableau=['Balta',
        'Bou Aouene'];

    }else if ($gouverne=='Kairouan'){
        $tableau=['El Alia',
        'El Aoudid',
        'Ezzorg','Haffouz','Khit El Oued'];

    }else if ($gouverne=='Kasserine'){
        $tableau=['Cekhirate',
        'Cité Cheab',
        'Cité du Battoire',
        'Cité El Izdihar',
        'Cité Hached'];
    }else if ($gouverne=='Kebili'){
        $tableau=['Cité 7 Novembre',
        'Cité Ben Hamroun',
        'Cité Commerciale',
        'Cité des Oasis',
        'Cité Douz Chargui'];
    }else if ($gouverne=='Mahdia'){
        $tableau=['El Achaba',
        'El Aitha',
        'El Jem',
        'El Mechelette'];
    }else if ($gouverne=='Médenine'){
        $tableau=['Cité Ben Issa',
        'Cité Bou Okkazine',
        'Cité de la Douane',
        'Cité de la Police',
        'Cité des Enseignants'];
    }else if ($gouverne=='Monastir'){
        $tableau=['Cité Commerciale 1',
       'Cité Commerciale 2',
        'Cité El Amen',
        'Cité El Bassatine1',
        'Cité El Bassatine2'];
    }else if ($gouverne=='Nabeul'){
        $tableau=[
        'Charaf',
        'Cité des Jeunes',
        'Cité des Rouines',
        'Cité El Amel',
        'Cité El Intilaka'
        ];
    }else if ($gouverne=='Sfax'){
        $tableau=[
            'Cité El Hmerna',
            'Cité Ezzayatine',
            'Cité Houma Charguia',
            'Cité Populaire 1',
            'Cité Populaire 2'
        ];

    }else if ($gouverne=='Siliana'){
        $tableau=[
            'Cité du Battoire',
            'Cité du Lycee',
            'Cité El Guebli',
            'Cité El Wafa',
            'Cité Ezzouhour 1'
        ];
    }else if ($gouverne=='Sousse'){
        $tableau=['Chatt Meriem',
        'Cité du Dispensaire',
        'Cité Ecole Superieure',
        'Cité Ejjamaa',
        'Halg El Menjel'];
    }else if ($gouverne=='Tataouine'){
        $tableau=['Cité 7 Novembre',
        'Cité du Bain Maure',
       'Cité El Aidi',
        'Cité El Amel',
        'Cité Ettadhamen'];
    }else if ($gouverne=='Tozeur'){
        $tableau=[
            'Ceddada',
            'Chakmou',
            'Cité de la Gare',
            'Cité du Stade',
            'Cité El Bassatine'
        ];
    }else if ($gouverne=='Tunis'){
        $tableau=['Cartage Byrsa',
        'Cartage Plage',
        'Carthage',
       ' Cité de la Steg',
        'Cité Mohamed Ali'];

    }else if ($gouverne=='Zaghouan'){
        $tableau=['Dghafla',
        'Douar El Haj Amor',
       ' El Hmira Sud',
        'El Khadhra',
        'Halg Ennab',
        'Henchir El Hamira'];
    }
    ;
    $aleatoire=rand(0,count($tableau)-1);
    return $gouverne.' '.$tableau[$aleatoire];
}
function get_names($i){
    $user_tables=[
        'MARTIN'
        ,'GAILLARD'
       ,'BARBIER'
       ,'ARNAUD',
       'Alexandre',
       'Baptiste',
       'Enzo',
       'Julien',
       'Leo',
       'Lucas',
       'Matteo',
       'Mael',
       'Maxime',
       'Gabriel',
       'Raphael',
       'Pierre',
       'Quentin',
       'Hugo',
       'Romain',
       'Theo',
       'Tom',
       'Jules',
       'Nicolas',
       'Louis',
       'Mathis',
       'Nathan',
       'Paul',
       'Valentin',
       'Ethan',
       'Kylian',
       'Matheo',
       'Aaron',
       'Antoni'
       ,'MARTINEZ'
       ,'GERARD'
       ,'ROCHE'
       ,'RENARD'
       ,'SCHMITT'
       ,'ROY'
        ,'LEROUX'
       ,'COLIN'
        ,'VIDAL'
        ,'CARON'
       ,'PICARD'
       ,'ROGER'
       ,'FABRE'
       ,'AUBERT'
        ,'LEMOINE'
        ,'RENAUD'
        ,'DUMAS'
        ,'LACROIX'
        ,'OLIVIER'
        ,'PHILIPPE'
        ,'BOURGEOIS'
        ,'PIERRE'
        ,'BENOIT'
        ,'REY'
        ,'LECLERC'
        ,'PAYET'
        ,'CARPENTIER'
        ,'SANCHEZ'
        ,'DUPUIS'
        ,'MOULIN'
        ,'LOUIS'
        ,'DESCHAMPS'
        ,'HUET'
        ,'VASSEUR'
        ,'PEREZ'
        ,'BOUCHER'
        ,'FLEURY'
        ,'ROYER'
        ,'KLEIN'
        ,'JACQUET'
        ,'ADAM'
        ,'PARIS'
        ,'POIRIER'
        ,'MARTY'
        ,'AUBRY'
        ,'GUYOT'
        ,'CARRE'
        ,'CHARLES'
        ,'RENAULT'
        ,'CHARPENTIER'
        ,'MENARD'
        ,'MAILLARD'
        ,'BARON'
        ,'BERTIN'  
        ,'BAILLY'
        ,'HERVE'
        ,'SCHNEIDER'
        ,'FERNANDEZ'
        ,'LE GALL'
        ,'COLLET'
        ,'LEGER'
        ,'BOUVIER'
        ,'JULIEN'
        ,'PREVOST'
        ,'MILLET'
        ,'PERROT'
        ,'DANIEL'
        ,'LE ROUX'
        ,'COUSIN'
        ,'GERMAIN'
        ,'BRETON'
        ,'BESSON'
        ,'LANGLOIS'
        ,'REMY'
        ,'LE GOFF'
        ,'PELLETIER'
        ,'LEVEQUE'
        ,'PERRIER'
        ,'LEBLANC'
        ,'BARRE'
        ,'LEBRUN'
        ,'MARCHAL'
       ,'WEBER'
        ,'MALLET'
        ,'HAMON'
        ,'BOULANGER'
        ,'JACOB'
        ,'MONNIER'
       ,'MICHAUD'
      ,'RODRIGUEZ'
      ,'GUICHARD'
       ,'GILLET'
        ,'ETIENNE'
        ,'GRONDIN'
      ,'POULAIN'
       ,'TESSIER'
        ,'CHEVALLIER'
        ,'COLLIN'
        ,'CHAUVIN'
      ,'DA SILVA'
      ,'BOUCHET'
       ,'GAY'
        ,'LEMAITRE'
        ,'BENARD'
        ,'MARECHAL'
        ,'HUMBERT'
        ,'REYNAUD'
        ,'ANTOINE'
        ,'HOARAU','PERRET',
        'BARTHELEMY',
        'CORDIER',
        'PICHON','LEJEUNE',
        'MARTIN'
        ,'GAILLARD'
       ,'BARBIER'
       ,'ARNAUD'
       ,'MARTINEZ'
       ,'GERARD'
       ,'ROCHE'
       ,'RENARD'
       ,'SCHMITT'
       ,'ROY'
        ,'LEROUX'
       ,'COLIN'
        ,'VIDAL'
        ,'CARON'
       ,'PICARD'
       ,'ROGER'
       ,'FABRE'
       ,'AUBERT'
        ,'LEMOINE'
        ,'RENAUD'
        ,'DUMAS'
        ,'LACROIX'
        ,'OLIVIER'
        ,'PHILIPPE'
        ,'BOURGEOIS'
        ,'PIERRE'
        ,'BENOIT'
        ,'REY'
        ,'LECLERC'
        ,'PAYET'
        ,'ROLLAND'
        ,'LECLERCQ'
        ,'GUILLAUME'
        ,'LECOMTE'
        ,'LOPEZ'
        ,'JEAN'
        ,'DUPUY'
        ,'GUILLOT'
        ,'HUBERT'
        ,'BERGER'
        ,'CARPENTIER'
        ,'SANCHEZ'
        ,'DUPUIS'
        ,'MOULIN'
        ,'LOUIS'
        ,'DESCHAMPS'
        ,'HUET'
        ,'VASSEUR'
        ,'PEREZ'
        ,'BOUCHER'
        ,'FLEURY'
        ,'ROYER'
        ,'KLEIN'
    ];
    return $user_tables[$i];

}
function get_numero(){
    $numero_contact=[
        '55','56','54'
    ];
    return $numero_contact[rand(0,2)].rand(100000,999999); 
}


function get_total_records_country($connect,$table_name,$column,$research){
    $query="SELECT * FROM $table_name WHERE $column=?";
    $statement=$connect->prepare($query);
    $statement->execute(array($research));
    return $statement->rowCount();
}

function get_passport(){
    $list=  ['RDCongo','CteIvoire','Tunisie','Gabon','Mali','Maroc','Rwanda','Angola','Senegale','Congo'];
    $CIN=0;
    $country = [
        'RDCongo'=>'OP',
        'CteIvoire'=>'AB',
        'Tunisie'=>'TN',
        'Gabon'=>'GB',
        'Mali'=>'ML',
        'Maroc'=>'MR',
        'Rwanda'=>'RW',
        'Angola'=>'AN',
        'Senegale'=>'SN',
        'Congo'=>'CN'];
        $pays=$list[rand(0,9)];
        $CIN=rand(11111111,99999999);
        if($pays=='Tunisie'){
            return $pays.' '.$CIN;
        }else{
            return $pays.' '.$country[$pays].rand(1000000,9999999);
        }
}
function get_date(){
    return date("Y-m-d");
}
function get_user_password(){
    $token = openssl_random_pseudo_bytes(3);
    $token = strtoupper(bin2hex($token));
    return $token;
}
function get_gouv($chaine){
    $retour='';
    $explode=explode(" ",$chaine);
      return $explode[0];
    
}
function get_ville($chaine){
    $retour='';
  
    $explode=explode(" ",$chaine);   
   /*
      for($i=0;$i<strlen($chaine-1);$i++){
        $retour=$explode[1].' ';
      
    }
    */
    $taille=count($explode); 
    for($i=1;$i<$taille;$i++){
        $retour.=$explode[$i].' ';
    } 
//    $retour=str_word_count($explode);
    //$retour=$explode[0];
    return $retour;

}
function get_data($chaine){
    $retour=explode(" ",$chaine);
    return $retour[1];
}

function get_all_data($connect,$id,$table,$recherche,$retour)
{
    $query=$connect->prepare("SELECT * FROM $table WHERE $recherche=?");
    $query->execute(array($id));    
    $fetch_query=$query->fetch();
    return $fetch_query[$retour];
}
function get_total_records($connect,$table_name){
    $query="SELECT * FROM $table_name";
    $statement=$connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}
function get_gouv_stat($connect,$table_name,$element){
    $query=$connect->prepare("SELECT * FROM $table_name GROUP BY $element");
    $query->execute();
    $myFecth_query=$query->rowCount();
    return $myFecth_query;

}
function get_all_users($connect,$suite){
    $query=$connect->prepare("SELECT * FROM utilisateurs $suite");
    $query->execute();
    $output='';
    $my_fetch=$query->fetchAll();
    $output='
    <div class="col-md-9">
            <table class="table">

                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Piece</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Date</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    ';
                    foreach($my_fetch as $row){
                        $output.='
                        <tr>
                        <td>'.$row["nom"].'</th>
                        <td>'.$row["prenom"].'</td>
                        <td>'.$row["piece"].'</td>
                        <td>'.$row["numero"].'</td>
                        <td>'.$row["date_emission"].'</td>
                        <td>'.$row["ville"].'</td>
                        <td>'.$row["contact"].'</td>
                        <td>'.$row["pays"].'</td>
                        </tr>';
                        }
            $output.='

                </tbody>
            </table>
    </div>';
    return $output;
}
function get_pays($connect){
    $tab=[];
    $query=$connect->prepare("SELECT DISTINCT(pays) FROM utilisateurs");
    $query->execute();
    $my_fetch=$query->fetchAll();
    foreach($my_fetch as $row){
        $pays=$row['pays'];
        array_push($tab,$pays);
    }
    return implode(',',$tab);
}
function get_nationalities($connect){
    $tab=[];
    $query=$connect->prepare("SELECT DISTINCT(pays) FROM utilisateurs");
    $query->execute();
    $my_fetch=$query->fetchAll();
    foreach($my_fetch as $row){
        $pays=$row['pays'];
        array_push($tab,get_total_records_country($connect,'utilisateurs','pays',$pays));
    }
    return implode(',',$tab);
}
function get_all_date($connect){
    $tab=[];
    $query=$connect->prepare("SELECT DISTINCT(date_emission) FROM utilisateurs");
    $query->execute();
    $my_fetch=$query->fetchAll();
    foreach($my_fetch as $row){
        $pays=$row['date_emission'];
        array_push($tab,$pays);
    }
    return implode(',',$tab);
}
function get_number_date($connect){
    $tab=[];
    $query=$connect->prepare("SELECT DISTINCT(date_emission) FROM utilisateurs");
    $query->execute();
    $my_fetch=$query->fetchAll();
    foreach($my_fetch as $row){
        $pays=$row['date_emission'];
        array_push($tab,get_total_records_country($connect,'utilisateurs','date_emission',$pays));
    }
    return implode(',',$tab);
}
function load_something($connect,$table_name,$autre){
    $query=$connect->prepare("SELECT * FROM $table_name $autre");
    $query->execute();
    return $query->fetchAll();
}
function delete_user($connect,$user_id,$table_name){
    $query=$connect->prepare("DELETE FROM $table_name WHERE id =?");
    $query->execute(array($user_id));
    
}
function get_username($connect,$id,$table_name,$retour){
        $query="SELECT * FROM $table_name WHERE $id=?";
        $statement=$connect->prepare($query);
        $statement->execute(array($id));
        $fetch_ecole=$statement->fetch();
        if($statement->rowCount()==1){
            return $fetch_ecole[$retour];
        }else{
            return '---------------';
        }    
    }
    function load_ville_list(){
        $output='';
            $output .='<option value="Ariana">Ariana</option>
                        <option value="Béja">Béja</option>
                        <option value="Ben Arous">Ben Arous</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Gabes">Gabes</option>
                        <option value="Gasfa">Gasfa</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Kaiouran">Kaiouran</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Kébili">Kébili</option>
                        <option value="Kef">Kef</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="Manouba">Manouba</option>
                        <option value="Médenine">Médenine</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Sfax">Sfax</option>
                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Tataouine">Tataouine</option>
                        <option value="Tozeur">Tozeur</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Zaghouan">Zaghouan</option>            
            ';
        return $output;
    }
?>
