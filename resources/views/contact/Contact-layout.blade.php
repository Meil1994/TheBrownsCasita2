<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
   

</head>
<body>
    @include('contact.Contact-header')
    @include('contact.Contact-body')

    <script>
        const profileButton = document.querySelector('#profileButton');
        const profileMenu = document.querySelector('#profileMenu');
    
        profileButton.addEventListener('click', () => {
        profileMenu.classList.toggle('hidden');
        });
    
        document.addEventListener('click', (event) => {
        const isClickInsideButton = profileMenu.contains(event.target);
        const isClickOnProfile = event.target.closest('#profileButton');
    
        if (!isClickOnProfile && !isClickInsideButton) {
            profileMenu.classList.add('hidden');
        }
        });
        
    </script>
</body>
</html>