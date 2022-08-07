<html>
<head>
<title>Generated plate</title>
<style>
/* Container holding the image and the text */
.container {
  position: relative;
  text-align: center;
  color: black;
}

/* Bottom text */
.bottom {
position: absolute;
  bottom: 8px;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 12px
}

/* Top text */
.top {
  position: absolute;
  top: 25px;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 36px
}
</style>
</head>
<body>

Top text: <?php echo $_POST["ttext"]; ?><br>
Bottom text: <?php echo $_POST["btext"]; ?>

<div class="container">
  <img src="plates/normal.png" alt="With black border" style="width:300px;">
  <div class="top"><?php echo $_POST["ttext"]; ?><br></div>
  <div class="bottom"><?php echo $_POST["btext"]; ?></div>
</div>
<br><br>

</body>
</html>