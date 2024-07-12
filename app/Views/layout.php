<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <header>
        <!-- Header Anda -->
        <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <!-- Navigasi Anda-->
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/experience">Experience</a></li>
         </ul>
    </nav>

    <main>
        <!-- Konten utama dirender disini-->
         <?= $this->renderSection('content')?>
    </main>

    <footer>
        <!-- Footer Anda -->
         <p>
         © 2024 My Website. All rights reserved</p>
         </p>
    </footer>
</body>
</html>