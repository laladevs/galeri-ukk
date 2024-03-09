<?php
 include 'header.php'; 

 if(!isset($_SESSION['userid'])){
    header("location:landing-page.php");
 }
    
?>

     <div class="container py-4">
      <div class="row">
         <div class="col">
         <div class="card mb-3">
      <?php 
      include 'koneksi.php';
      
      
         $sql = mysqli_query($koneksi, "SELECT * FROM foto");
         foreach ($sql as $data) :
            
      ?>
      <div class="card" >
      <a href="detail-foto.php?fotoid=<?= $data['fotoid'] ?>"><img src="img/<?=$data['lokasifile']; ?>" class="img-top rounded-start" alt="gambar"></a><br>
         </div>

     <?php endforeach; ?>
<?php include 'footer.php'; ?>