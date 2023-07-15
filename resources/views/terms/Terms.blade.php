<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>TBC Terms of Use</title>
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
        <p class="text-white text-2xl text-center mt-20 underline underline-offset-8">Terms of Use</p>
        <div class="pt-10 p-2 439:m-10 439:pt-10 1000:p-60 1000:pb-10 1000:pt-10">
          <div class="border-2 p-4 sms:p-10 border-slate-300 text-white">
              <p>
                Please read these Terms of Use ("Terms") carefully before using <span class="text-amber-500">www.thebrownscasita.com</span> 
                ("Site") operated by The Browns Casita ("we," "us," or "our"). By accessing or using 
                the Site, you agree to be bound by these Terms. If you do not agree with any part of 
                these Terms, you may not access or use the Site.
              </p>
              <p class="mt-7 text-amber-500">1. Site Use</p>
              <p class="mt-7">1.1 Eligibility</p>
              
              <p>
                You must be at least 18 years old to use this Site. 
                By using the Site, you represent and warrant that you are of legal age to enter into these 
                Terms and to comply with all applicable laws and regulations.
              </p>
              <p class="mt-7">1.2 Site Access</p>
              <p>
                We grant you a limited, non-exclusive, non-transferable, 
                and revocable license to access and use the Site for personal and non-commercial purposes. 
                You may not modify, distribute, transmit, display, perform, reproduce, publish, license, 
                create derivative works from, transfer, or sell any information, software, products, or 
                services obtained from the Site.
              </p>

              <p class="mt-7 text-amber-500">2. User Content</p>
              <p class="mt-7">2.1 Responsibility</p>
              <p>You are solely responsible for any content you post, submit, or share on the Site 
                ("User Content"). You agree that your User Content complies with applicable 
                laws and regulations and does not infringe upon the rights of any third party.
              </p>
              <p class="mt-7">2.2 License</p>
              <p>
                By posting User Content on the Site, you grant us a worldwide, royalty-free, 
                perpetual, irrevocable, non-exclusive, transferable license to use, reproduce, 
                modify, adapt, publish, translate, distribute, and display your User Content in 
                any media.
              </p>

              <p class="mt-7 text-amber-500">3. Intellectual Property</p>
              <p class="mt-7">3.1 Ownership</p>
              <p>
                The Site and its content, including but not limited to text, graphics, images, 
                logos, and software, are owned by us and protected by intellectual property laws. 
                You may not use, reproduce, distribute, modify, or create derivative works of any 
                content on the Site without our prior written consent.
              </p>
              <p class="mt-7">3.2 Trademarks</p>
              <p>
                "The Browns Casita" and our logo are trademarks owned by us. You may not use our trademarks in connection 
                with any product or service without our express written permission.
              </p>

              <p class="mt-7 text-amber-500">4. Limitation of Liability</p>
              <p class="mt-4">To the fullest extent permitted by law, we shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or in connection with your use of the Site, even if we have been advised of the possibility of such damages.</p>
          
              <p class="mt-7 text-amber-500">5. Links to Third-Party Websites</p>
              <p class="mt-4">
                The Site may contain links to third-party websites that are not owned or controlled by us.
                 We have no control over the content, privacy policies, or practices of any third-party 
                 websites. We assume no responsibility for the content or services of these third-party 
                 websites and encourage you to review their respective terms and privacy policies.
              </p>

              <p class="mt-7 text-amber-500">6. Modification and Termination</p>
              <p class="mt-4">
                We reserve the right to modify, suspend, or terminate the Site or any part thereof, 
                at any time without prior notice. We may also modify these Terms at any time, and 
                any changes will be effective immediately upon posting on the Site. Your continued 
                use of the Site after any modifications to the Terms constitutes your acceptance of 
                the modified Terms.
              </p>

              <p class="mt-7 text-amber-500">7. Governing Law</p>
              <p class="mt-4">
                These Terms shall be governed by and construed in accordance with the laws of the Republic of the Philippines. 
                Any disputes arising out of or in connection with these Terms shall be subject to the exclusive 
                jurisdiction of the courts of the Republic of the Philippines.
              </p>

              <p class="mt-7 text-amber-500">8. Contact Us</p>
              <p>
                If you have any questions, comments, or requests regarding these Terms, please contact us at: 09076214666
              </p>

              <p class="mt-7">The Browns Casita</p>
              <p>thebrownscasita@gmail.com</p>

              <div class="mt-10">
                <p>Read our <a class="text-amber-500 underline underline-offset-4" href="/privacy">Privacy Policy</a>.</p>
              </div>
            </div>
        </div>
    </div>
</body>
</html>