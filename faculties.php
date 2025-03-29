<!DOCTYPE html>
<html lang="en">
    <?php include("pages/header.php");?>
	<style>
		.profile {
	 height:300px;
	 width:250px;

 }
 .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2) !important;
}
.title {
  color:blue;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.card>.container>p{
  color:#7B241C;font-weight: bold;font-family: arial

}
.card>img{
	display: block; margin-left: auto; margin-right: auto; 
}
.card>.container>h2{
	text-align: center;
}
		</style>

<?php
  $facArray = array(
    ["Dr. Kakoli Sen Gupta","Assistant Professor, HOD","M.COM, Ph.D, PGDBFS","Paper Published : 03","Contact : +91-98647-17374","images/staff/kakoli.jpg","ACC"],
    ["Mr. Nabajyoti Barman","Assistant Professor","M.COM","Paper Published : 01","Contact : -","images/staff/Naba.jpg","ACC"],
    ["Mr. Manas Jyoti Baruah","Assistant Professor","MCA, MSc","Paper Published : 02","Contact : -","Images/staff/manas7.jpg","CSC"],
    ["Mr. Ashok Pradhan","Assistant Professor","M.A. , B.Ed, PGDCA","Paper Published : 01","Contact : -","images/staff/ashok.jpeg","ECO"],
    ["Mrs Puorobi Medhi","Assistant Professor","M.A. , B.Ed.","Paper Published : 0","Contact : -","images/staff/purobi.jpg","ENG"],
    ["Mrs Aparna Bengani","Assistant Professor","M.A.","Paper Published : 0","Contact : -","images/staff/arpana.jpg","ENG"],
    ["Miss Junmoni Bharali","Assistant Professor","M.Com.","Paper Published : 0","Contact : -","Images/staff/junmoni.jpg","FIN"],
    ["Mrs. Shahin Shaker","Assistant Professor","M.Com.","Paper Published : 0","Contact : -","Images/staff/shahin.jpg","FIN"],
    ["Mrs. Mamoni Talukdar Borah","Assistant Professor","M.A.","Paper Published : 0","Contact : -","Images/staff/mamoni.jpg","HIN"],
    ["Mr. Mrinal Hazarika","Assistant Professor, HOD","M.COM, M.Phil, LLB.","Paper Published : 0","Contact : -","Images/staff/photo10001.jpg","MGMT"],
    ["Dr. Ekta Chakravarty","Assistant Professor","M.COM, Ph.D","Paper Published : 14","Contact : -","Images/staff/ekta.jpg","MGMT"],
    ["Miss Gargi Aryya","Assistant Professor","M.COM, PGDCA, UGC-NET Qualified","Paper Published : 0","Contact : -","Images/staff/gargiarya.jpg","MGMT"],
    ["Miss Ruma Sarkar","Assistant Professor","M.Sc, PGDCA","Paper Published : 01","Contact : -","Images/staff/ruma.jpg","STAS"],

    ["Mrs. Dipti Rekha Bharali","Assistant Professor","MA","Paper Published : 00","Contact : -","Images/staff/index.jpg","ASS"],
    ["Miss Nikita Sarkar","Assistant Professor","MA","Paper Published : 00","Contact : -","Images/staff/nikita.jpg","BEN"],
    ["Mrs. Golapi Kalita","(Rtd. Prof., Guest Faculty)","M.A., M.Phil.","Paper Published : 00","Contact : -","Images/staff/golapibaideu.jpg","LOGIC"],
    ["Dr. Ekta Chakravarty","Assistant Professor, HOD","M.COM, Ph.D","Paper Published : 18, Book Published : 03","Contact : +91-80564-44611","images/staff/ekta1.jpg","MCOM"],
    ["Jayantika Goswami","Assistant Professor","M.COM, Ph.D","Paper Published : 01, Book Published : -","Contact : -","images/staff/jayantika.jpg","MCOM"],
  );
  $deptArray=array(
    ["ACC","Department of Accountancy"],
    ["CSC","Department of Computer Science"],
    ["ECO","Department of Economics"],
    ["ENG","Department of English"],
    ["FIN","Department of Finance"],
    ["HIN","Department of Hindi"],
    ["MGMT","Department of Management"],
    ["STAS","Department of Statistics"],

    ["ASS","Department of Assamese"],
    ["BEN","Department of Bengali"],
    ["EDU","Department of Education"],
    ["LOGIC","Department of Logic & Philosophy"],
    ["MCOM","Department of Management (MCom)"],
  );
?>
    <body>
        <?php include("pages/top.php");?>
        <div class="container-fluid pt-6 px-5">
            <?php
                $dept_id=$_GET["id"];
                if($dept_id!=""){
            ?>
            <div class="container-fluid px-5">
              <?php 
                foreach ($deptArray as $d) {
                  if($d[0]==strtoupper($dept_id)){
              ?>
              <div class="text-center mx-auto mb-5" style="max-width: 900px;">
                  <h1 class="display-5 mb-0 text-white bg-info"><?=$d[1]?></h1>
                  <br>
              </div>
              <?php
                  }
                }
              ?>
              <div class="row">
                <?php 
                  foreach ($facArray as $x) {
                    if($x[6]==strtoupper($dept_id)){
                      
                ?>
                <div class="col-4">
                  <div class="card">
                    <br>
                    <img class="profile" src="<?=$x[5]?>" alt="<?=$x[0]?>">
                    <div class="container">
                      <h2><?=$x[0]?></h2>
                      <p class="title"><?=$x[1]?></p>
                      <p><?=$x[2]?></p>
                      <p><?=$x[3]?> </p>
                      <p><button class="button"><?=$x[4]?></button></p>
                    </div>
                  </div>
                </div>
                <?php 
                    }
                  }
                ?>
            </div>
            <?php 
              }
            ?>
            <br><br>
        </div>
        <?php include("pages/footer.php");?>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    </body>
    <?php include("pages/bottom.php");?>
</html>