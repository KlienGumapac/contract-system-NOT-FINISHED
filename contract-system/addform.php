<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="css/addforms.css" type="text/css">
  <title>Add Contract</title>
</head>

<body>
  <section class="sidebar">
    <div class="nav-header">
      <p class="logo">CONTRACT</p>
      <i class="bx bx-menu btn-menu"></i>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class="bx bx-home-alt-2"></i>
          <span class="title">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="addform.php">
          <i class='bx bx-plus'></i>
          <span class="title">Add Contract</span>
        </a>
        <span class="tooltip">Add Contract</span>
      </li>
      <li>
        <a href="viewinformation.php">
          <i class="fa-solid fa-eye"></i>
          <span class="title">View Contract</span>
        </a>
        <span class="tooltip">View Contract</span>
      </li>
      <li>
        <a href="record.php">
          <i class="fa-solid fa-folder-closed"></i>
          <span class="title">Record</span>
        </a>
        <span class="tooltip">Record</span>
      </li>
    </ul>
  </section>
  <div class="container">
    <button onclick="popUp()"><i class="fa-solid fa-arrow-left"></i></button>
    <header>Contract Information</header>
    <form action="#" method="POST">
      <div class="form first">
        <div class="deatails personal">
          <span class="title">Add Details</span>

          <div class="fields">
            <div class="input-field">
              <label>Parties:</label>
              <input type="text" name="parties" placeholder="Enter Parties.." required>
            </div>

            <div class="input-field">
              <label>Client/Owner:</label>
              <input type="text" name="client" placeholder="Enter Client.." required>
            </div>

            <div class="input-field">
              <label>Contractor:</label>
              <input type="text" name="contractor" placeholder="Enter Contractor.." required>
            </div>

            <div class="input-field">
              <label>Scope of Work:</label>
              <input type="text" name="scope" placeholder="Enter Scope of Work.." required>
            </div>

            <div class="input-field">
              <label>Project Location:</label>
              <input type="text" name="location" placeholder="Enter Project Location.." required>
            </div>

            <div class="input-field">
              <label>Project Start Date:</label>
              <input type="date" name="startdate" placeholder="Enter Start Date.." required>
            </div>

          </div>
        </div>

        <div class="deatails personal">
          <span class="title">More Details</span>

          <div class="fields">
            <div class="input-field">
              <label>Total Price:</label>
              <input type="number" name="price" placeholder="Enter total Price.." required>
            </div>

            <div class="input-field">
              <label>Payment Schedule:</label>
              <input type="date" name="payment" placeholder="Enter Payment Schedule.." required>
            </div>

            <div class="input-field">
              <label>Permit and Approval:</label>
              <input type="text" name="permit" placeholder="Enter Description.." required>
            </div>
          </div>

          <button class="nextBtn">
            <span class="btnText">Next</span>
            <i class="fa fa-solid fa-right-long"></i>
          </button>

        </div>
      </div>

      <div class="form second">
        <div class="deatails address">
          <span class="title">Billing Adress</span>

          <div class="fields">
            <div class="input-field">
              <label>Full Name:</label>
              <input type="text" name="name" placeholder="Enter Name.." required>
            </div>

            <div class="input-field">
              <label>Name On Card:</label>
              <input type="text" name="cardname" placeholder="Enter Card Name.." required>
            </div>

            <div class="input-field">
              <label>Address:</label>
              <input type="text" name="address" placeholder="Enter Address.." required>
            </div>

            <div class="input-field">
              <label>Card Number:</label>
              <input type="text" name="cardnum" placeholder="1111-2222-3333-4444." required>
            </div>

            <div class="input-field">
              <label>City:</label>
              <input type="text" name="startdate" placeholder="Enter City.." required>
            </div>

            <div class="input-field">
              <label>Exp Month:</label>
              <input type="date" name="expmonth" placeholder="Enter Exp Month.." required>
            </div>

          </div>
        </div>

        <div class="deatails personal">
          <span class="title">Payment</span>

          <div class="fields">
            <div class="input-field">
              <label>State:</label>
              <input type="text" name="state" placeholder="Enter State.." required>
            </div>

            <div class="input-field">
              <label>Zip Code:</label>
              <input type="number" name="zipcode" placeholder="123 456.." required>
            </div>

            <div class="input-field">
              <label>Exp Year:</label>
              <input type="date" name="expyear" placeholder="2022.." required>
            </div>

            <div class="input-field">
              <label>CCV:</label>
              <input type="number" name="ccv" placeholder="2022.." required>
            </div>

            <div class="input-field">
              <label>Enter Pin:</label>
              <input type="password" name="pin" placeholder="1122.." required>
            </div>

            <div class="input-field">
              <label>Amount:</label>
              <input type="number" name="amount" placeholder="Enter Amount.." required>
            </div>

          </div>

          <div class="buttons">
            <div class="backBtn">
              <i class="fa fa-solid fa-right-long"></i>
              <span class="btnText">Back</span>
            </div>

            <button type="submit" name="submit" class="nextBtn">
              <span class="btnText">Submit</span>
              <i class="fa-solid fa-check"></i>
            </button>
          </div>

        </div>
      </div>
    </form>
  </div>
  <script>
    const btn_menu = document.querySelector(".btn-menu");
    const side_bar = document.querySelector(".sidebar");

    btn_menu.addEventListener("click", function() {
      side_bar.classList.toggle("expand");
      changebtn();
    });

    function changebtn() {
      if (side_bar.classList.contains("expand")) {
        btn_menu.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        btn_menu.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script>
    function popUp() {
      Swal.fire({
        title: 'Are you sure you want to go back?',
        text: "data's will not be save if u did not submit!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            location.href = "index.php"
          )
        }
      })
    }
  </script>
  <script src="js/addform.js"></script>
</body>

</html>

<!--PHP CODE-->

<?php

include 'database.php';


if (isset($_POST['submit'])) {

  $parties = $_POST['parties'];
  $client = $_POST['client'];
  $contractor = $_POST['contractor'];
  $scope = $_POST['scope'];
  $location = $_POST['location'];
  $startdate = $_POST['startdate'];
  $price = $_POST['price'];
  $payment = $_POST['payment'];
  $permit = $_POST['permit'];
  $amount = $_POST['amount'];

  $sql = "INSERT INTO  information (parties, client, contractor, scope, locations, startdate, price, payment, permit, amount) values ('$parties','$client','$contractor','$scope','$location','$startdate','$price','$payment','$permit','$amount')";

  if ($conn->query($sql)) {
?>
    <script>
      Swal.fire(
        'Success',
        'Data Inserted',
        'success'
      )
    </script>


<?php

  } else {
  }
}


?>