<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    $students = $_SESSION['students'] ?? [];
    // include_once './store.php';
    ?>

    <div style="width:500px ; margin:0 auto">

        <?php
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        <a href="./create.php">Create</a>
        <table border="1" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>
                <?php
                foreach ($students as $student) { ?>
                    <tr>
                        <td> <?= $student['id'] ?></td>
                        <td> <?= $student['name'] ?></td>
                        <td>
                            <a href="delete.php?id=<?= $student['id'] ?> ">Delete</a>
                            <a href="show.php?id=<?= $student['id'] ?> ">Show</a>
                        </td>
                    </tr>
                <?php
                }
                ?>



            </tbody>
        </table>
    </div>


</body>

</html>