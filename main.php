<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="mainstyles.css">
    
</head>
<body>

<header>
    <nav>
        <button id="toggleSidebar"></button>
        <img src="Images/local-nest-high-resolution-logo-white-transparent.png" alt="Header Logo">
    </nav>
    <div class="auth-buttons">
        <a href="form.php">Sign Up</a>
        <a href="login.php">Login</a>
    </div>
</header>

<div class="sidebar" id="sidebar">
    <ul>
        <button id="closeSidebar"></button><br>
        <li><a href="main.php">Home</a></li>
        <li><a href="#joinSection">Join Membership</a></li>
        <li><a href="#aboutSection">About/Services</a></li>
        <li><a href="#reviewSection">Review/Contact</a></li>
    </ul>
</div>

<main>
    <div class="logo-container">
        <br><br><br> <img src="Images/local-nest-high-resolution-logo-white-transparent.png" alt="Logo" class="logo">
    </div>
    <div class="content">
        <img src="Images/mca-high-resolution-logo-transparent.png" alt="Logo">
        <h2>Home Nest for all our <span style="color: #ff3333;">Birds ....</span></h2>
        <ul class="features">
            <li class="feature" onclick="scrollToSection('get-connected')">Get Connected</li>
            <li class="feature" onclick="scrollToSection('update-syllabus')">Updates & Syllabus</li>
            <li class="feature" onclick="scrollToSection('virtual-tour')">Virtual Tour SPU(Mandi)</li>
            <li class="feature" onclick="scrollToSection('roadmap-mca')">Roadmap Post-MCA</li>
        </ul>
        <div class="content-details">
            <div class="content-item">
                <h3 style="background-color: #ff3333;">Get Connected</h3>
                <iframe src="http://localhost/soham/livechat.php" width="100%" height="400"></iframe>
            </div>

            <div class="content-item">
                <h3 style="background-color: #ff3333;">Updates & Syllabus</h3>
                <iframe src="https://www.anotherexample.com" width="100%" height="400"></iframe>
            </div>

            <div class="content-item">
                <h3 style="background-color: #ff3333;">Virtual Tour SPU(Mandi)</h3>
                <iframe src="https://www.yetanotherexample.com" width="100%" height="400"></iframe>
            </div>

            <div class="content-item">
                <h3 style="background-color: #ff3333;">Roadmap Post-MCA</h3>
                <iframe src="https://www.yetanotherexample.com" width="100%" height="400"></iframe>
            </div>
        </div>
    </div>
</main>

<br><br><br><br><br><br><br><br><br><br>

<div id="get-connected" class="split-page">
    <div class="left-part">
        <!-- Content for the left part -->
        <img src="Images/get-connected-high-resolution-logo-transparent.png" alt="Logo" class="img-center">
    </div>
    <div class="right-part">
        <!-- Content for the right part -->
        <br><br><br><br><br><br><br>
        <h2>Embark on a transformative journey of connection and knowledge with Local Nest</h2>
        <p>MCA! Our online platform provides you with a seamless experience to connect not only with friends and teachers but also with a network of like-minded individuals. Immerse yourself in a vibrant community that goes beyond traditional boundaries, fostering meaningful friendships and promoting collaborative educational growth.</p>
        <img src="Images/connect-high-resolution-logo-transparent.png" alt="Small Logo" class="small-logo">
        <br><br> <button class="beautiful-button" onclick="window.location.href='livechat.php';">Chat Now</button>

    </div>
</div>
<style>
/* Styles for Split Page 1 */
.right-part {
  background-color: #4B0082;
  color: white;
  padding: 20px;
  border-radius: 0 10px 10px 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  text-align: center; /* Center text */
}

.right-part h2 {
  font-size: 28px; /* Increased font size for the heading */
  margin-bottom: 15px; /* Increased margin for better spacing */
  color: #ff3333; /* Highlight the heading with the color #ff3333 */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle text shadow */
}

.right-part p {
  font-size: 18px; /* Increased font size for the paragraph */
  line-height: 1.6; /* Adjusted line height for better readability */
  color: white; /* Set a subtle color for the paragraph text */
}

