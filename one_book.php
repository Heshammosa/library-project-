<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
  include ('connect.php');
  include ('index.php');
if (!isset($_SESSION['online_library'])) {
$username='زائر';
}
if (isset($_SESSION['online_library'])) {
$username= $_SESSION['online_library'];
}
?>
<center>
  <label>مرحبا بك   <?php echo $username; ?></label>
<br>
         
          <br>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM books  where id='$id'   ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

						<div class="card" style="width: 600px; height:800px;" >
						  <img src="admin/cover_photo/<?php echo $row['cover_photo']; ?>" alt="Denim Jeans" style="width:100%;   left: 250px; height: 200px;">
						  <h1><?php echo $row['book_name']; ?></h1>
						  <p class="price"><?php echo $row['price'].'جنية'; ?></p>
						  <p><?php echo $row['author_name']; ?></p>
              <form method="post" action="admin/fun/add_metaphor.php">
                <input type="hidden" name="user_name" value="<?php echo $username ; ?>">
                <input type="hidden" name="book_number" value="<?php echo $row['id']; ?>" >
        <?php
        if ($username!=='زائر') {
        
       
        ?>
                              <p><button>طلب </button></p>
        <?php
         }
         ?>
              </form>
<label><?php echo $row['note_book']; ?></label>
						</div>

<?php
}
?>

</center>
</body>
</html>
