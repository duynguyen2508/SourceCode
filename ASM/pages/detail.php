<?php
include("../includes/db.php");
include("../includes/header.php");

$id = $_GET['id'];
$sql = "SELECT * FROM projects WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<section>
  <h2><?php echo $row['title']; ?></h2>
  <p><?php echo $row['description']; ?></p>
  <p>Công nghệ: <?php echo $row['technologies']; ?></p>
  <a href="<?php echo $row['github_link']; ?>">Xem GitHub</a>
</section>

<?php include("../includes/footer.php"); ?>
