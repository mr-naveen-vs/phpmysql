<?php
include("config.php");
@extract($_POST);
$sql="SELECT * FROM cricket ORDER BY id ";
$res=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to">
        <title>Cricket</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.">
        <style>
            body{
                background-color: #f1f1f1;
                margin:0%;
                padding:0%;
            }
            table{
                margin: 0 auto;
                border-collapse:collapse; 
            }
            table,th,td{
                margin: 0 auto;
                border:2px solid black;

            }
            th{
                background-color: #e0d723;
                padding: 10px;
                color:#000000;
                
            }
            td{
                padding: 10px;
                }
                h1{
                    text-align: center;
                    
                }
                h1 {
    text-align: center;
    font-size: 50px;
    background-color: chocolate;}

            </style>
</head>
<body>
    <div class="container">
        <h1>Cricket</h1>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SKILLS</th>
                    <th>RUNS</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    <th>STATUS</th>
                </tr>
                <?php
                if($res=$con->query($sql)){
                    while($row=$res->fetch_object()){
                        ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->skills; ?></td>
                            <td><?php echo $row->runs; ?></td>
                            <td><a href="edit.php?id=<?php echo $row->id; ?>">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                            <td><a href="status.php?id=<?php echo $row->id; ?>"><?php?></a></td>
                        </tr>
                            <?php
                                        }
                                   }
                             ?>
            </table>    
</body>
</html>