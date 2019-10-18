<?php

session_start();
include('dbcon.php');

$result = $con->query("SELECT * FROM `emply` WHERE id=".$_REQUEST['id']);

$data = $result->fetch_assoc();

/*echo "<pre>";

print_r($data);*/




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Fillup The form</title>
</head>
<body>

<h3 class="text-center bg-primary py-4 text-white">Edit customer Information</h3>

<div class="container">
    <form action="update_form.php?id=<?php echo $data['id'];?>" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group">
            <label for="name">Name : </label>
            <input class="form-control" type="text" value="<?php echo $data['name'];?>" name="name">
        </div>
        <div class="form-group">
            <label for="age">Age :</label>
            <input class="form-control" type="text" value="<?php echo $data['age'];?>" name="age">
        </div>

        <div class="form-group">
            <label for="status">Statis : </label>


            <div class="form-check form-check-inline">
                <input class="form-check-input" <?php if ($data['status'] == 1) echo 'checked';?> type="radio" name="status" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                <label class="form-check-label" <?php if ($data['status'] == 0) echo 'checked';?> for="inlineRadio2">Inactive</label>
            </div>
        </div>

        <?php

        $skill=explode(',',$data['skill']);

        ?>

        <div class="form-group">
            <label for="skill">Skill : </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" <?php if (in_array('php', $skill)) echo 'checked';?> type="checkbox" id="inlineCheckbox1" name="skill[]" value="php">
                <label class="form-check-label" for="inlineCheckbox1">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" <?php if (in_array('css', $skill)) echo 'checked';?> type="checkbox" id="inlineCheckbox2" name="skill[]" value="css">
                <label class="form-check-label" for="inlineCheckbox2">CSS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" <?php if (in_array('html', $skill)) echo 'checked';?> type="checkbox" id="inlineCheckbox3" name="skill[]" value="html">
                <label class="form-check-label" for="inlineCheckbox3">HTML</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" <?php if (in_array('python', $skill)) echo 'checked';?> type="checkbox" id="inlineCheckbox3" name="skill[]" value="python">
                <label class="form-check-label" for="inlineCheckbox3">Python</label>
            </div>
        </div>



        <div class="form-group">
            <select name="country" id="" class="form-control">
                <option value="">select one</option>
                <option <?php if ($data['country'] == 'bangladesh') echo 'selected';?> value="bangladesh">Banglades</option>
                <option <?php if ($data['country'] == 'india') echo 'selected';?> value="india">India</option>
                <option <?php if ($data['country'] == 'pakistan') echo 'selected';?> value="pakistan">Pakistan</option>
                <option <?php if ($data['country'] == 'canada') echo 'selected';?> value="canada">Canada</option>
            </select>
        </div>
        <div class="form-group">
            <img class="w-25" src="<?php echo $data['image']; ?>" alt="">
            <br>
            <br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
        </div>
        <div class="form-group">
            <label for="submit"></label>
            <input type="submit" class="btn btn-success" value="Submit">
            <input type="reset" class="btn btn-success" value="Reset">
            <a href="index.php" class="btn btn-success">Back</a>
        </div>
    </form>
</div>