/* Hover effect for Split Page 1 */
.split-page .right-part:hover {
  background-color: #2E0854;
  transition: background-color 0.3s ease; /* Smooth transition on hover */
}
.right-part img.small-logo {
  max-width: 40%; /* Make the logo responsive */
  height: auto; /* Maintain aspect ratio */
  margin-top: 15px; /* Add some top margin for spacing */
}
/* Beautiful button styles */
.beautiful-button {
  width: 200px; /* Set the width of the button */
  height: 50px; /* Set the height of the button */
  background-color: #ff3333; /* Set the button color */
  border: none; /* Remove button border */
  border-radius: 25px; /* Create curved edges for the button */
  color: white; /* Set text color to white */
  cursor: pointer; /* Add cursor pointer on hover */
}

.beautiful-button:hover {
  background-color: #0074cc; /* Change background color on hover */
}

/* Media Query for Responsive Design */
@media (max-width: 600px) {
  .right-part {
    border-radius: 0; /* Remove border-radius for smaller screens */
  }

  .right-part h2 {
    font-size: 15px; /* Adjusted font size for smaller screens */
  }

  .right-part p {
    font-size: 12px; /* Adjusted font size for smaller screens */
  }

  .beautiful-button {
    width: 100%; /* Make the button full width on smaller screens */
    border-radius: 0; /* Remove border-radius for smaller screens */
  }
}
</style>

<div id="update-syllabus"class="split-page2">
    <div class="left-part2">
        <!-- Content for the left part -->
        <img src="Images/updatessyllabus-high-resolution-logo-transparent.png" alt="Logo" class="img-center">
    </div>
    <div class="right-part2">
        <!-- Content for the right part -->
        <br><br><br><br><br><br><br>
        <h2>Stay Informed with Latest Updates and Syllabus</h2>
        <p>Explore our comprehensive updates and syllabus section to stay ahead in your academic journey. We provide real-time information to keep you informed and prepared. Dive into a sea of knowledge where every update propels you forward, making learning a dynamic and engaging experience. Stay connected, stay informed, and let knowledge be your guide. Join us on this enlightening journey of academic excellence!</p>
        <img src="Images/knowledge-high-resolution-logo-transparent.png" alt="Small Logo" class="small-logo2">
        <br><br> <button class="beautiful-button2">Explore</button>
    </div>
</div>
<style>
/* Styles for Split Page 2 */
.right-part2 {
  background-color: #004d00;
  color: white;
  padding: 20px;
  border-radius: 0 10px 10px 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  text-align: center; /* Center text */
}

.right-part2 h2 {
  font-size: 28px; /* Increased font size for the heading */
  margin-bottom: 15px; /* Increased margin for better spacing */
  color: #7C7BFF; /* Highlight the heading with the color purple*/
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle text shadow */
}

.right-part2 p {
  font-size: 18px; /* Increased font size for the paragraph */
  line-height: 1.6; /* Adjusted line height for better readability */
  color: white; /* Set a subtle color for the paragraph text */
}

/* Hover effect for Split Page 1 */
.split-page2 .right-part2:hover {
  background-color: #003300;
  transition: background-color 0.3s ease; /* Smooth transition on hover */
}
.right-part2 img.small-logo2 {
  max-width: 45%; /* Make the logo responsive */
  height: auto; /* Maintain aspect ratio */
  margin-top: 15px; /* Add some top margin for spacing */
}
/* Beautiful button styles */
.beautiful-button2 {
  width: 200px; /* Set the width of the button */
  height: 50px; /* Set the height of the button */
  background-color: #635EB8; /* Set the button color */
  border: none; /* Remove button border */
  border-radius: 25px; /* Create curved edges for the button */
  color: white; /* Set text color to white */
  cursor: pointer; /* Add cursor pointer on hover */
}

.beautiful-button2:hover {
  background-color:#ff3333; /* Change background color on hover */
}

