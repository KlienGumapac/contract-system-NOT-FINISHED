<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--ONLINE CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/record.css" type="text/css">
    <title>Document</title>
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
    <section class="home">

        <div class="container">
            <div class="table">
                <div class="table_header">
                    <p>Contract Records</p>
                </div>
                <div class="table_section">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Parties</th>
                                <th>Client</th>
                                <th>Contractor</th>
                                <th>Scope</th>
                                <th>Location</th>
                                <th>Start_Date</th>
                                <th>Total_Price</th>
                                <th>Payment_Sched</th>
                                <th>Paid_Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            include 'database.php';

                            $sql = "SELECT * FROM information";
                            $query_run = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $information) {
                            ?>
                                    <tr>
                                        <td><?= $information['id'] ?></td>
                                        <td><?= $information['parties'] ?></td>
                                        <td><?= $information['client'] ?></td>
                                        <td><?= $information['contractor'] ?></td>
                                        <td><?= $information['scope'] ?></td>
                                        <td><?= $information['locations'] ?></td>
                                        <td><?= $information['startdate'] ?></td>
                                        <td><?= $information['price'] ?></td>
                                        <td><?= $information['payment'] ?></td>
                                        <td><?= $information['amount'] ?></td>
                                        <td>
                                            <button class="report" title="Create Report"><i class="fa-regular fa-file-powerpoint"></i></button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <p>Home Content Here</p>
    </section>
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


</body>

</html>