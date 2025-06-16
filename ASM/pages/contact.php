<?php include("../includes/header.php"); ?>
<section>
  <h2>Liên hệ với tôi</h2>
  <form action="/contact_process.php" method="post">
    <input type="text" name="name" placeholder="Họ tên" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Số điện thoại">
    <textarea name="message" placeholder="Nội dung"></textarea>
    <button type="submit">Gửi</button>
  </form>
</section>
<?php include("../includes/footer.php"); ?>
