<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Weeding System – Cut Costs. Save Time.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: #f7faf7;
            color: #222;
        }

        header {
            background-color: #2c6e49;
            color: white;
            padding: 2rem;
            text-align: center;
        }

        header h1 {
            margin: 0 0 0.5rem;
            font-size: 2.5rem;
        }

        header p {
            font-size: 1.2rem;
            margin: 0;
        }

        section {
            padding: 2rem;
            max-width: 1000px;
            margin: auto;
        }

        .benefits, .visuals, .calculator {
            margin-bottom: 3rem;
        }

        h2 {
            color: #2c6e49;
        }

        .benefit-list {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .benefit {
            flex: 1 1 280px;
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .benefit h3 {
            margin-top: 0;
        }

        .visuals img {
            width: 100%;
            max-width: 700px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }

        footer {
            background-color: #2c6e49;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<header>
    <h1>Smart Weeding with Computer Vision</h1>
    <p>Automate weed detection. Cut labor costs. Boost productivity per acre.</p>
</header>

<section class="benefits">
    <h2>Why Choose Our System?</h2>
    <div class="benefit-list">
        <div class="benefit">
            <h3>💸 Lower Weeding Costs</h3>
            <p>Replace expensive manual labor with automated field scanning and weed detection. Our system helps you save thousands per harvest season.</p>
        </div>
        <div class="benefit">
            <h3>⏱ Faster Operations</h3>
            <p>Process acres in a fraction of the time. Real-time detection means less downtime and fewer bottlenecks in the field.</p>
        </div>
        <div class="benefit">
            <h3>🌾 Precision Agriculture</h3>
            <p>Built for the future of farming. Our AI model can differentiate between crop types and target unwanted weeds with high accuracy.</p>
        </div>
    </div>
</section>

<section class="visuals">
    <h2>Proven Performance</h2>
    <p>Our deep learning model is trained on thousands of labeled field images. Below are live results from our latest model version:</p>
    <h3>CNN</h3> 
    <img src="../outputs/CNNconf.png?v=<php echo time(); ?>" alt="MobileNetV2 Confusion Matrix">    <p><em></em></p>
    <p><em></em></p>
    <p>
    This confusion matrix shows the CNN model’s ability to classify four classes: <strong>broadleaf</strong>, <strong>grass</strong>, <strong>soil</strong>, and <strong>soybean</strong>.
    The model correctly classified <strong>broadleaf 399</strong> times, with <strong>64 misclassifications</strong>; <strong>grass</strong> was correctly identified <strong>601</strong> times, with <strong>103 errors</strong>; <strong>soil</strong> was accurately classified <strong>648</strong> times, with only <strong>1 misclassification</strong>; and <strong>soybean</strong> was correctly predicted <strong>1,422</strong> times, with <strong>53 misclassified</strong> samples.
    <br><br>
    The model demonstrates strong overall accuracy, with most errors occurring between broadleaf and grass, which are often visually similar in real-world field conditions. In contrast, <strong>soil</strong> and <strong>soybean</strong> categories show exceptional reliability.
    <br><br>
    This high performance supports the use of the CNN model in automated weed detection systems, helping reduce manual labor while improving precision and efficiency in crop management.
    </p>


    <h3>MobileNetV2</h3>
   <img src="../outputs/Monetv2.png?v=<?php echo time(); ?>" alt="MobileNetV2 Confusion Matrix">
    <p><em></em></p>
    <p>
    This confusion matrix shows how well the MobileNetV2 model distinguishes between four classes: <strong>broadleaf weeds</strong>, <strong>grass weeds</strong>, <strong>soil</strong>, and <strong>soybean crops</strong>. Each square represents the number of times a sample was correctly or incorrectly classified.
    <br><br>
    The model correctly identified <strong>1,462 soybean</strong> images with minimal errors. It also showed strong accuracy in weed detection, with <strong>234 broadleaf</strong> and <strong>701 grass</strong> samples classified correctly. Misclassifications were rare, indicating the model is both <strong>accurate and dependable</strong> for field use.
    <br><br>
    This high performance supports the use of MobileNetV2 in automated weed detection systems, reducing manual labor while improving precision in crop care.
    </p>


</section>

<section class="calculator">
    <h2>🌾 Estimate Your Automated Weeding Savings</h2>
    <p>Based on industry averages from Carbon Robotics, Verdant, FarmDroid, and more, calculate how much you could save per acre with automated weeding.</p>

    <form method="POST">
        <label for="acreage">Enter Acreage:</label><br>
        <input type="number" name="acreage" id="acreage" step="0.1" min="0" required><br><br>

        <input type="submit" value="Calculate Savings">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $acreage = floatval($_POST["acreage"]);

        // Blended industry values
        $manual_cost_per_acre = 884.11;
        $automated_cost_per_acre = 291.64;
        $savings_per_acre = $manual_cost_per_acre - $automated_cost_per_acre;

        // Calculations
        $total_manual_cost = $manual_cost_per_acre * $acreage;
        $total_automated_cost = $automated_cost_per_acre * $acreage;
        $total_savings = $total_manual_cost - $total_automated_cost;

        // Output
        echo "<div style='margin-top: 2rem; background: #f0fdf4; border: 1px solid #cce7d0; padding: 1rem; border-radius: 8px;'>";
        echo "<h3>💡 Results:</h3>";
        echo "<p><strong>Manual Weeding Cost:</strong> $" . number_format($total_manual_cost, 2) . "</p>";
        echo "<p><strong>Automated Weeding Cost:</strong> $" . number_format($total_automated_cost, 2) . "</p>";
        echo "<p><strong>Estimated Savings:</strong> <span style='color: green;'>$" . number_format($total_savings, 2) . "</span></p>";
        echo "<p style='font-size: 0.9rem; color: #555;'>* Based on a blended average of industry sources across Carbon Robotics, Verdant, FarmDroid, and more.</p>";
        echo "</div>";
    }
    ?>
</section>


<footer>
    &copy; <?php echo date("Y"); ?> Smart Weeding System – Built for Modern Agriculture
</footer>

</body>
</html>

