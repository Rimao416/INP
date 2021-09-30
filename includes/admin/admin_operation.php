<?php
include('../database.php');
session_start();
if(isset($_POST['action'])){
    if($_POST['action']=='fetch'){
        $query = '';
        $output = array();
        $query .= "SELECT * FROM utilisateurs ";
       if(isset($_POST["search"]["value"]))
        {
            $query .= 'WHERE nom LIKE "%'.$_POST["search"]["value"].'%" 
            OR prenom LIKE "%'.$_POST["search"]["value"].'%"
            OR piece LIKE "%'.$_POST["search"]["value"].'%"
            OR numero LIKE "%'.$_POST["search"]["value"].'%"
            OR date_emission LIKE "%'.$_POST["search"]["value"].'%"
            OR gouvernorat LIKE "%'.$_POST["search"]["value"].'%"
            OR ville LIKE "%'.$_POST["search"]["value"].'%"
            OR contact LIKE "%'.$_POST["search"]["value"].'%"
            OR espace_client LIKE "%'.$_POST["search"]["value"].'%"
            OR pays LIKE "%'.$_POST["search"]["value"].'%"';
        }
        if(isset($_POST["order"]))
        {
            $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
        }
        else
        {
            $query .= 'ORDER BY id DESC ';
        }
        if($_POST["length"] != -1)
        {
            $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
        }
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
        foreach($result as $row)
        {
            $sub_array = array();
            $sub_array[] = $row["nom"];
            $sub_array[] = $row["prenom"];
            $sub_array[] = $row["piece"];
            $sub_array[] = $row["numero"];
            $sub_array[]=$row['date_emission'];
            $sub_array[]=$row['gouvernorat'];
            $sub_array[]=$row['ville'];
            $sub_array[]=$row['contact'];
            $sub_array[]=$row['espace_client'];
            $sub_array[]=$row['pays'];
    
            $data[] = $sub_array;


        }
        $output = array(
        "draw"    => intval($_POST["draw"]),
        "recordsTotal"  =>  $filtered_rows,
        "recordsFiltered" => get_total_records($connect,'utilisateurs'),
        "data"    => $data
        );
        echo json_encode($output);
}
}

?>