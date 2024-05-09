
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Miniature World</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body class="fullBack">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5 mx-auto p-3 border payment" style="border-radius: 15px;">
            <h2 class="headerPay">Payment successful</h4>
            <p>We would like to extend our sincere thanks to you for successfully completing the payment for your recent order with</p>
            <p>Click <a href="index.php" style="color: #f86793;">here</a> to return to the home page and continue shopping, or the website will automatically redirect in  <span id="counter" class="text-danger">10</span> second.</p>
            <a href="signin.php"><button class="btn btn-success btnPayment px-5 mt-3">Sign in</button></a>
        </div>
        
      </div>
    </div>
    <script>
      window.addEventListener('load', startTheCountdown)

      function startTheCountdown(){
        let countdown= 10;
        let counter= document.getElementById('counter');
        let id= setInterval(() => {
          countdown--;
          counter.innerHTML = countdown.toString();
          if(countdown==0){
            clearInterval(id);
            window.location.href='login.php'
          }
        }, 1000);
      }
    </script>
  </body>
</html>
</html>