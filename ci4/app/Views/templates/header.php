<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if (lcfirst($title) !== "dtcempron") {
            echo "<title>dtcempron | " . lcfirst($title) . "</title>";
        } else {
            echo "<title>dtcempron</title>";
        }
    ?>
    <!-- Inter font cdn -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Tailwind CSS cdn -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/style.css">
    <!-- APC logo -->
    <link rel="icon" href="https://www.apc.edu.ph/wp-content/uploads/2019/05/cropped-apc-icon-192x192.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="https://www.apc.edu.ph/wp-content/uploads/2019/05/cropped-apc-icon-180x180.png"/>
</head>
<body>
    <!-- Navigation bar  -->
    <nav>
        <!-- Home  -->
        <div class="left-side">
            <a id="home" href="/lab3/ci4/public/">dtcempron</a>
            <a id="films" href="/lab3/ci4/public/films">films</a>
        </div>
        <!-- Socials  -->
        <div class="right-side">
            <a href="https://www.linkedin.com/in/danzielc/" target="_blank"><img id="linkedin" src="<?php echo base_url(); ?>IMAGES/linkedin-box-fill.png" alt="LinkedIn Icon"></a>
            <a href="https://github.com/Dnzldotexe/" target="_blank"><img id="github" src="<?php echo base_url(); ?>IMAGES/github-fill.png" alt="GitHub Icon"></a>
        </div>
    </nav>
