<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="arrowthemes, bakery, cafe, ristorante theme, coffee shop, cooking, dining, food, full screen, html template, menu, pizza, responsive, restaurant, template" />
  <meta name="description" content="Gaucho is an exquisite food & restaurant HTML template with a unique concept. Gaucho comes bundled with astounding features like page preloader, pre-built pages, full page slider and much more" />
  <meta name="author" content="arrowthemes">
  <title>Menu</title>

  <!-- fav icon -->
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <!-- css -->
  <link rel="stylesheet" href="css/plyr.css">
  <link rel="stylesheet" href="css/theme.css"> 
  <link rel="stylesheet" href="css/custom.css">


</head>

<body>
   
    <?php                                 
                               
                   $db = mysqli_connect('localhost', 'root', '', 'digimenu'); 
                   $dq = "SELECT * FROM dmenu WHERE id=1";
                   $sd = mysqli_query($db, $dq)
                       
                                echo "<div class="tm-menu-item tm-menu-compound">";
                                echo "<div class="uk-grid" data-uk-grid-margin>";
                                echo  "<div class="uk-width-1-5">";
                                echo  "<img class="uk-align-left uk-thumbnail uk-border-circle"src=" ;             
                                echo $row['dimg'];
                            
                                echo   "width="72" height="72" alt="classic nachos">";
                                echo   "</div>";

                                echo  "<div class="uk-width-4-5">";
                                echo   "<div class="uk-margin-small-left">";
                                echo   "<h3 class="tm-menu-name">";
                                echo   $row['dname'];
                                echo   "</h3>";
                                echo   "<div class="uk-badge-danger uk-badge">";
                                echo    $row['dnote'];
                                echo       "</div>";
                                echo   "<span class="tm-menu-dots"></span>";
                                echo   "<span class="tm-menu-price">";
                                echo    $row['dprice'];   
                                echo   "</span>";
                                echo   "<span class="tm-menu-desc">";
                                echo   $row['dinfo'];
                                echo   "</span>";
                                echo   "</div>
                                      </div>
                                    </div>
                                  </div>";
                       
                                              ?>
    
    
    
</body>



