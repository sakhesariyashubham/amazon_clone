<?php include 'counter.php' ?>
<style>
  .visitor{
      list-style:none;
      display:flex;
      color:red;
      padding-right:3px;
      margin:0 1px;
      margin-left:0px;
      float:right;
      font-weight:bold;
      font-size:larger;
  }
</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">What's Trending</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home_kitchen.php">Home & Kitchen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mobile.php">Mobile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tv.php">Tv</a>
        </li>
      </ul>
      <label style="color:white;background:blue;font-family:lato;">&nbsp;Total Visitors :&nbsp;</label>
      <ul class="visitor">
<?php echo $counter;?></ul>
    </div>
  </div>
</nav>

<div class="alert alert-secondary" role="alert">
<marquee scrollamount="9"><b class="text-success-emphasis" style="font-family:Roboto Mono;font-size:larger;">Note:- This products are one of the best to buy all time, We are trying to save your time⏳ on finding which products are best for your valueable purchase🛒</b></marquee>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });
</script>

