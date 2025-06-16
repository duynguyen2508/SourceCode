<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>

<section class="banner">
  <h1>Chào mừng đến với Portfolio</h1>
  <p>Tôi là một lập trình viên web.</p>
</section>

<section class="projects">
  <h2>Dự án đã thực hiện</h2>
  <?php
    $sql = "SELECT * FROM projects LIMIT 3";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "<div><h3>{$row['title']}</h3><p>{$row['description']}</p></div>";
    }
  ?>
</section>

<section class="education">
  <h2>Học vấn & Chứng chỉ</h2>
  <?php
    $sql = "SELECT * FROM education";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "<div><h3>{$row['title']} - {$row['year']}</h3><p>{$row['description']}</p></div>";
    }
  ?>
</section>

<?php include("includes/footer.php"); ?>
