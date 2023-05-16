<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php
$img = array("images/img1.jpg", "images/img2.png", "images/img3.png", "images/img3.png", "images/img4.png", "images/img5.jpg", "images/img6.png", "images/img7.jpg", "images/img8.png", "images/img9.png", "images/img10.png", "images/img11.jpg","images/img12.png");
$title= array("Project1", "Project2", "Project3", "Project4", "Project5", "Project6", "Project7", "Project8", "Project9", "Project10", "Project11", "Project12", );
$desciption= array("A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants.", 
"A flower, jdgug dhaihfoa fjdhfouh jfhdhfou dhihfoud jdiojfiou jfodhfuo jdojfod hfduohf plants.",
"A flower, jhhd dhfudhf fsdhfuods ffuiowruf eruewrw fjowufowf jfeiowur8wer euf8ewur80n iwurwu fndlsjfhj jg (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to facilitate reproduction, usually by providing a mechanism for the union of sperm with eggs.",
"A flower, fdhgsiufg fhduohfo whdfuoyw fowdoufw fwdhoufyw fhweuodfuw weeuofwe fweuf09iuw plants.",
"A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to facilitate reproduction, usually by providing a mechanism for the union of sperm with eggs.",
"A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants.",
"A flower, fjdhuofh fwduf08wu fjwiufiow fuewfw fuewiufw fjeoiwu08we reur80eu rewur89u ruer8ey8 plants.",
"A flower, kvhousfyglf fjidwuf fjdwufoiw mflknvmlk nvjfh vljhjflh fjfwiodj fjodfj fjh jfdf jfof fjdjfoid fjffjdf (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to facilitate reproduction, usually by providing a mechanism for the union of sperm with eggs.",
"A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants.",
"A flower, fdhgsiufg fhduohfo whdfuoyw fowdoufw fwdhoufyw fhweuodfuw weeuofwe fweuf09iuw plants.",
"A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms). The biological function of a flower is to facilitate reproduction, usually by providing a mechanism for the union of sperm with eggs.",
"A flower, fwfjiowf fjipuwfip fwjfiuwf fjiwpdjfiuw fwjfiuw fjifiourf fjwriofuwri fjwrfio.",);
?>
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



<?php 
    

    $start = 0;  $per_page = 4;
    $page_counter = 0;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
    
    if(isset($_GET['start'])){
     $start = $_GET['start'];
     $page_counter =  $_GET['start'];
     $start = $start *  $per_page;
     $next = $page_counter + 1;
     $previous = $page_counter - 1;
    }
    // query to get messages from messages table
    
    // calculate the pagination number by dividing total number of rows with per page.
    $paginations = ceil(12 / $per_page);
?>

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