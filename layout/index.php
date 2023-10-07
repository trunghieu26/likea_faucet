<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LIKEA FAUCET</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../media/css/bootstrap.min.css">
    <link rel="stylesheet" href="../media/css/common.css">
    <link rel="stylesheet" href="../media/css/left-sidebar.css">
    <link rel="stylesheet" href="../media/css/main-page.css">
    <link rel="stylesheet" href="../media/css/header.css">
    <link rel="stylesheet" href="../media/css/chat-main.css">
</head>

<body>
    <section class="container-fluid">
        <section class="wrapper row">
            <div class="col-xl-2 px-0 d-none d-xl-block">
                <?php include_once '../layout/left-sidebar.php'; ?>
            </div>
            <section class="main-container col-xl-10 col-12">
                <div class="row">
                    <?php include_once '../layout/header.php'; ?>
                    <div class="col-xxl-9 col-12">
                        <?php include_once '../layout/main.php'; ?>
                    </div>
                    <div class="col-xxl-3 right-chat d-none d-xxl-block">
                        <?php include_once '../layout/chat-main.php'; ?>

                    </div>
                </div>
            </section>
        </section>
    </section>
    <button class="icon-message-circle">
        <xml version="1.0" ?><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #da3380;
                        }

                        .cls-2 {
                            fill: #f55fa6;
                        }

                        .cls-3 {
                            fill: #f2f2f2;
                        }

                        .cls-4 {
                            fill: #6c2e7c;
                        }
                    </style>
                </defs>
                <g id="Icons">
                    <path class="cls-1" d="M22.94,20.51a2.006,2.006,0,0,1-2.43,2.43l-3.88-.97A10.986,10.986,0,0,1,1,12a10.827,10.827,0,0,1,.29-2.5,11,11,0,0,1,21.42,0A10.827,10.827,0,0,1,23,12a11.014,11.014,0,0,1-1.03,4.63Z" />
                    <ellipse class="cls-2" cx="12" cy="9.5" rx="10.71" ry="8.5" />
                    <circle class="cls-3" cx="8" cy="12" r="2" />
                    <circle class="cls-3" cx="16" cy="12" r="2" />
                </g>
                <g data-name="Layer 4" id="Layer_4">
                    <path class="cls-4" d="M12,0a12,12,0,0,0,0,24,11.868,11.868,0,0,0,4.723-.978l3.548.887a3.062,3.062,0,0,0,.738.091,3,3,0,0,0,2.9-3.729l-.887-3.548A11.868,11.868,0,0,0,24,12,12.013,12.013,0,0,0,12,0Zm9,16.873.97,3.883a1,1,0,0,1-1.212,1.212L16.873,21a1.01,1.01,0,0,0-.243-.03,1,1,0,0,0-.422.093A9.9,9.9,0,0,1,12,22,10,10,0,1,1,22,12a9.9,9.9,0,0,1-.939,4.208A1,1,0,0,0,21,16.873Z" />
                    <path class="cls-4" d="M8,9a3,3,0,1,0,3,3A3,3,0,0,0,8,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,8,13Z" />
                    <path class="cls-4" d="M16,9a3,3,0,1,0,3,3A3,3,0,0,0,16,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,16,13Z" />
                </g>
            </svg>
    </button>
    <?php include_once '../layout/bottom.php'; ?>