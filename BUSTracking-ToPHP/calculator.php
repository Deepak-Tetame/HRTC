<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emission Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    #container {
      width: 80%;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    #result {
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<script>
    function calculateEmission() {
      // Get the fuel type and distance inputs.
      let fuel = document.getElementById("fuel").value;
      let dist = parseFloat(document.getElementById("distance").value);

      // Validate the inputs.
      if (fuel !== "diesel" && fuel !== "ethenol" && fuel !== "petrol") {
        // Display an error message.
        console.error("Invalid fuel type.");
        return;
      }

      if (dist <= 0) {
        // Display an error message.
        console.error("Invalid distance.");
        return;
      }

      // Calculate the emission.
      let Avg_Emi_Die = 283.60;
      let Avg_Emi_Eth = 270.73;
      let Avg_Emi_pet = 258.47;

      let em = 0;

      if (fuel === "diesel") {
        em = dist * Avg_Emi_Die;
      } else if (fuel === "ethenol") {
        em = dist * Avg_Emi_Eth;
      } else if (fuel === "petrol") {
        em = dist * Avg_Emi_pet;
      }

      // Display the result.
      let resultDiv = document.getElementById("result");
      resultDiv.textContent = `Total emission for the distance ${dist} KM is ${em.toFixed(2)} Grams`;
    }
</script>



    
  <div id="container">
    <h1>Emission Calculator</h1>
    <label for="fuel">Enter Type of Fuel:</label>
    <input type="text" id="fuel">
    <label for="distance">Enter total distance to travel (KM):</label>
    <input type="text" id="distance">
    <button onclick="calculateEmission()">Calculate Emission</button>
    <div id="result"></div>
  </div>

  
</body>
</html>