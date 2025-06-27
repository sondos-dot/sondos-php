<?php
$currency = $_POST['currency'] ?? '';
$timezone = $_POST['timezone'] ?? '';
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>تحديث العملة والمنطقة الزمنية</title>
</head>
<body>

  <h2>تحديث العملة والمنطقة الزمنية</h2>
  
  <form method="POST">
    <label for="currency">اختر العملة:</label>
    <select name="currency" id="currency">
      <option value="EGP" <?php if ($currency == 'EGP') echo 'selected'; ?>>الجنيه المصري (EGP)</option>
      <option value="USD" <?php if ($currency == 'USD') echo 'selected'; ?>>الدولار الأمريكي (USD)</option>
      <option value="EUR" <?php if ($currency == 'EUR') echo 'selected'; ?>>اليورو (EUR)</option>
    </select>

    <br><br>

    <label for="timezone">اختر المنطقة الزمنية:</label>
    <select name="timezone" id="timezone">
      <option value="Africa/Cairo" <?php if ($timezone == 'Africa/Cairo') echo 'selected'; ?>>القاهرة (GMT+2)</option>
      <option value="Asia/Dubai" <?php if ($timezone == 'Asia/Dubai') echo 'selected'; ?>>دبي (GMT+4)</option>
      <option value="Europe/London" <?php if ($timezone == 'Europe/London') echo 'selected'; ?>>لندن (GMT+1)</option>
    </select>

    <br><br>

    <input type="submit" value="تحديث">
  </form>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <p>✅ تم تحديث الإعدادات:</p>
    <ul>
      <li>العملة: <?php echo htmlspecialchars($currency); ?></li>
      <li>المنطقة الزمنية: <?php echo htmlspecialchars($timezone); ?></li>
    </ul>
  <?php endif; ?>

</body>
</html>