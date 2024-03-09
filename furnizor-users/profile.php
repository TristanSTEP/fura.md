<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styles.css">
    <script defer src="script-read.js"></script>
</head>

<body id="read">
    <main id="main-account">
        <div id="profile-management">
            <div id="profile-avatar">
                <h1>Profile</h1>
                <div class='avatar'>
                    <img src="https://elouwerse.nl/placecircle/200">
                </div>
                <div id="profile-avatar-text">
                    <h2>Macaron Croasan</h2>
                    <h3>LOAD PROVIDER</h3>
                </div>
            </div>
            <div class="profile-view">
                <div id="square">
                    <div id="text-content">
                        <a href="mailto:goshaz7c@gmail.com"><i class="fa-solid fa-envelope"></i>macaron@gmail.com</a>
                        <a href="tel:+37360053105"><i class="fa-solid fa-phone"></i>+373 (60) 05-31-05</a>
                        <a href="tel:+37360053105"><i class="fa-solid fa-location-dot"></i>Chisinau, MD</a>
                    </div>
                    <button id="delete"><i class="fa-regular fa-trash-can"></i>Delete profile</button>
                </div>
            </div>
        </div>
        <div id="loads-available">
            <h1>Available loads</h1>
            <div id="load-card">
                <h1>Denumirea</h1>
                <h2>Type</h2>
                <h3>Tonaj</h3>
                <h4>from A => to B</h4>
                <h5>Price $</h5>
                <button><i class="fa-solid fa-trash-can"></i></button>
            </div>
            <div id="load-card">
                <h1>Denumirea</h1>
                <h2>Type</h2>
                <h3>Tonaj</h3>
                <h4>from A => to B</h4>
                <h5>Price $</h5>
                <button><i class="fa-solid fa-trash-can"></i></button>
            </div>
            <div id="load-card">
                <h1>Denumirea</h1>
                <h2>Type</h2>
                <h3>Tonaj</h3>
                <h4>from A => to B</h4>
                <h5>Price $</h5>
                <button><i class="fa-solid fa-trash-can"></i></button>
            </div>
            <div id="load-card">
                <h1>Denumirea</h1>
                <h2>Type</h2>
                <h3>Tonaj</h3>
                <h4>from A => to B</h4>
                <h5>Price $</h5>
                <button><i class="fa-solid fa-trash-can"></i></button>
            </div>
            <div id="load-card">
                <h1>Denumirea</h1>
                <h2>Type</h2>
                <h3>Tonaj</h3>
                <h4>from A => to B</h4>
                <h5>Price $</h5>
                <button><i class="fa-solid fa-trash-can"></i></button>
            </div>
            <div id="load-card">
                <h1>Denumirea</h1>
                <h2>Type</h2>
                <h3>Tonaj</h3>
                <h4>from A => to B</h4>
                <h5>Price $</h5>
                <button><i class="fa-solid fa-trash-can"></i></button>
            </div>
        </div>
        <div id="update-delete">
            <!-- <button id='edit-btn' class="button"><i class="fa-solid fa-pencil"></i>Edit profile</button> -->
            <form id="form-read" style="display: block;">
                <div id="form-read-inputs">
                    <div class="basic">
                        <h2>Basic info</h2>
                        <input class="input" type="text" name="name" placeholder="Name" required>
                        <input class="input" type="lastname" name="lastname" placeholder="Lastname">
                    </div>
                    <div class="about">
                        <h2>About</h2>
                        <input class="input" type="email" name="email" placeholder="Email">
                        <input class="input" type="text" name="phone" placeholder="Phone number">
                    </div>
                    <div class="security">
                        <h2>Security</h2>
                        <input class="input" type="password" name="password" placeholder="Password">
                        <input class="input" type="password" name="password2" placeholder="Confirm password">
                    </div>
                </div>
                <div id="quick-actions">
                    <input type="submit" value="Save changes" id="save">
                    <!-- <button id="save">Save changes</button> -->
                    <button type="button" id="cancel">Cancel</button>
                </div>
            </form>
            <!-- move into form up back -->
        </div>
        <div id="confirm-delete-popup">
            <div class="delete-popup-content">
                <p>Are you sure you want to delete your account?</p>
                <div id="confirm-buttons">
                    <button id="confirm-yes">Delete Profile</button>
                    <button id="confirm-no">Cancel</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>