<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="styles.css"> <!-- Gantilah dengan path atau URL yang sesuai -->
</head>

<body>

    <!-- Include Header -->
    <?php include "header.php"; ?>

    <div class="container animated">
        <img id="profile-pic" src="Foto.jpg" alt="Profile Picture">
        <p>
            Hello Saya Slamet Aprianto Saya Seorang Mahasiswa Semester 5 di Universitas Islam Kalimantan Muhdammad Arsyad Albanjari
            Program Studi Teknik Informatika. Saya memiliki ketertarikan permrograman sejak SMK.
        </p>
    </div>

    <!-- Include Footer -->
    <?php include "footer.php"; ?>

    <!-- Optional: Add JavaScript for additional interactivity -->
    <script>
        // Example: Add a simple hover effect on the profile picture
        const profilePic = document.getElementById('profile-pic');

        profilePic.addEventListener('mouseover', () => {
            profilePic.style.transform = 'scale(1.1)';
            profilePic.style.transition = 'transform 0.3s ease-out';
        });

        profilePic.addEventListener('mouseout', () => {
            profilePic.style.transform = 'scale(1)';
            profilePic.style.transition = 'transform 0.3s ease-out';
        });
    </script>

</body>

</html>