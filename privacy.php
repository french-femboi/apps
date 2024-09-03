<!--- 

________/\\\\\\\\\_____/\\\\\\\\\_____/\\\\\\\\\\\\\\\_____/\\\\\\\\\_____/\\\\\\\\\\\\\____/\\\\\\\\\\\\\____/\\\\\\\\\\\\\\\_        
 _____/\\\////////____/\\\\\\\\\\\\\__\///////\\\/////____/\\\\\\\\\\\\\__\/\\\/////////\\\_\/\\\/////////\\\_\////////////\\\__       
  ___/\\\/____________/\\\/////////\\\_______\/\\\________/\\\/////////\\\_\/\\\_______\/\\\_\/\\\_______\/\\\___________/\\\/___      
   __/\\\_____________\/\\\_______\/\\\_______\/\\\_______\/\\\_______\/\\\_\/\\\\\\\\\\\\\/__\/\\\\\\\\\\\\\/__________/\\\/_____     
    _\/\\\_____________\/\\\\\\\\\\\\\\\_______\/\\\_______\/\\\\\\\\\\\\\\\_\/\\\/////////____\/\\\/////////__________/\\\/_______    
     _\//\\\____________\/\\\/////////\\\_______\/\\\_______\/\\\/////////\\\_\/\\\_____________\/\\\_________________/\\\/_________   
      __\///\\\__________\/\\\_______\/\\\_______\/\\\_______\/\\\_______\/\\\_\/\\\_____________\/\\\_______________/\\\/___________  
       ____\////\\\\\\\\\_\/\\\_______\/\\\_______\/\\\_______\/\\\_______\/\\\_\/\\\_____________\/\\\______________/\\\\\\\\\\\\\\\_ 
        _______\/////////__\///________\///________\///________\///________\///__\///______________\///______________\///////////////__


        Catappz made by Catpawz - 2024
--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta property="og:site_name" content="Catappz | PRIVACY">
    <meta property="og:title" content="Catappz | PRIVACY">
    <meta property="og:description" content="Catappz privacy policy">
    <meta name="description" content="Catappz privacy policy" />
    <meta property="og:image" content="/assets/favicon.png">
    <meta content="#a443d1" data-react-helmet="true" name="theme-color">
    <title>Catappz | PRIVACY</title>
    <link rel="icon" href="/assets/favicon.png">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="background nomobile">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="modal" class="modal">
        <span class="close" onclick="closeModal()"><span class="material-symbols-outlined icon-nav">close</span></span>
        <img class="modal-content" id="modalImage">
    </div>
    <div class="header">
        <?php include 'inc/header-text.php'; ?>
    </div>
    <div class="page">
        <div class="inner-nav">
            <a class="nav-link-l" style="cursor: pointer;" onclick="window.history.back();"><span class="material-symbols-outlined icon-nav">arrow_back</span>BACK</a>
            <a class="nav-link-c" href="/"><span class="material-symbols-outlined icon-nav">home</span>HOME</a>
            <a class="nav-link-r" href="mailto:catpawz@catpawz.eu"><span class="material-symbols-outlined icon-nav">contact_support</span>REQUEST CHANGE/ REPORT ISSUE</a>
        </div>
        <div class="inner-card">
            <p>LAST UPDATE: 20/05/2024</p>
        </div>
        <div class="page-inner-content">

            <h1>PRIVACY POLICY</h1>


            <div class="separator"></div>
        </div>

        <?php include 'inc/footer.php'; ?>
    </div>

    <div class="scrollbar-container">
            <div class="scrollbar-thumb" id="scrollbar-thumb"></div>
    </div>
</body>
<script>
    let modal;
    let modalImage;

    const body = document.body;

    window.onload = function() {
    modal = document.getElementById("modal");
    modalImage = document.getElementById("modalImage");
    }

    function openModal(img) {
    modal.style.display = "block";
    modalImage.src = img.src;
    body.classList.add('modal-open');
    }

    function closeModal() {
    modal.style.display = "none";
    body.classList.remove('modal-open');
    }
</script>
<script>
window.addEventListener('scroll', function() {
  const scrollbar = document.querySelector('.scrollbar-thumb');
  const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrollTop = document.documentElement.scrollTop;
  const thumbWidth = (scrollTop / scrollHeight) * 100;
  scrollbar.style.width = `${thumbWidth}%`;
});
</script>

</html>