/* Media Query for Responsive Design */
@media (max-width: 600px) {
  .right-part2 {
    border-radius: 0; /* Remove border-radius for smaller screens */
  }

  .right-part2 h2 {
    font-size: 15px; /* Adjusted font size for smaller screens */
  }

  .right-part2 p {
    font-size: 12px; /* Adjusted font size for smaller screens */
  }

  .beautiful-button2 {
    width: 100%; /* Make the button full width on smaller screens */
    border-radius: 0; /* Remove border-radius for smaller screens */
  }
}
</style>

<div id="virtual-tour" class="split-page3">
    <div class="left-part3">
        <!-- Content for the left part -->
        <img src="Images/virtual-tour-high-resolution-logo-transparent.png" alt="Logo" class="img-center">
    </div>
    <div class="right-part3">
        <!-- Content for the right part -->
        <br><br><br><br><br><br><br>
        <h2>Explore Sardar Patel University,Mandi Virtually </h2>
        <p>From the comfort of your own screen, you can navigate through the various departments, witness the vibrant student life, and gain insights into the diverse academic programs offered.Navigating through the digital corridors, prospective students can explore the diverse range of academic programs, gaining a comprehensive understanding of the courses and majors available. </p>
        <img src="Images/photo-sphere-high-resolution-logo-transparent.png" alt="Small Logo" class="small-logo3">
        <br><br> <button class="beautiful-button3">Visit</button>
    </div>
</div>
<style>
/* Styles for Split Page 3 */
.right-part3 {
  background-color:#ff4136;
  color: white;
  padding: 20px;
  border-radius: 0 10px 10px 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  text-align: center; /* Center text */
}

.right-part3 h2 {
  font-size: 28px; /* Increased font size for the heading */
  margin-bottom: 15px; /* Increased margin for better spacing */
  color:#000000; /* Highlight the heading with the color purple*/
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle text shadow */
}

.right-part3 p {
  font-size: 18px; /* Increased font size for the paragraph */
  line-height: 1.6; /* Adjusted line height for better readability */
  color: white; /* Set a subtle color for the paragraph text */
}

/* Hover effect for Split Page 1 */
.split-page3 .right-part3:hover {
  background-color: #CC0000;
  transition: background-color 0.3s ease; /* Smooth transition on hover */
}
.right-part3 img.small-logo3 {
  max-width: 40%; /* Make the logo responsive */
  height: auto; /* Maintain aspect ratio */
  margin-top: 15px; /* Add some top margin for spacing */
}
/* Beautiful button styles */
.beautiful-button3 {
  width: 200px; /* Set the width of the button */
  height: 50px; /* Set the height of the button */
  background-color:#000000; /* Set the button color */
  border: none; /* Remove button border */
  border-radius: 25px; /* Create curved edges for the button */
  color: white; /* Set text color to white */
  cursor: pointer; /* Add cursor pointer on hover */
}

.beautiful-button3:hover {
  background-color:#259b33; /* Change background color on hover */
}

/* Media Query for Responsive Design */
@media (max-width: 600px) {
  .right-part3 {
    border-radius: 0; /* Remove border-radius for smaller screens */
  }

  .right-part3 h2 {
    font-size: 15px; /* Adjusted font size for smaller screens */
  }

  .right-part3 p {
    font-size: 12px; /* Adjusted font size for smaller screens */
  }

  .beautiful-button3 {
    width: 100%; /* Make the button full width on smaller screens */
    border-radius: 0; /* Remove border-radius for smaller screens */
  }
}
</style>


<div id="roadmap-mca" class="split-page4">
    <div class="left-part4">
        <!-- Content for the left part -->
        <img src="Images/roadmap-high-resolution-logo-transparent.png" alt="Logo" class="img-center">
    </div>
    <div class="right-part4">
        <!-- Content for the right part -->
        <br><br><br><br><br><br><br>
        <h2>Select and work on your Post-MCA Career Roadmap.</h2>
        <p>Crafting your post-MCA career roadmap involves strategically applying my acquired knowledge and skills to pursue opportunities in software development, system architecture, or data science. Focused on continuous learning, I aim to stay abreast of industry trends, build professional networks, and explore avenues for contributing to innovative projects or advancing into leadership roles.</p>
        <img src="Images/set-your-career-high-resolution-logo-transparent.png" alt="Small Logo" class="small-logo4">
        <br><br> <button class="beautiful-button4">Check Out</button>
    </div>
