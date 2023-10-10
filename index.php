<?php

echo 'Site en maintenance !!';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>

  <div class="container">
    <p class="time"></p>
  </div>

</body>

<script type="text/javascript">
  const timeContainer = document.querySelector('.time');

  function showTime() {
    let dateTime = new Date();
    let time = dateTime.toLocaleTimeString();
    timeContainer.textContent = time;
  }

  let timerID = setInterval(showTime, 1000);
</script>

<style type="text/css">
  .time {
    text-shadow: 0px 0px 12px #A88E3E;
    font-size: 128px;
    width: 100%;
    text-align: center;
    color: #A88E3E;
    user-select: none;
  }
</style>

</html>