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
    
    // calculate the pagination number by dividing total number of rows with per page.
    $paginations = ceil(12 / $per_page);
?>