</div>
<style>
 /* Styles for Split Page 4 */
 .split-page4 {
        height: 90vh; /* Reduced height for the split-page */
        width: 95%; /* Reduced width */
        overflow: hidden; /* Hide overflow */
        display: flex;
        border-radius: 20px; /* Rounded corners */
        margin: 5vh auto; /* Center the split-page */
      }
      
      .left-part4,
      .right-part4 {
        height: 100%; /* Full height of the split-page */
        width: 50%; /* Each part takes half of the split-page */
        box-sizing: border-box;
        padding: 20px; /* Add padding for content spacing */
      }
      
      .left-part4 {
        background-color: #99C2FF; /* Light green for Left Part */
        color: white; /* Text color for Left Part */
      }
      
      .right-part4 {
        background-color: #0000FF; /* Different green for Right Part */
        color: white; /* Text color for Right Part */
      }


      
/* Styles for Split Page 4 */
.right-part4 {
  background-color: #3366FF;
  color: white;
  padding: 20px;
  border-radius: 0 10px 10px 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  text-align: center; /* Center text */
}

.right-part4 h2 {
  font-size: 28px; /* Increased font size for the heading */
  margin-bottom: 15px; /* Increased margin for better spacing */
  color: #000000; /* Highlight the heading with the color purple*/
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle text shadow */
}

.right-part4 p {
  font-size: 18px; /* Increased font size for the paragraph */
  line-height: 1.6; /* Adjusted line height for better readability */
  color: white; /* Set a subtle color for the paragraph text */
}

/* Hover effect for Split Page 1 */
.split-page4 .right-part4:hover {
  background-color: #0000FF;
  transition: background-color 0.3s ease; /* Smooth transition on hover */
}
.right-part4 img.small-logo4 {
  max-width: 45%; /* Make the logo responsive */
  height: auto; /* Maintain aspect ratio */
  margin-top: 15px; /* Add some top margin for spacing */
}
/* Beautiful button styles */
.beautiful-button4 {
  width: 200px; /* Set the width of the button */
  height: 50px; /* Set the height of the button */
  background-color: black; /* Set the button color */
  border: none; /* Remove button border */
  border-radius: 25px; /* Create curved edges for the button */
  color: white; /* Set text color to white */
  cursor: pointer; /* Add cursor pointer on hover */
}

.beautiful-button4:hover {
  background-color:#f27100; /* Change background color on hover */
}

/* Media Query for Responsive Design */
@media (max-width: 600px) {
  .right-part4 {
    border-radius: 0; /* Remove border-radius for smaller screens */
  }

  .right-part4 h2 {
    font-size: 15px; /* Adjusted font size for smaller screens */
  }

  .right-part4 p {
    font-size: 12px; /* Adjusted font size for smaller screens */
  }

  .beautiful-button4 {
    width: 100%; /* Make the button full width on smaller screens */
    border-radius: 0; /* Remove border-radius for smaller screens */
  }
}
</style>




<div>
<button id="joinSection" class="join-button" onmouseover="changeColor()" onmouseout="restoreColor()">JOIN</button>
</div>



<script>
    function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>



 <script>
    var originalColor;

    function getRandomColor() {
      var letters = '0123456789ABCDEF';
      var color = '#';
      for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }

    function changeColor() {
      var button = document.querySelector('.join-button');
      originalColor = button.style.backgroundColor; // Store the original color
      button.style.backgroundColor = getRandomColor();
    }

    function restoreColor() {
      var button = document.querySelector('.join-button');
      button.style.backgroundColor = originalColor; // Restore the original color
    }
  </script>






