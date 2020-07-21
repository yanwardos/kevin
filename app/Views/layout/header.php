<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Sistem Monitoring Listrik ITERA</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
    <!-- HEADER BAR SECTION -->
    <div id="section-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Monitoring Listrik ITERA</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <!-- penambahan ml-auto agar menu ke kanan -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link js-scroll-trigger text-light" href="#Home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger text-light" href="#Test2">Test 1</a>
                </li>
                
                <!-- Penambahan menu bar dengan drop down -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#test3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Test 2
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="uji1">Uji 1</a>
                    <a class="dropdown-item" href="uji2">Uji 2</a>
            
                    <!-- penambahan divider agar menu seperti ada border -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="uji3">Uji 3</a>
                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger text-light" href="About" >About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger text-light" href="<?php base_url()?>/monitoring">Monitoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger text-light" href="<?php base_url()?>">Login</a>
                </li>
                <li>
                <!--Penambahan Font Awesome : ml = margin left;t = top; jika mau ubah warna hpus text-white dan ubah di css-->
                <i class="fab fa-youtube text-white ml-3 mt-2 "></i>
                <i class="fab fa-facebook ml-3 mt-2"></i>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>


