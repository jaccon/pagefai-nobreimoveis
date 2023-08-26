<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  /* Overlay background */
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
  
  /* Modal window */
  .modal {
    background-color: white;
    border-radius: 10px;
    display: flex;
    min-width: 800px;
    min-height: 600px;
    overflow: hidden;
    position: relative;
  }
  
  /* Center the modal */
  .modal-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Close button style */
  .close-button {
    position: absolute;
    top: 10px;
    left: 10px;
    cursor: pointer;
  }
  
  /* Left content */
  .left {
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
    position: relative;
  }
  
  /* Right content */
  .right {
    position: relative;
    width: 50%;
    background: url('https://nobreimoveis.pagefai.com//assets/images/main-slides/bg-4.jpg') no-repeat center center / cover;
  }

  /* Overlay for background color */
  .right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.8); /* Adjust the color and opacity as needed */
  }
  
  /* Form styling */
  form {
    display: flex;
    flex-direction: column;
    padding: 20px; /* Add padding to the form */
  }
  
  label, input {
    margin-bottom: 10px;
  }
</style>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let countdown = 10; // Countdown in seconds

    function updateCountdown() {
      console.log("Countdown:", countdown, "seconds");
      countdown--;

      if (countdown === 0) {
        document.querySelector(".overlay").style.display = "flex";
      } else {
        setTimeout(updateCountdown, 1000); // Update every 1 second
      }
    }

    updateCountdown();
    
    // Close button functionality
    document.querySelector(".close-button").addEventListener("click", function() {
      document.querySelector(".overlay").style.display = "none";
    });
  });
</script>
</head>
<body>

<div class="overlay" style="display: none;">
  <div class="modal-container">
    <div class="modal">
      <div class="left">
        <span class="close-button">&#10006;</span>
        <form>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
          
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
          
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" required>
          
          <button type="submit">Submit</button>
        </form>
      </div>
      <div class="right"></div>
    </div>
  </div>
</div>

</body>
</html>
