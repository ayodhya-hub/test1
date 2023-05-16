<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php include_once 'data.php'; ?>


<div class="container-fluid" style="  background: #dbdad9;">
<div class="nav justify-content-center">


<?php for($i=0; $i<12; $i++): ?>
    <div>
<div class="card" style="flex-direction: row; margin: 30px;">
    <img class="card-img-top" src="<?php echo $img [$i] ?>" alt=" " style="width: 80px; height:80px;       margin: 5%;">
    <div class="card-body">
      <h5 class="card-title" style="max-width: 80%;"><?php echo $title[$i] ?></h5>

      <?php 
      $length = preg_match_all ('/[^ ]/' , $desciption[$i] , $matches);
     
      
      if ($length >110)
         $str = substr($desciption[$i] , 0, 110) . '...';
      else
      $str =$desciption[$i] ;
      ?>
      <p class="card-text"  style="max-width: 80%;"><?php echo $str  ?> </p>
     
    <a href="start.php?projectname=<?php echo $title[$i] ?>&projectdes=<?php echo $desciption[$i]  ?>&projectimg=<?php echo $img [$i] ?>" class="btn btn-primary" style=" min-width: 10%;">start</a>
    </div>
    </div>
<?php endfor; ?>

</div>
</div>





<ul class="pagination" style="padding-left: 90%;">
            <?php
                if($page_counter == 0){
                    echo "<li><a href=?start='0' class='active'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li><a href=?start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?start=$j>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li><a href=?start=$next>Next</a></li>"; 
                } 
            ?>
 </ul>