<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;400&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/12e77b0106.js" crossorigin="anonymous"></script>

</head>
<body>
    @include('checkout.Body-checkout')
    

    <script>
      const totalDaysInput = document.getElementById("totalDays");
      const pricePerDay = parseFloat(document.querySelector(".form-group:nth-child(2) input").value);
      const discountSelect = document.querySelector("select[name=discount]");
    
      document.getElementById('checkin').addEventListener('change', updateTotalDays);
      document.getElementById('checkout').addEventListener('change', function() {
      updateTotalDays();
      discountSelect.value = 0;
    });
      document.querySelector("select[name=discount]").addEventListener('change', updateTotalAmount);
    
      function updateTotalDays() {
      var checkinDate = document.getElementById('checkin').value;
      var checkoutDate = document.getElementById('checkout').value;
      var totalDaysInput = document.getElementById('totalDays');
      var pricePerDay = parseFloat(document.getElementById('pricePerDay').value);
      var totalAmountInput = document.getElementById('totalAmount');
      var discount = parseInt(document.getElementById('discount').value);
      
        if (checkinDate && checkoutDate && new Date(checkoutDate) >= new Date(checkinDate)) {
          var totalDays = Math.ceil((new Date(checkoutDate) - new Date(checkinDate)) / (1000 * 60 * 60 * 24));
          if (totalDays < 1) {
            totalDays = 1;
          }
          totalDaysInput.value = totalDays;

          var totalAmount = totalDays * pricePerDay;
          if (totalDays >= 7) {
            totalAmount *= (1 - (discount / 100));
          }
          totalAmountInput.value =totalAmount;

          updateDiscountAvailability();
        } else {
          totalDaysInput.value = "";
          totalAmountInput.value = "";
          alert("Please make sure that the checkin and checkout dates are properly set.");
          document.querySelector("select[name=discount]").setAttribute("disabled", true);
        }
      }

      function updateDiscountAvailability() {
        if (totalDaysInput.value >= 7) {
          discountSelect.removeAttribute("disabled");
        } else {
          discountSelect.setAttribute("disabled", true);
        }
      }

      function updateTotalAmount() {
        const totalDays = totalDaysInput.value;
        const discountValue = discountSelect.value;
        const pricePerDay = parseFloat(document.getElementById('pricePerDay').value);
        const discount = parseInt(discountValue.replace('%', ''));
        const totalAmount = (totalDays * pricePerDay) * (1 - (discount / 100));
        document.getElementById("totalAmount").value =totalAmount;
      }

      updateTotalDays();
      
      function showPaypal() {
        document.getElementById("paypal").style.display = "flex";
        document.getElementById("card").style.display = "none";
      }

      function showCard() {
        document.getElementById("paypal").style.display = "none";
        document.getElementById("card").style.display = "flex";
      }

      function toggleDropdown() {
        var dropdownContent = document.getElementById("dropdown-content");
        if (dropdownContent.style.display === "none") {
          dropdownContent.style.display = "flex";
          document.addEventListener('click', closeDropdown);
        } else {
          dropdownContent.style.display = "none";
          document.removeEventListener('click', closeDropdown);
        }
      }

      function closeDropdown(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdownContent = document.getElementById("dropdown-content");
          dropdownContent.style.display = "none";
          document.removeEventListener('click', closeDropdown);
        }
      }


      showPaypal();


    </script> 
</body>
</html>


