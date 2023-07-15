<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>

    <style>
      body {
    font-family: "Work Sans", sans-serif;
  }
  </style>
</head>
<body>
    @include('checkout.Nav')
    @include('checkout.Body-checkout')
    @include('components.Footer')
    

    <script>
      const totalDaysInput = document.getElementById("totalDays");
      const discountSelect = document.querySelector("select[name=discount]");
      const totalAmountInput = document.getElementById("totalAmount");
      const pricePerDayInput = document.getElementById("pricePerDay");

      document.getElementById("checkin").addEventListener("change", updateTotalDays);
      document.getElementById("checkout").addEventListener("change", function () {
        updateTotalDays();
        discountSelect.value = 0;
      });
      document.querySelector("select[name=discount]").addEventListener("change", updateTotalAmount);

      function updateTotalDays() {
        const checkinDate = document.getElementById("checkin").value;
        const checkoutDate = document.getElementById("checkout").value;

        if (checkinDate && checkoutDate && new Date(checkoutDate) >= new Date(checkinDate)) {
          const totalDays = Math.ceil((new Date(checkoutDate) - new Date(checkinDate)) / (1000 * 60 * 60 * 24));
          if (totalDays < 1) {
            totalDays = 1;
          }
          totalDaysInput.value = totalDays;

          const pricePerDay = getPricePerDay(checkinDate, checkoutDate);
          pricePerDayInput.value = pricePerDay;

          let totalAmount = totalDays * pricePerDay;
          if (totalDays > 6) {
            totalAmount -= pricePerDay;
          }
          totalAmountInput.value = totalAmount;

          updateDiscountAvailability(totalDays);
        } else {
          totalDaysInput.value = "";
          totalAmountInput.value = "";
          alert("Please make sure that the check-in and check-out dates are properly set.");
          disableDiscount();
        }
      }

      function getPricePerDay(checkinDate, checkoutDate) {
        const checkinDay = new Date(checkinDate).getDay();
        const checkoutDay = new Date(checkoutDate).getDay();

        if (checkinDay >= 1 && checkinDay <= 5 && checkoutDay >= 1 && checkoutDay <= 5) {
          return 3300; // Weekdays (Monday to Friday)
        } else {
          return 3500; // Weekends (Saturday and Sunday)
        }
      }

      function updateDiscountAvailability(totalDays) {
        fetch("/is-first-time-booker")
          .then((response) => response.json())
          .then((data) => {
            const isFirstTimeBooker = data.isFirstTimeBooker;
            if (isFirstTimeBooker) {
              enableDiscount();
            } else {
              disableDiscount();
            }
          })
          .catch((error) => {
            console.error("Error fetching first-time booker status:", error);
          });
      }

      function enableDiscount() {
        discountSelect.removeAttribute("disabled");
      }

      function disableDiscount() {
        discountSelect.setAttribute("disabled", true);
        discountSelect.value = 0;
      }

      function updateTotalAmount() {
        const totalDays = totalDaysInput.value;
        const discountValue = discountSelect.value;
        const discount = parseInt(discountValue.replace("%", ""));
        const pricePerDay = parseFloat(pricePerDayInput.value);
        let totalAmount = totalDays * pricePerDay * (1 - discount / 100);

        totalAmountInput.value = totalAmount;
      }

      updateTotalDays();
    </script>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>


