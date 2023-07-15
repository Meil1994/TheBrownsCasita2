<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>The Browns Casita</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
    rel="stylesheet"
  />

  <script src="//unpkg.com/alpinejs" defer></script>
  <style>
    body {
      font-family: "Work Sans", sans-serif;
    }

    .static-image {
    animation: none;
}
    



</style>

<script>
    fetch('/home')
      .then(response => response.text())
      .then(content => {
        const parser = new DOMParser();
        const homePage = parser.parseFromString(content, 'text/html');
        const homeScripts = homePage.querySelectorAll('script');
        const targetScripts = document.querySelectorAll('script');
        targetScripts.forEach(script => script.remove());
        homeScripts.forEach(script => document.body.appendChild(script));
      })
      .catch(error => {
        console.error('Failed to load home page:', error);
      });

    setTimeout(function() {
      window.location.href = '/home';
    }); 
  </script>

</head>
<body>


  <div class="flex justify-center items-center h-screen overflow-hidden bg-slate-700">
    <div>

      <div class="flex justify-center">
        <svg class="absolute animate-spin text-slate-900 rounded-full bg-white" style="height: 130px; width:130px; margin-top:-9px;" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 0012 20c4.411 0 8-3.589 8-8h-4a3.999 3.999 0 01-3.995-3.8L12 8V2.01C6.477 2.245 2.245 6.477 2.01 12H6v5.291z"></path>
        </svg>
      </div>


      <div class="flex justify-center" style="margin-bottom: -40px;">
        <img class="rounded-full w-28 h-28 static-image absolute" src="{{asset('images/tbc.png')}}" alt="TBC">
      </div>
        <div class="p-2 rounded-full bg-green-800 animate-ping">
          <div class="p-2 rounded-full bg-amber-700 animate-ping">
            <div class="p-2 rounded-full bg-red-600 animate-ping">
              <div class="p-2 rounded-full bg-amber-500 animate-ping">
                <div class="p-2 rounded-full bg-indigo-400 animate-ping">
                  <div class="p-2 rounded-full bg-green-300 animate-ping">
                    <div class="p-2 rounded-full bg-slate-400 animate-ping">
                      <div class="p-2 rounded-full bg-slate-500 animate-ping">
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-white text-xl text-center mt-7">Loading..</p>
    </div>
</div>

  
</body>
</html>