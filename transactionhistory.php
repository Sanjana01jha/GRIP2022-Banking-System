<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction History</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;
        }

        * {
            font-family: 'Tiro Gurmukhi', serif;
        }
        a:link {
      color: black;
    }

    a:hover {
      color: green;
      /* border:2px solid red; */
      text-decoration: none;
    }
    /* header{
background-color: red;
background-image: url(images/trust.jpg);
width: 100%;
height: 90vh;
background-size: 100% 100%;
background-repeat: no-repeat;
} */
    </style>
</head>

<body>

    <?php
    include './navbar.php';
    ?>
    <header>
        <div class="center mt-0 #ffab00 amber accent-3">
            <h3><b><span><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" style="height:60px;width:50px" /></span>Transaction History</b></h3>
        </div>
        <div class="container" >
            <br>
            <div class="container-fluid table-responsive-sm" >
                <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">S No.</th>
                            <th class="text-center">Sender</th>
                            <th class="text-center">Recipient</th>
                            <th class="text-center">Amount</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include './connection.php';

                        $sql = "SELECT * from transactions";

                        $query = mysqli_query($conn, $sql);

                        while ($rows = mysqli_fetch_assoc($query)) {
                        ?>

                            <tr>
                                <td class="center py-2"><?php echo $rows['s_no']; ?></td>
                                <td class="center py-2"><?php echo $rows['sender']; ?></td>
                                <td class="center py-2"><?php echo $rows['reciever']; ?></td>
                                <td class="center py-2"><?php echo $rows['balance']; ?> </td>
                                

                            <?php
                        }
                        mysqli_close($conn);
                            ?>
                    </tbody>
                </table>

            </div>

        </div>
        <footer class="center footer">
           <br>
            <a href="https://www.thesparksfoundationsingapore.org/" style="color:black ">The Sparks Foundation</a></h6>
        </footer>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>