<div class="split-page5">
    <div class="left-part5">
            <div id="aboutSection" style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
          <img src="Images/icons8-man-64.png" alt="Logo" style="width: 60px; height: 60px; margin-right: 5px;">
          <h1 style="color: #fff; background-color: #555; padding: 10px; font-size: 30px; text-align: center; border-radius: 8px;width: 200px">
            About Us
          </h1>
        </div>
    <div class="section-text1">
    Hi! my name is Soham Kashyap , I am the Developer for this website. At LocalNest, we understand the significance of a supportive academic network. Our platform is designed to provide MCA students with a space to connect and engage with their classmates and teachers effortlessly. Whether you're seeking to discuss coursework, share insights, or collaborate on projects, LocalNest is here to facilitate meaningful interactions.<br>
    LocalNest is committed to enhancing your MCA experience by providing a holistic platform that caters to various aspects of your academic and professional journey. Join us to connect, collaborate, and thrive as an MCA student. Together, let's build a vibrant community that empowers each member to achieve their academic and career goals.</div>
  </div>
  <style>

  .section-text1 {
    color:  #CCCCCC;
    font-size: 16px;
    line-height: 1.6;
    text-align: left;
  }
  
  /* Responsive Font Size Adjustments */
  @media (max-width: 768px) {
    .section-text1 {
      font-size: 10px; /* Adjust font size for better readability on smaller screens */
    }
  }
  </style>  




    <div class="right-part5">
    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
  <img src="Images/icons8-cleaning-services-100.png" alt="Logo" style="width: 70px; height: 70px; margin-right: 5px;">
  <h1 style="color: #fff; background-color: #555; padding: 10px; font-size: 30px; text-align: center; border-radius: 8px; width: 200px;">
    Services
  </h1>
</div>


        <ul>
            <li>
            <div class="section-subtitle2"> <h3>Connect and Chat:</h3></div>
                <ul>
                <div class="section-text2"> <li>Connect with classmates and teachers in real-time.</li>
                    <li>Foster a collaborative learning environment through easy-to-use chat features.</li>
                    </div>
                </ul>
            </li>

            <li>
            <div class="section-subtitle2"> <h3>Updates and Syllabus:</h3></div>
                <ul>
                <div class="section-text2"> <li>Stay informed with the latest updates related to your MCA program.</li>
                    <li>Access comprehensive syllabus details to streamline your academic journey.</li>
                  </div>
                </ul>
            </li>

            <li>
            <div class="section-subtitle2"> <h3>Roadmap After MCA:</h3></div>
                <ul>
                <div class="section-text2"><li>LocalNest goes beyond academics by offering guidance on your post-MCA journey.</li>
                    <li>Explore career roadmaps, job opportunities, and potential pathways after completing your MCA degree.</li></div>
                </ul>
            </li>

            <li>
            <div class="section-subtitle2"> <h3>Virtual Tour:</h3></div>
                <ul>
                <div class="section-text2"> <li>Display the university's residential halls and dormitories.</li>
                    <li>Feature outdoor spaces and ground on the campus.</li></div>
                </ul>
            </li>
        </ul>
            </div>
  </div>
<style>

  .section-subtitle2 h3 {
    font-size: 25px;
    font-weight: bold;
    color: #CCCCCC; 
    margin-bottom: 10px;
    
  }
  

  .section-text2 li {
    color: #CCCCCC;
    list-style-type: disc;
    margin-left: 20px;
    margin-bottom: 8px;
  }
   /* Responsive Font Size Adjustments */
  @media (max-width: 768px) {
    .section-text2 li,
    .section-subtitle2 h3,
    .right-part5 h1 {
      font-size: 10px; /* Adjust font size for better readability on smaller screens */
    }
  }
</style>

