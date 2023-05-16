<!DOCTYPE html>
<html lang="en">

    <?php 
    include('includes/header.php');
    include('includes/topbar.php');
    include('includes/navbar.php');
    
    ?>
<body>   
    <!-- Page Header Start -->
    <div class="container-fluid p-5" style="background-color:#1E1E2C ;">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Activities</h1>
                <a href="" style="color: #FBB914;">Home</a>
                <i class="far fa-square px-2" style="color: #FBB914;"></i>
                <a href="" style="color: #FBB914;">Activities</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">What We Offer</h1>
            <hr class="w-25 mx-auto " style="background-color: #FBB914;">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center  text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;background-color: #0A3370;">
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Research</h3>
                    <p class="mb-0">We design research protocols, inventory systems and storage procedures as well as disseminate research and study reports.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center  text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px; background-color: #0A3370;">
                        <i class="fa fa-chart-pie fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Socio-economic surveys</h3>
                    <p class="mb-0">We design and administer appropriate questionnaires based on the overall objectives of each socio-economic survey. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center  text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;background-color: #0A3370;">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Policy Analysis</h3>
                    <p class="mb-0">We provide ample opportunities for scholars and practitioners to develop capacity for policy formulation, analysis and review for purposes of guiding implementation of sustainable economic development strategies. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center  text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;background-color: #0A3370;">
                        <i class="fa fa-chart-area fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Consultancy</h3>
                    <p class="mb-0">We offer highly professional consultancy services (for fees) to institutions involved in the field of Sustainable Community Economic Development.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;background-color: #0A3370;">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Training</h3>
                    <p class="mb-0">CediA Africa proposes curricula and training programs such as thematic and topical institutes, roundtables, and short-courses.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center  text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;background-color: #0A3370;">
                        <i class="fa fa-newspaper fa-2x"></i>
                    </div>
                    <h3 class="mb-3">Publications</h3>
                    <p class="mb-0">CediA Africa commissions short papers, position papers, and research papers in line with the Community Economic Development (CED) best Practices.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Request A Service</h1>
                <p class="mb-4">Our goal is to spearhead discussions revolving around the need and the potential to promote people’s empowerment.</p>
                <form>
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="form-floating-1" placeholder="John Doe">
                                <label for="form-floating-1">Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="form-floating-2" placeholder="name@example.com">
                                <label for="form-floating-2">Email address</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                    <option selected>Consultancy</option>
                                    <option value="1">Research</option>
                                    <option value="2">Socio-economic surveys</option>
                                    <option value="3">Training</option>
                                    <option value="4">Policy Analysis</option>
                                    <option value="5">Publications</option>
                                </select>
                                <label for="floatingSelect">Select A Service</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn  w-100 h-100" type="submit" style="background-color: #FBB914;color: white;">Request A Service</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    

    <!-- Footer Start -->
    <?php 
    include('includes/footer.php');
    
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" style="background-color: #FBB914; color: white;"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>