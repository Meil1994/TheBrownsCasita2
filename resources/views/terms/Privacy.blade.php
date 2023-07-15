<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Privacy Policy</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
      font-family: "Work Sans", sans-serif;
    }
    </style>
</head>
<body>
    @include('components.Nav')
    <div class="h-screen overflow-auto bg-gradient-to-b from-stone-900/90 to-slate-600/50">
        <p class="text-white text-2xl text-center mt-20 underline underline-offset-8">Privacy Policy</p>
        <div class="pt-10 p-2 439:m-10 439:pt-10 1000:p-60 1000:pb-10 1000:pt-10">
          <div class="border-2 p-4 sms:p-10 border-slate-300 text-white ring-2">
              <p>
                This Privacy Policy describes how The Browns Casita ("we," "us," or "our") collects, uses, 
                and shares personal information when you use our website <span class="text-amber-500">www.thebrownscasita.com</span> ("Site") 
                or our services.
              </p>
              <p class="mt-7 text-amber-500">1. Information We Collect</p>
              <p class="mt-7">1.1 Personal Information</p>
              
              <p>
                We may collect the following personal information from you:
              </p>
              <p>* Full name</p>
              <p>* Email address</p>
              <p>* Contact number</p>


              <p class="mt-7">1.2 Usage Data</p>
              <p>
                We may also collect non-personal information about how you interact with our Site. 
                This information may include your browser type, IP address, pages visited, and other 
                usage data.
              </p>

              <p class="mt-7 text-amber-500">2. Use of Information</p>
              <p class="mt-7">2.1 Providing Services</p>
              <p>We may use the personal information we collect to provide the services you request, 
                such as processing your bookings, sending booking confirmations, and responding to 
                your inquiries.
              </p>
              <p class="mt-7">2.2 Communication</p>
              <p>
                We may use your personal information to communicate with you regarding your 
                bookings, updates, promotions, and other information related to our services. 
                You can opt-out of receiving these communications at any time.
              </p>
              <p class="mt-7">2.3 Analytics and Improvements</p>
              <p>
                We may use non-personal information for analytical purposes, such as analyzing trends, 
                administering the Site, and improving our services.
              </p>

              <p class="mt-7 text-amber-500">3. Data Sharing</p>
              <p class="mt-7">3.1 Service Providers</p>
              <p>
                We may share your personal information with trusted third-party service providers 
                who assist us in operating our business and providing services to you. 
                These service providers are obligated to protect your information and only use it 
                for the specified purposes.
              </p>
              <p class="mt-7">3.2 Legal Requirements</p>
              <p>
                We may disclose your personal information if required by law, regulation, or 
                legal process, or if we believe it is necessary to protect our rights, property, 
                or safety.
              </p>

              <p class="mt-7 text-amber-500">4. Data Retention</p>
              <p class="mt-4">
                We will retain your personal information for as long as necessary to fulfill the 
                purposes outlined in this Privacy Policy, unless a longer retention period is 
                required or permitted by law.
              </p>
          
              <p class="mt-7 text-amber-500">5. Data Security</p>
              <p class="mt-4">
                We take reasonable measures to protect the security of your personal information. 
                However, please be aware that no method of transmission over the internet or 
                electronic storage is completely secure.
              </p>

              <p class="mt-7 text-amber-500">6. Your Rights</p>
              <p class="mt-4">
                You have the right to access, update, or delete your personal information. 
                If you wish to exercise these rights or have any questions or concerns about our 
                privacy practices, please contact us using the information provided below.
              </p>

              <p class="mt-7 text-amber-500">7. Changes to the Privacy Policy</p>
              <p class="mt-4">
                We reserve the right to modify or update this Privacy Policy at any time. 
                We will post the revised policy on our Site with the updated effective date.
              </p>

              <p class="mt-7 text-amber-500">8. Contact Us</p>
              <p>
                If you have any questions, comments, or requests regarding these Terms, please contact us at: 09076214666
              </p>

              <p class="mt-7">The Browns Casita</p>
              <p>thebrownscasita@gmail.com</p>

              <div class="mt-10">
                <p>Read our <a class="text-amber-500 underline underline-offset-4" href="/terms">Terms of Use</a>.</p>
              </div>
            </div>
        </div>
    </div>
    
</body>
</html>