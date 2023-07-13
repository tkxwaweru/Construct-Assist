<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.Team</title>
  <link rel="stylesheet" href="<?= base_url('css/manager-dashboard.css') ?>">
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
        <h4><?= session('email'); ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a href="<?php echo site_url('managerHome'); ?>">Home</a>
        <a href="<?php echo site_url('managerProfile'); ?>">Manage Profile</a>
        <a href="<?php echo site_url('enlistProfessionals'); ?>">Enlist Professionals</a>
        <a href="<?php echo site_url('enlistServices'); ?>">Enlist Services</a>
        <a class="active" href="#">View Team</a>
        <a class="log-out-button" href="<?php echo site_url('logout'); ?>">Logout</a>
      </div>
    </nav>

    <div class="main-body">
      <h2>View Team</h2>
      <div class="promo_card">
          <h2>Profile: <?= session('name'); ?></h2>
          <p>Your team:</p>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Profession</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</body>
</html>
