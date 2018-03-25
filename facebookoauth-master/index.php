<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>Message</td>
                            <td>Story</td>
                            <td>Created Time</td>
                        </tr>
                        <?php
                        $data = $_SESSION['userData'];
                            for ($i = 0; $i < sizeof($data); $i++)    {
                                echo '<tr>';
                                    echo '<td>' . $data[$i]['id'] . '</td>';
                                    echo '<td>' . @$data[$i]['message'] . '</td>';
                                    echo '<td>' . $data[$i]['story'] . '</td>';
                                    echo '<td>' . $data[$i]['created_time']['date'] . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <?php /*print("<pre>".print_r($_SESSION, true)."</pre>"); */?>
            </div>
        </div>
    </div>
</body>
</html>