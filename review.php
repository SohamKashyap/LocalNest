<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        #reviewContainer {
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #222;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        #reviewContainer img {
            width: 80px;
            margin-bottom: 20px;
        }

        #reviewForm {
            width: 100%;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-top: 15px;
            color: #fff;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #777;
            border-radius: 4px;
            background-color: #444;
            color: #fff;
            box-sizing: border-box;
        }

        button {
            margin-top: 15px;
            background-color: #4CAF50;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        button:hover {
            background-color: #388038;
        }

        h3 {
            color: #fff;
            background-color: #555;
            padding: 15px;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            border-radius: 8px;
        }

        .userReview {
            width: 100%;
            color: #888;
            margin-top: 20px;
            border-top: 1px solid #777;
            padding-top: 20px;
        }

        .userReview div {
            font-weight: bold;
            margin-bottom: 10px;
        }

        #button2 {
            display: inline-block;
            margin-top: 15px;
            background-color: #ff3333;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
        }

        #button2:hover {
            background-color: #cc2929;
        }
    </style>
</head>

<body>
    <!-- Review Section -->
    <div id="reviewContainer">
        <img src="Images/icons8-users-96.png" alt="Logo">

        <h3>Reviews</h3>

        <!-- Review Form -->
        <form id="reviewForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label for="userName">Your Name:</label>
                <input type="text" id="userName" name="userName" required>
            </div>

            <div>
                <label for="userRating">Rating:</label>
                <select id="userRating" name="userRating" required>
                    <option value="5">★★★★★</option>
                    <option value="4">★★★★☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="1">★☆☆☆☆</option>
                </select>
            </div>

            <div>
                <label for="userComment">Your Comment:</label>
                <textarea id="userComment" name="userComment" required></textarea>
            </div>

            <button type="submit">Submit Review</button>
            <a id="button2" href="main.php">Home</a>
        </form>

        <!-- Display User Reviews (You can use PHP to fetch and display stored reviews here) -->
        <div class="userReview" id="userReviewsContainer">
            <?php
            // Database connection details
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "form2";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $userName = $_POST["userName"];
                $userRating = $_POST["userRating"];
                $userComment = $_POST["userComment"];

                // Validate and sanitize data (you may need to add more validation)
                $userName = htmlspecialchars(trim($userName));
                $userRating = intval($userRating);
                $userComment = htmlspecialchars(trim($userComment));

                // Prepare and execute the SQL statement to insert data into the database
                $stmt = $conn->prepare("INSERT INTO reviews (User, Rating, Description) VALUES (?, ?, ?)");
                $stmt->bind_param("sis", $userName, $userRating, $userComment);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "Review submitted successfully!";
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            }

            // Retrieve and display user reviews from the database
            $result = $conn->query("SELECT User, Rating, Description FROM reviews");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Output the reviews
                    echo '<div class="userReview">';
                    echo '<div>User: ' . $row["User"] . '</div>';
                    echo '<div>Rating: ' . str_repeat('★', $row["Rating"]) . '</div>';
                    echo '<div>Description: ' . $row["Description"] . '</div>';
                    echo '</div>';
                }
            } else {
                echo "No reviews yet.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
