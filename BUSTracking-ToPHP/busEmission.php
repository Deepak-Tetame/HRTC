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
    <div id="container">
        
    <!--    <label for="fule-name">Select Type of Fuel:</label> -->
    <!--<select name="fule-name" id="dog-names"> -->
    <!--    <option value="diesel">Diesel</option> -->
    <!--    <option value="electric">electric</option> -->
    <!--    <option value="Cng">CNG</option> -->
    <!--    <option value="reeses"></option> -->
    <!--</select>-->
  
  
  
  
  


        <h1>Emission Calculator</h1>
        <label for="fuel">Enter Type of Fuel:</label>
        <input type="text" id="fuel">
        <label for="distance">Enter total distance to travel (KM):</label>
        <input type="text" id="distance">
        <button onclick="calculateEmission()">Calculate Emission</button>
        <div id="result"></div>
    </div>

    <script>
        function calculateEmission() {
            let Avg_Emi_Die = 283.60;
            let Avg_Emi_Eth = 270.73;
            let Avg_Emi_pet = 258.47;

            let em = 0;

            let fuel = document.getElementById("fuel").value;
            let dist = parseFloat(document.getElementById("distance").value);

            if (fuel === "diesel" || fuel==="Diesel" ) {
                em = dist * Avg_Emi_Die;
            } else if (fuel === "electric" || fuel==="Electric") {
                em = dist * Avg_Emi_Eth;
            } else if (fuel === "Cng" || fuel==="cng") {
                em = dist * Avg_Emi_pet;
            }

            let resultDiv = document.getElementById("result");
            resultDiv.textContent = `Total emission for the distance ${dist} KM is ${em.toFixed(2)} Grams`;
        }
    </script>
</body>
</html>