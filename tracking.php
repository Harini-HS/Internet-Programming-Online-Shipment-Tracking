<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipRocket Tracking</title>
    <link rel="stylesheet" href="./tracking.css">
</head>
<body>
    <header>
        <h1>ShipRocket Tracking</h1>
    </header>

    <main>
        <section id="trackform">
            <h2>Enter Your Shipment Tracking Number</h2>
            <form>
                <input type="text" id="trackingNumber" placeholder="Enter Tracking Number">
                <button type="button" id="trackButton" >Track</button>
            </form>
        </section>

        <section id="trackingResults">
            <h2>Tracking Results</h2>
            <div class="progress-container">
                <div class="progress-bar" id="progressBar"></div>
                <div class="progress-label" id="progressLabel">0%</div>
            </div>
        </section>
    </main>
    <script>
       
        document.getElementById("trackButton").addEventListener("click", function() {
            
            var num = document.getElementById("trackingNumber").value;
            num = num.replace(/\D/g,'');
            num = num[0] + num[1]
            num = parseInt(num)
            
            let progress = 0;
            const progressBar = document.getElementById("progressBar");
            const progressLabel = document.getElementById("progressLabel");

            
            const interval = setInterval(function() {
                progress += 1;
                if (progress <= num) {
                    progressBar.style.width = progress + "%";
                    progressLabel.innerText = progress + "%";
                } else {
                    clearInterval(interval);
                    progressLabel.innerText = "In Transit";
                }
                
            }, 100);

            
            document.getElementById("trackingResults").style.display = "block";
        });
        
    </script>
</body>
</html>
