
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="studentcss.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div id="sectionhome">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://res.cloudinary.com/dq4f6ppsx/image/upload/v1607495790/logo_jhfcld.jpg" class="food-munch-logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active custom-nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        <a class="nav-link custom-nav-link" href="#" onclick="display('sectionmenu')">Mess Menu</a>
                        <a class="nav-link custom-nav-link" href="#">Payment</a>
                        <a class="nav-link custom-nav-link" href="#" onclick="display('sectionexpense')">Expense Tracker</a>
                        <a class="nav-link custom-nav-link" href="./rating.html">Mess Review</a>
                        <a class="nav-link custom-nav-link" href="#">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="banner-section-bg-container d-flex flex-column justify-content-center">
            <div class="text-center">
                <h1 class="banner-heading mb-3">
                    Don't Waste food
                </h1>
                <p class="banner-caption mb-4">
                    Eat smart & Healthy
                </p>
                <button class="btn btn-warning mr-5" style="color:white" onclick="display('sectionmenu')">View Menu</button>
                <button class="transparent" onclick="see_dues()">See Dues</button>
            </div>
        </div>
    </div>
    <div id="sectionmenu">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://res.cloudinary.com/dq4f6ppsx/image/upload/v1607495790/logo_jhfcld.jpg" class="food-munch-logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active custom-nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        <a class="nav-link custom-nav-link" href="#" onclick="display('sectionhome')">Home</a>
                        <a class="nav-link custom-nav-link" href="#">Payment</a>
                        <a class="nav-link custom-nav-link" href="#" onclick="display('sectionexpense')">Expense Tracker</a>
                        <a class="nav-link custom-nav-link" href="./rating.html">Mess Review</a>
                        <a class="nav-link custom-nav-link" href="profile.php">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="explore-menu-section p-3">

            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1 class="menu-heading">
                            Explore menu
                        </h1>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="shadow menu-item-card p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-ginger-fried-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">D Mess</h1>
                            <?php $d = '4';?>
                            <a href="pr.php?id=<?php echo $d; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>

                             <a href="viewfeed.php?id1=<?php echo $d; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="shadow menu-item-card p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-veg-starters-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">E mess</h1>
                            <?php $e = '5';?>
                            <a href="pr.php?id=<?php echo $e; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $e; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="shadow menu-item-card p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-veg-starters-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">F mess</h1>
                            <?php $f = '6';?>
                            <a href="pr.php?id=<?php echo $f; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $f; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="menu-item-card shadow p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-soup-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">A mess</h1>
                            <?php $a = '1';?>
                            <a href="pr.php?id=<?php echo $a; ?>" class="menu-item-link">

                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $a; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="menu-item-card shadow p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-grilled-seafood-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">B mess</h1>
                            <?php $b = '2';?>
                            <a href="pr.php?id=<?php echo $b; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $b; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="menu-item-card shadow p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-mushroom-noodles-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">C mess</h1>
                            <?php $c = '3';?>
                            <a href="pr.php?id=<?php echo $c; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $c; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="menu-item-card shadow p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-gluten-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">G Mess</h1>
                            <?php $g = '7';?>
                            <a href="pr.php?id=<?php echo $g; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $g; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="menu-item-card shadow p-3 mb-3">
                            <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/em-coffee-bourbon-img.png" class="menu-item-image w-100" />
                            <h1 class="menu-card-title">Ih mess</h1>
                            <?php $ih = '8';?>
                            <a href="pr.php?id=<?php echo $ih; ?>" class="menu-item-link">
                                View Menu
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                             <a href="viewfeed.php?id1=<?php echo $ih; ?>" class="menu-item-link">
                                View Details
                                <svg width="16px" height="16px" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="#d0b200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="sectionexpense">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://res.cloudinary.com/dq4f6ppsx/image/upload/v1607495790/logo_jhfcld.jpg" class="food-munch-logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active custom-nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        <a class="nav-link custom-nav-link" href="#" onclick="display('sectionhome')">Home</a>
                        <a class="nav-link custom-nav-link" href="#">Payment</a>
                        <a class="nav-link custom-nav-link" href="#" onclick="display('sectionmenu')">Mess Menu</a>
                        <a class="nav-link custom-nav-link" href="./rating.html">Mess Review</a>
                        <a class="nav-link custom-nav-link" href="#">Profile</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="tip-calculator-container pb-5">
            <h1 class="tip-calculator-heading text-center mt-4 mb-4">Extras Calculator</h1>
            <img class="tip-calculator-image" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-dynamic-webapps/tip-calculator-img.png" />
            <h1 class="tip-calculator-heading text-center mt-4 mb-4">Monthly extras</h1>
            <h1 class="tip-calculator-heading text-center mt-4 mb-4">Rs <span id="amount">0</span>/-</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <p class="input-label mb-2">Extras taken</p>
                        <input type="text" id="billAmount" class="user-input" />
                    </div>



                    <div class="col-12 text-center mt-4">
                        <button class="btn btn-info calculate-tip-button mr-3" id="calculateButton" onclick="calculate()">Add</button>
                        <button class="btn btn-info calculate-tip-button" id="calculateButton" onclick="refresh()">Refresh</button>
                        <p class="error-message text-center" id="errorMessage"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>

</html>
