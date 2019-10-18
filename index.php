<?php
session_start();
include ('dbcon.php');

$result = $con->query("SELECT * FROM `emply`");

$emplyes = $result->fetch_all();

/*echo "<pre>";

print_r($emplyes);

exit();*/



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">

    <title>Welcome || All Customer</title>
    <script src="https://kit.fontawesome.com/95141001f6.js" crossorigin="anonymous"></script>
</head>
<body>

<h3 class="text-center bg-primary py-4 text-white">All customer</h3>

<div class="container">
    <?php

    if (@$_SESSION['message'])
    {
        echo $_SESSION['message'];
    }
    ?>
    <a href="register_form.php" class="btn btn-primary my-3"><i class="fas fa-plus px-2"></i>Add</a>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
        <tr>
            <th>#Sl</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Skill</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($emplyes as $key => $emplye) { ?>
        <tr>
            <td><?php echo $key+1;?></td>
            <td><?php echo $emplye['1'];?></td>
            <td><?php echo $emplye['2'];?></td>
            <td><?php echo $emplye['3'] == 1 ? 'Active':'Inactive';?></td>
            <td><?php echo $emplye['4'];?></td>
            <td><?php echo $emplye['5'];?></td>
            <td>
                <a href="edit_form.php?id=<?php echo $emplye['0'];?>">Edit</a>&nbsp; &nbsp;
                <a href="delete.php?id=<?php echo $emplye['0'];?>">Delete</a>
            </td>
        </tr>
        <?php }?>
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Skill</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
    } );
</script>

<!--<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            "order": [[ 3, "desc" ]],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>-->

</body>
</html>
<?php
session_unset();
//echo $_SESSION['message'];
?>
