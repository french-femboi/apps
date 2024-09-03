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
    <meta property="og:site_name" content="Catappz | VIEW">
    <meta property="og:title" content="Catappz | VIEW">
    <meta property="og:description" content="">
    <meta name="description" content="" />
    <meta property="og:image" content="assets/favicon.png">
    <meta content="#a443d1" data-react-helmet="true" name="theme-color">
    <title>Catappz | VIEW</title>
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
        <img src="" id="app_icon" alt="App Icon" class="app-icon nomobile">
        <div class="nextoapp">
            <h1 style="font-size: 50px;" id="app_name">-</h1>
            <p style="font-size: 20px;">Made by <b id="author_name">-</b> | <a id="licence">-</a> | <a id="release_date">-</a></p>
        </div>
        <div class="inner-nav">
            <a class="nav-link-l" href="/"><span class="material-symbols-outlined icon-nav">arrow_back</span>BACK</a>
            <a class="nav-link-c nomobile" id="android_link" href=""><span class="material-symbols-outlined icon-nav">android</span>DOWNLOAD APK</a>
            <a class="nav-link-c nomobile" id="windows_link" href=""><span class="material-symbols-outlined icon-nav">desktop_windows</span>DOWNLOAD EXE</a>
            <a class="nav-link-c nomobile" id="author_email" href="mailto:"><span class="material-symbols-outlined icon-nav">contact_support</span>CONTACT AUTHOR</a>
            <a class="nav-link-c nomobile" id="source" href=""><span class="material-symbols-outlined icon-nav">code</span>SOURCE</a>
            <a class="nav-link-c" id="website" href=""><span class="material-symbols-outlined icon-nav">public</span>WEBSITE</a>
            <a class="nav-link-r" id="licence_link" href=""><span class="material-symbols-outlined icon-nav">policy</span>LICENCE</a>
        </div>
        <div class="inner-card">
            <p id="app_slogan">-</p>
        </div>
        <div class="page-inner-content">

            <h1>DESCRIPTION</h1>
            <p id="app_description">-</p>

            <div class="separator"></div>

            <h1>SCREENSHOTS</h1>
            <p>All screenshots are provided by the <b>app creator</b>, and aren't neccessarily checked upon publication!</p>

            <div class="gallery">
                <div class="gallery-item">
                    <img src="" alt="" onclick="openModal(this)">
                </div>
                <div class="gallery-item">
                    <img src="" alt="" onclick="openModal(this)">
                </div>
                <div class="gallery-item">
                    <img src="" alt="" onclick="openModal(this)">
                </div>
                <div class="gallery-item">
                    <img src="" alt="" onclick="openModal(this)">
                </div>
            </div>

            <div class="separator"></div>

            <h1>AUTHOR(S)</h1>
            <p>The authors of this app have worked on ideas, code, or just something small like motivation....</p>

            <ul id="authors-list">

            </ul>

            <div class="separator"></div>
        </div>

        <?php include 'inc/footer.php'; ?>

    </div>

    <div class="scrollbar-container">
        <div class="scrollbar-thumb" id="scrollbar-thumb"></div>
    </div>
</body>
<script>
    let url = new URL(window.location.href);
    let params = new URLSearchParams(url.search);
    let appName = params.get('app');

    fetch('assets/jsons/' + appName + '.json')
        .then(response => response.json())
        .then(data => {
            document.title = "CATAPPZ | " + data.app_name;

            document.getElementById('app_name').textContent = data.app_name;
            document.getElementById('author_name').textContent = data.author_name;
            document.getElementById('licence').textContent = data.licence;
            document.getElementById('release_date').textContent = data.release_date;
            document.getElementById('app_slogan').textContent = data.app_slogan;
            document.getElementById('app_description').textContent = data.app_description;

            document.getElementById("android_link").href = data.android_link;
            document.getElementById("windows_link").href = data.windows_link;
            document.getElementById("author_email").href = "mailto:" + data.author_email;
            document.getElementById("source").href = data.source;
            document.getElementById("website").href = data.website;
            document.getElementById("licence_link").href = data.licence_link;

            document.getElementById("app_icon").src = data.app_icon;

            const images = document.querySelectorAll('.gallery-item img');
            data.screenshots.forEach((screenshot, index) => {
                if (images[index]) {
                    images[index].src = screenshot.url;
                    images[index].alt = screenshot.alt;
                }
            });

            const authorsList = document.getElementById('authors-list');
            data.authors.forEach(author => {
                const li = document.createElement('li');
                li.innerHTML = `<b>${author.name}</b> ${author.url}`;
                authorsList.appendChild(li);
            });



        })
        .catch(error => {
                    console.error('There was a problem fetching the JSON file:', error);
                    // Redirect to another page if JSON file is not found
                    window.location.replace('/no-json'); // Replace with your error page URL
                });
</script>
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