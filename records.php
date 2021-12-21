<?php
    $list='';
    $conn = mysqli_connect("localhost", "root", "920201", "pknu_db");
    $sql = "select * from ballondor"; 
    $result = mysqli_query($conn, $sql);       
    while($row = mysqli_fetch_array($result)) 
    {
        $list = $list."<li><a href = \"records.php?id={$row['id']}\">{$row['name']}</a></li>"; 
    }                              

    $sql = "select * from ballondor where id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $article = array(
        'name'=>$row['name'],
        'country'=>$row['country'],
        'birth'=>$row['birth'],
        'body'=>$row['body'],
        'position'=>$row['position'],
        'records'=>$row['records']
    ); 
?>


<html>
    <head>
        <meta charset = 'utf-8'>
        <style type = "text/css">
            nstyle{
                color:#ffee00;
                font-family: 굴림;
                font-size: 20px;
                text-align: center;
                
            }
            rstyle{
                color:#ffee00;
                font-family: 굴림;
                font-size: 30px;
                font-weight: bolder;
            }
            ostyle{
                color:#ffee00;
                font-family: 굴림;
                font-size: 25px;
                text-align: center;
            }
            tstyle{
                color:#ffee00;
                font-family: 굴림;
                font-size: 35px;
                text-align: center;
            }
            ol{
                text-decoration: none;
            }
        </style>
    </head>
    <body bgcolor = "#212121">
        <tstyle>
        <h1>발롱도르 수상자 명단</h1>
        </tstyle>
        
        <rstyle>
        <ol>
            <?php
                echo $list;
            ?>
        </ol>
        </rstyle>

        <ostyle>
        <h2>
            <?php
                echo $article['name'];
            ?>
        </h2>
        </ostyle>

        <nstyle>
        <h4>
            <?php
                echo $article['country'];
            ?>
        </h4>
        <h4>
            <?php
                echo $article['birth'];
            ?>
        </h4>
        <h4>
            <?php
                echo $article['body'];
            ?>
        </h4>
        <h4>
            <?php
                echo $article['position'];
            ?>
        </h4>
        <h4>
            <?php
                echo $article['records'];
            ?>
        </h4>
        </nstyle>
    </body>
</html>