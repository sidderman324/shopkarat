<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контруктор кухни</title>

  <link rel="stylesheet" href="/wp-content/themes/karat/static/css/style.css?v=<?php echo time(); ?>">

</head>
<body>

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/header.php');?>

  <div class="container">
    <div id="broskoweb_container"></div><script>document.addEventListener('DOMContentLoaded', function (){var params=decodeURIComponent(window.location.search.substring(1)); var broskoweb_container=document.getElementById('broskoweb_container'); var iframe=document.createElement('iframe'); iframe.id='broskoweb'; iframe.allowFullscreen=true; iframe.style.width="100%"; iframe.style.height="100%"; iframe.style.minHeight="700px"; iframe.style.border=0; iframe.src='https://broskokitchenplanner.com/clients/dev/'; if (params !=='') iframe.src=iframe.src + "?" + params; broskoweb_container.appendChild(iframe);})</script>
  </div>
  

  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/karat/frontend/_include/footer.php');?>


</body>
</html>
