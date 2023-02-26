<?php 

require('../model/cs.php');

$db = new Database();

if(isset($_POST['action']) && $_POST['action']== "view"){
    $output = '';
    $data = $db->read();
   //  print_r($data);
    if($db->totalRowCount()>0){ 
        $output .= '<table class="table table-striped table-sm table-bordered">
        <thead>
            <tr class="text-center">
                <th>Students Open for Position</th>

               
                <th>Schedule for the interview</th>
            </tr>
        </thead>
        <tbody>
        ';
        foreach($data as $row){
            $output .= '<tr class="text-center text-secondary">
            <td>'.$row['job'].'</td>

            <td>
                <a href="#" title="View Details" class="text-success infoBtn" id="'.$row['id'].'">
                <button style="background-color: #2B5105; color: white; padding: 5px 10px; border-radius: 5px;">Invite</button></a>&nbsp;&nbsp; 
            </td></tr>';
        }
        $output .='</tbody></table>';
        echo $output;
    }else{
        echo '<h3 class="text-center text-secondary mt-5">:( no any user present in the database )</h3>';
    }
}


if(isset($_POST['info_id'])){
    $id = $_POST['info_id'];
    $row = $db->getUserBiId($id);
    echo json_encode($row);
}


?>