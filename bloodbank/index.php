<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Donation System | home page"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A+</div>
                    <div class="card-body">
                        A+ can give to: A+ and AB+.
                    </div>
					<div class="card-body">
                        Can receive from : A+, A-, O+ and O-.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
                        A- can give blood to: A-, A+, AB-, and AB+.
                    </div>
					<div class="card-body">
                        Can receive blood from : A- and O-.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
                        B+ can give blood to: A+ and AB+.
                    </div>
					<div class="card-body">
                        Can receive blood from : A+, A-, O+, and O-.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
                        B- can give blood to: B-, B+, AB+, and AB-.
                    </div>
					<div class="card-body">
                        Can receive blood from : B- and O-.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
                        AB+ can give blood to: AB only.
                    </div>
					<div class="card-body">
                        Can receive blood from : Any.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body">
                        AB- can give blood to: AB- and AB+.
                    </div>
					<div class="card-body">
                        Can receive blood from : All negative blood types.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
                        O+ can give blood to: A+, B+, O+, and AB+.
                    </div>
					<div class="card-body">
                        Can receive blood from : Any.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
                        O- can give blood to: A+, A-, B+, B-, O+, O-, AB-, and AB+.
                    </div>
					<div class="card-body">
                        Can receive blood from : O- only.
                    </div>
                </div>
            </div>
            </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Ask for Help</div>
                <div class="card-body">
                   <center>ourblood@ust.edu.ph</center>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>
</html>