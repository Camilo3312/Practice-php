<?php include 'conection.php'?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="container_header">
            <a class="logo" href="">Logo</a>
            <div class="search">
                <input type="text" placeholder="Search register" class="input_search">
            </div>
        </div>
    </header>

    <main> 
        <form action="save_images.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="img">
            <input type="submit" value="Save image" name="submit_img">
        </form>

        <!-- Table registers -->
        <section>
            <table class="table_registers">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Surnames</th>
                        <th>Mail</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    
                    $values = "SELECT * FROM users";
                    $registers = mysqli_query($conection, $values);
                        while($rows = mysqli_fetch_assoc($registers)) { ?>
                        <tr>
                            <td><?php echo $rows['names']?></td>
                            <td><?php echo $rows['surnames']?></td>
                            <td><?php echo $rows['mail']?></td>
                            <td><?php echo $rows['clave']?></td>
                            <td><?php echo $rows['phone']?></td>
                            <td><img class="img_perfil" src="data:image/jpg;base64,<?php echo base64_encode($rows['image']) ?>" alt=""></td>

                        </tr>
                    <?php } ?>                
                </tbody>
            </table>
        </section>   
    </main>
</body>
</html>