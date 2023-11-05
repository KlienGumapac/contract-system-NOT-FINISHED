<?php
session_start();
include 'database.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/fakeindex.css" type="text/css">
    <title>Contact Management System</title>
</head>

<body>

    <!-- Modal -->

    <div class="modal fade" id="modalPush" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <div class="modal-content text-center">
                <div class="modal-header d-flex justify-content-center">
                    <p class="h2 heading">LOGIN REQUIRED!</p>
                </div>
                <div class="modal-body">
                    <i class='bx bxs-bell-ring bx-tada bx-lg'></i>
                    <br>
                    <br>
                    <br>
                    <p>you need an account before accessing this page.</p>
                </div>
                <div class="modal-footer text-center">
                    <a href="#" class="btn btn-primary">LOG-IN</a>
                    <a href="#" class="btn btn-primary">SIGN-UP</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('modalPush'), {})
        myModal.show()
    </script>

    <!--end of modal-->

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="css/image/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#banner">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#social-media">Socials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addform.php">Add Contract</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="title">CONTRACT MANAGEMENT</p>
                    <p>"Effortless Contract Management: Simplifying Processes, Enhancing Control, and Driving Success."</p>
                    <a href="addform.php"><img src="css/image/add.png" class="add-btn">Add Contract</i></a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="css/image/img1.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!--Service Section-->

    <section id="services">
        <div class="container">
            <h1 class="service-title">/SAMPLE SERVIES WE DO></h1>
            <div class="row">
                <div class="col-md-4 services">
                    <h4>Contract Creation and Storage</h4>
                    <p>A contract management system can facilitate the creation of contracts using customizable templates, making the process more efficient and less error-prone. It also allows for secure storage of contracts, ensuring easy access and retrieval when needed.</p>
                </div>
                <div class="col-md-4 services">
                    <h4>Contract Tracking and Monitoring</h4>
                    <p>This system enables the tracking of key milestones, deadlines, and obligations outlined in contracts. It can provide automated notifications for important dates and events, ensuring that all parties involved stay informed and compliant with the terms of the contract.</p>
                </div>
                <div class="col-md-4 services">
                    <h4>Risk and Compliance Management</h4>
                    <p>The system can help in identifying and managing risks associated with contracts, such as legal or financial risks. It can also ensure that the contracts comply with relevant regulations and policies, reducing the chances of legal disputes and non-compliance issues.</p>
                </div>
            </div>
        </div>
    </section>

    <!--About us Sectio-->

    <section id="about-us">
        <div class="container">
            <h1 class="title text-center">/WHY US?></h1>
            <div class="row">
                <div class="col-md-6 about-us">
                    <p class="about-title">Reasons:</p>
                    <ul>
                        <li>Intuitive User Interface</li>
                        <li>Dedicated Customer Support</li>
                        <li>Scalability and Flexibility</li>
                        <li>Ease of Implementation</li>
                        <li>Simplified</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="css/image/whyus.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!---find us-->

    <section id="social-media">
        <div class="container text-center">
            <p>/OUR SOCIALS></p>
            <div class="social-icons">
                <a href="#"><img src="css/image/fb.png"></a>
                <a href="#"><img src="css/image/insta.png"></a>
                <a href="#"><img src="css/image/linkdn.png"></a>
                <a href="#"><img src="css/image/twitter.png"></a>
                <a href="#"><img src="css/image/github.png"></a>
            </div>
        </div>
    </section>

    <!--footer-->

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-box">
                    <img src="css/image/logo.png">
                    <p>Our Contract Management System streamlines and centralizes the entire contract lifecycle, facilitating efficient contract creation, negotiation, execution, and analysis for enhanced oversight and compliance.</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>CONTACT-US</b></p>
                    <p><i class="fa fa-solid fa-location-dot"></i>South Cotabato (PHILIPPINES)</p>
                    <p><i class="fa fa-solid fa-phone"></i>+63 9163331597</p>
                    <p><i class="fa fa-solid fa-envelope"></i></i>ContractManagement@gmail.com</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>SEND US A MESSAGE</b></p>
                    <input type="text" class="form-control" placeholder="Sample..">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>

    </section>


</body>

</html>