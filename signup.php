<?php
 include('include/header.php');
?>
<!-- Navbar-->

<div class="container">
    <div class="row align-items-center my-5">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="assets/picture/icons/thumbs-up.png" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
            <p class="font-italic text-muted mb-0">Information provided below will be used to sign in to your Appart Hôtel xxxx account.</p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="register.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row">
                    <!-- START: Profile Picture Upload Section -->
                    <div class="container mb-4 text-center">
                        <div class="profile-upload-container mx-auto">
                            <label for="wizard-picture" class="profile-picture-label">
                                <img src="assets/picture/icons/user.png" class="profile-picture-preview" id="wizardPicturePreview" alt="Profile Picture">
                                <div class="upload-overlay">Choisir une photo</div>
                            </label>
                            <input type="file" id="wizard-picture" name="profileImage" class="d-none" accept="image/*" required>
                        </div>

                        <!-- Error Message -->
                        <?php if (isset($_GET["error"])): ?>
                            <div class="text-danger mt-2"><?= $_GET["error"] ?></div>
                        <?php endif; ?>
                    </div>
                    <!-- END: Profile Picture Upload Section -->

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstname" placeholder="First Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastname" placeholder="Last Name" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <input id="phoneNumber" type="tel" name="contactno" pattern="^(05|06|07)[0-9]{8}$" placeholder="Numéro de téléphone (ex: 07xxxxxxxx)" class="form-control bg-white border-md border-left-0 pl-3" required>
                        </div>

                    <!-- Gender -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                        </div>
                        <select id="gender" name="gender" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <option value="">Choose your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="password" name="conformPassword" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" class="btn btn-primary btn-block py-2" name="user_registration">
                            <span class="font-weight-bold">Create your account</span>
                        </button>
                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

                    <!-- Social Login -->
                    

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" class="text-primary ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<?php include('include/footer.php')?>

<!-- CSS -->
<style>
.profile-upload-container {
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #007bff;
    transition: all 0.3s ease;
}

.profile-upload-container:hover {
    box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);
}

.profile-picture-label {
    cursor: pointer;
    display: block;
    height: 100%;
    position: relative;
}

.profile-picture-preview {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    transition: opacity 0.3s ease;
}

.upload-overlay {
    position: absolute;
    bottom: 0;
    background: rgba(0, 123, 255, 0.8);
    width: 100%;
    color: #fff;
    text-align: center;
    padding: 8px 0;
    font-size: 0.9rem;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.profile-upload-container:hover .upload-overlay {
    opacity: 1;
}
</style>

<!-- JavaScript -->
<script>
document.getElementById('wizard-picture').addEventListener('change', function(event) {
    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('wizardPicturePreview').src = e.target.result;
    }
    reader.readAsDataURL(event.target.files[0]);
});
</script>
