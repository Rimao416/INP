<?php
    include('../database.php');
    if($_POST['action']=='load_info'){
        $gouvernorat=$_POST['phrase'];
  //      $retour=get_all_data($connect,$gouvernorat,'gouvernorat','utilisateurs',)
        $query=$connect->prepare("SELECT * FROM utilisateurs WHERE gouvernorat=?");
        $query->execute(array($gouvernorat));
        //$fetch_query=$query->fetch();
        $myquery=$query->fetchAll();
        //echo $myquery['nom'];
        $nombre=$query->rowCount();
        $i=0;
        
        $output='
        <div class="col-lg-12">
                <table class="table">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                        <th scope="col">#</th>
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
                        foreach($myquery as $row){
                            $i++;
                            $output.='
                            <tr>
                            <th scope="row">'.$i.'</th>
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
    echo $output;
        
}
?>