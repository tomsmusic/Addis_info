<html>
<head>
<title>ci_1</title>

</head>
<body>
<h1>blog</h1>
     <?php
             if (!isset($post)) {?>
                   <P>there is no blog</p>
     <?php              
             }else{

             
    ?>

<h2>
     <?= $post['title']?>
 </h2>
<p><?=$post['post']?></p>


     <?php            
             } 
           
     ?>


</body>

</html>
