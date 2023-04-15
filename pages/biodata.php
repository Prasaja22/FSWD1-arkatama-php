<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Bio Data</title>
</head>
<body>

<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                <?php
                    include ('model.php')
                ?>
                
                <div class="text-center">
                    <img src=<?php echo $img_path; ?> width="100" class="rounded-circle">
                </div>
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">Junior</span>
                    <h5 class="mt-2 mb-0"><?php echo $name; ?></h5>
                    <span>Fullstack Web Developer</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts"><?php echo $bio ?></p>
                    </div>
                    
                     <ul class="social-list text-start">
                        <li> birth place : <?php echo $birth; ?> </li>
                        <li> Gender : <?php echo $gender; ?>  </li>
                        <li> Address : <?php echo $address; ?>  </li>
                        <li> Educations
                            <ul>
                                <?php
                                    foreach ($educations as $education) {
                                        echo '<li>'. $education. '</li>';
                                    }
                                ?>
                                
                            </ul>    
                        </li>
                    </ul>    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>



    <script src="./../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./../node_modules/bootstrap/jquery-3.6.4.min.js"></script>
</body>
</html>