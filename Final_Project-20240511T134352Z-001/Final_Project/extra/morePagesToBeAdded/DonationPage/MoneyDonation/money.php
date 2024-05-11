<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Money Donation</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>
<body>
  <div class="card-form">
    <form class="deposit">
      <div class="form-indicator"></div>
      <div class="form-body">
        <div class="row">
          <h1 style="margin-bottom:0px; text-align: center;">DEPOSIT FUNDS</h2>
        </div> 
        
        <div class="row">
          <div class="form-block">
            <div class="button" id="1" onclick="setValue(this)">$5</div>
            <div class="button" id="2" onclick="setValue(this)">$10</div>
            <div class="button" id="3" onclick="setValue(this)">$20</div>
            <div class="button" id="4" onclick="setValue(this)">$40</div>
            <div class="button" id="5" onclick="setValue(this)">$100</div>
            <div class="button" id="6" onclick="setValue(this)">$250</div>
            <div class="button" id="7" onclick="setValue(this)">$1000</div>
          </div>
        </div>
        <div class="row">
          <input type="text" id="cc" maxlength="100" placeholder="Remarks">
        </div>
        <div class="row">
          <input type="text" id="name" placeholder="Name on Certificate"> <br>
          <input type="text" id ="date" maxlength="40" placeholder="Email"> <br>
          <input type="text" id ="cvc" maxlength="20" placeholder="Phone Number"> 
        </div>
      </div>
      <div class="form-footer">
        <div class="btn" onclick="validate(this)">Deposit Funds</button>
      </div>
    </form>
  </div>  
</body>
</html>

