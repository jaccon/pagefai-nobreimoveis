<?php 
global $CONFIG;
$metaId = "5e55ab38-42ea-11ee-be56-0242ac120003";
$loader = CMS::getCMSSettings($metaId, "status");
?>

<?php if($loader == "enabled") { ?>

  <style>
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }
    
    .modal {
      background-color: white;
      border-radius: 10px;
      display: flex;
      min-width: 800px;
      min-height: 600px;
      overflow: hidden;
      position: relative;
    }
    
    .modal-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .close-button {
      position: absolute;
      top: 10px;
      left: 10px;
      cursor: pointer;
    }
    
    .left {
      width: 50%;
      padding: 20px;
      box-sizing: border-box;
      position: relative;
    }
    
    .right {
      position: relative;
      width: 50%;
      background: url('https://nobreimoveis.pagefai.com//assets/images/main-slides/bg-4.jpg') no-repeat center center / cover;
    }

    .right::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.8); 
    }
    
    form {
      display: flex;
      flex-direction: column;
      padding: 0 15px 15px; /* Add padding to the form */
    }

    form input {
      border: 1px #e3e3e3 solid;
      color: #777;
      padding: 10px;
    }
    
    label, input {
      margin-bottom: 10px;
    }

    .pagefaiFormSubmit {
    background: #000;
    border: 1px #000 solid;
    padding: 10px;
    color: #fff;
    border-radius: 10px;
    width: 50%;
    text-align: center;
}

    .modalText {
      padding: 15px 20px 0;
    }

  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let countdown = 10; // Countdown in seconds

      function updateCountdown() {
        console.log(countdown, "seconds");
        countdown--;

        if (countdown === 0) {
          const preventModalCookie = getCookie("preventModalCookie");
          if (!preventModalCookie) {
            document.querySelector(".overlay").style.display = "flex";
          }
        } else {
          setTimeout(updateCountdown, 1000); // Update every 1 second
        }
      }

      updateCountdown();

      document.querySelector(".close-button").addEventListener("click", function() {
        document.querySelector(".overlay").style.display = "none";

        const expirationDate = new Date();
        expirationDate.setFullYear(expirationDate.getFullYear() + 1);
        document.cookie = `preventModalCookie=true; expires=${expirationDate.toUTCString()}; path=/;`;
      });

      document.querySelector("#submit").addEventListener("click", function(event) {
          event.preventDefault();
          const name = document.querySelector("#name").value;
          const phone = document.querySelector("#phone").value;
          const customerData = { name, phone };
          const customerDataString = JSON.stringify(customerData);
          const expirationDate = new Date();
          expirationDate.setFullYear(expirationDate.getFullYear() + 1);

          document.cookie = `customer-experience=${customerDataString}; expires=${expirationDate.toUTCString()}; path=/;`;

          document.cookie = `preventModalCookie=true; expires=${expirationDate.toUTCString()}; path=/;`;
          document.querySelector(".overlay").style.display = "none";
      });

      function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(";").shift();
      }
    });
  </script>

  <div class="overlay" style="display:none">
    <div class="modal-container">
      <div class="modal">
        <div class="left">
          <span class="close-button">&#10006;</span>
          <p class="modalText"> Para uma experiência única, por favor informe seu nome e telefone </p>
          <form>
            <label for="name">Nome </label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone"> Telefone </label>
            <input type="tel" id="phone" name="phone" required>
            
            <span id="submit" class="pagefaiFormSubmit"> Salvar </span>

          </form>
        </div>
        <div class="right"></div>
      </div>
    </div>
  </div>

<?php } ?>