<style>
  /* Styles for Split Page 5 */
  .split-page5 {
    height: auto; /* Adjusted height for dynamic content */
    width: 90%; /* Reduced width */
    overflow: hidden; /* Hide overflow */
    display: flex;
    flex-direction: column; /* Stacked on smaller screens */
    border-radius: 20px; /* Rounded corners */
    margin: 5vh auto; /* Center the split-page */
  }

  .left-part5,
  .right-part5 {
    width: 100%; /* Full width on smaller screens */
    box-sizing: border-box;
    padding: 20px; /* Add padding for content spacing */
  }

  .left-part5 {
    background-color: #292b2c; /* Light green for Left Part */
    color: white; /* Text color for Left Part */
  }

  .right-part5 {
    background-color: #292b2c; /* Different green for Right Part */
    color: white; /* Text color for Right Part */
  }

  @media (min-width: 768px) {
    /* Adjustments for screens larger than 768px width */
    .split-page5 {
      flex-direction: row; /* Display side by side on larger screens */
    }

    .left-part5,
    .right-part5 {
      width: 50%; /* Each part takes half of the split-page on larger screens */
    }
  }
</style>




<script>
    // JavaScript to handle automatic display of content
    const contentItems = document.querySelectorAll('.content-item');
    let currentIndex = 0;

    function showContent(index) {
        contentItems.forEach((item, i) => {
            item.style.display = i === index ? 'block' : 'none';
        });
        currentIndex = (currentIndex + 1) % contentItems.length;
    }

    setInterval(() => {
        showContent(currentIndex);
    }, 3000); // Change content every 3 seconds
</script>


<script>
    setTimeout(function() {
        document.querySelector('.logo-container').classList.add('minimize');
    }, 1000);
</script>



<script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('active');
    });

    document.getElementById('closeSidebar').addEventListener('click', function () {
        document.getElementById('sidebar').classList.remove('active');
    });

    document.body.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        if (!sidebar.contains(event.target) && event.target.id !== 'toggleSidebar') {
            sidebar.classList.remove('active');
        }
    });

    document.querySelectorAll('.sidebar a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.getElementById(this.getAttribute('href').substring(1)).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>


<footer id="reviewSection" style="background-color: #1a1a1a; color: #fff; padding: 160px 0;">
    <div class="footer-container">

        <!-- Contact -->
        <div class="contact-section">
            <h3 style="background-color: #333; padding: 10px; margin-bottom: 15px; font-size: 24px; border-radius: 8px; color: #fff;">Contact Us</h3>
            <p style="font-size: 16px; line-height: 1.6; margin: 0;">
                <a href="mailto:seemanoj1980@gmail.com" style=" text-decoration: none; margin-right: 20px; ">
                    <img src="Images/icons8-gmail-94.png" alt="Email Icon" style="width: 35px; height: 35px; margin-right: 10px;">
                </a>

                <a href="https://www.instagram.com/soham_kashyap_2001?igsh=NzYzMngxbmtnN21i" style=" text-decoration: none; margin-right: 20px;">
                    <img src="Images/icons8-instagram-94.png" alt="Phone Icon" style="width: 35px; height: 35px; margin-right: 10px;">
                </a>

                <a href="https://www.linkedin.com/in/sohamkashyap2001" target="_blank" style=" text-decoration: none; margin-right: 20px;">
                    <img src="Images/icons8-linkedin-188.png" alt="LinkedIn Icon" style="width: 35px; height: 35px; margin-right: 10px;">
                </a>

                <a href="https://github.com/SohamKashyap" target="_blank" style=" text-decoration: none; margin-right: 20px; ">
                    <img src="Images/icons8-github-64.png" alt="GitHub Icon" style="width: 35px; height: 35px; margin-right: 10px;">
                </a>

                <a href="review.php" style=" text-decoration: none; ">
                    <img src="Images/icons8-review-100.png" alt="Review Icon" style="width: 35px; height: 35px; margin-right: 10px;">
                </a>
            </p><br><br><br><br><br><br>
            <p style="font-size: 14px; margin: 0; color: #888;">
                &copy; LocalNest 2024 <br>
                <img src="Images/icons8-bird-nest-64.png" alt="Small Logo" style="width: 40px; height: 40px; margin-left: 5px;">
            </p>
        </div>
    </div>
    
<style>
    /* Animation for image hover */
    .footer-container a img {
        transition: transform 0.3s ease-in-out;
    }

    .footer-container a img:hover {
        transform: scale(2.2); /* You can adjust the scale value for the desired zoom effect */
    }
</style>
   

</body>
</html>
