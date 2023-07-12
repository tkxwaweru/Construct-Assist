<?php 
  if (!isset($userInfo['email']) || !isset($userInfo['name'])){
    return redirect()->to('login');
  } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.Administrator</title>
  <link rel="stylesheet" href="<?= base_url('css/admin-dashboard.css') ?>">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
          <h4><?= $userInfo['email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a class="active" href="#">Home</a>
        <a href="<?php echo site_url('adminProfile'); ?>">Manage Profile</a>
        <a href="<?php echo site_url('registerAdmin'); ?>">Register new Admin</a>
        <a href="<?php echo site_url('viewUsers'); ?>">View User Records</a>
        <a href="<?php echo site_url('viewProfessionalRatings'); ?>">View Professional Ratings</a>
        <a href="<?php echo site_url('viewProviderRatings'); ?>">View Provider Ratings</a>
        <a class="log-out-button" href="<?php echo site_url('logout'); ?>">Logout</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>Home</h2>
      <div class="promo_card">
          <h1>Welcome: <?= $userInfo['name']; ?></h1>
          <p>This is your dashboard</p>
      </div>
    </div>
  </div>
</body>
</html>

<?php 
  }
?>