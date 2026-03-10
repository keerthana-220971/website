<!DOCTYPE html>
<head>
<title> ONLINE LEARNING PLATFORM</title>
</head>
<BODY >
    <style>
        * {
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}
.navbar {
    background: #1f4fd8;
    color: white;
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

 .navbar nav a {
    color: white;
    text-decoration: none;
    margin-right: 20px;
} 

.login {
    background: transparent;
    border: 1px solid white;
    color: white;
    padding: 6px 12px;
    margin-right: 10px;
    cursor: pointer;
}

.logout {
    background: transparent;
    border: 1px solid white;
    color: white;
    padding: 5px 12px;
    margin-right: 10px;
    cursor: pointer;
}

.signup {
    background: orange;
    border: none;
    color: white;
    padding: 6px 12px;
    cursor: pointer;
    margin-right: 20px;

}

.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px;
    background: #f2f6ff;
}

.hero-text h1 {
    font-size: 40px;
    margin-bottom: 15px;
}

.hero-text p {
    margin-bottom: 20px;
}

.browse-button{
    background: orange;
    border: none;
    padding: 12px 20px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}


.features {
    display: flex;
    justify-content: space-around;
    padding: 40px;
    background: white;
}

.feature {
    text-align: center;
}


.courses {
    padding: 40px;
    background: #f9f9f9;
}

.courses h2 {
    text-align: center;
    margin-bottom: 30px;
}

.course-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.course-card {
    background: white;
    width: 220px;
    padding: 20px;
    margin: 10px;
    text-align: center;
    border-radius: 6px;
}

.course-card button {
    margin-top: 10px;
    background: orange;
    border: none;
    padding: 8px 15px;
    color: white;
    cursor: pointer;
}


.steps {
    padding: 40px;
    background: white;
    text-align: center;
}

.steps-container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.step {
    width: 250px;
    padding: 20px;
    border-radius: 8px;
    background: #f2f6ff;
}

.step span {
    display: inline-block;
    background: #1f4fd8;
    color: white;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 50%;
    margin-bottom: 10px;
}

    </style>
    <header class = "navbar">
        <div class="logo">eLearning</div>
        <nav>
            <a href = "index.php" target="_blank">Home</a>
            <a href = "#">Courses</a>
            <a href="#">About us</a>
             <!-- <button class="login" id="loginjs">Login</button> -->
            <a href="#assignment">Assignments</a>
            <a href="login.html" >
                <button class="login">Login</button>
            </a>
            <a href="register.html" >
                <button class="signup">Sign-up</button>
            </a>
            <button class="logout" onclick="logout()">Logout</button>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-text">
            <h1 id="mouseEventText">Learn any time,<br>Anywhere!</h1>
            <p>Explore a variety of courses and <br>expand your skills at your own pace</p>
            <button class="browse-button" >Browse courses</button>
        </div>
        <div class="hero-img">
            <img>
        </div>  
    </section>
    <secton id="assignment">
        <h2>Upload Assignments</h2>
        <form action="upload_download.php" method="POST" enctype="multipart/form-data" class="upload_form" >
        <label>Select Assignment File:</label> <br> <br>
        <input type="file" name="myfile" required> <br> <br>
        <button type="submit">Uploade</button>
    </form>
    </secton>
    <section class="features">
        <div class="feature">
            <h3>500+ Courses</h3>
            <p>Find the right course.</p>
        </div>
        <div class="feature">
            <h3>Expert Instructors</h3>
            <p>Learn from industry experts.</p>
        </div>
        <div class="feature">
            <h3>Flexible Learning</h3>
            <p>Learn at your own pace.</p>
        </div>
    </section>
    <section class="courses">
        <h2 id="coursesjs">Popular courses</h2>
        <div class="course-container">
            <div class="course-card">
                <h3>Web Development</h3>
                <p>12 lessons</p>
                <button>Enroll Now</button>
            </div>
            <div class="course-card">
                <h3>Data Science</h3>
                <p>10 lessons</p>
                <button>Enroll Now</button>
            </div>
            <div class="course-card">
                <h3>Digital Marketing</h3>
                <p>8 lessons</p>
                <button>Enroll Now</button>
            </div>
            <div class="course-card">
                <h3>Graphic Design</h3>
                <p>15 lessons</p>
                <button>Enroll Now</button>
            </div>
        </div>
    </section>
    <section class="steps">
        <h2>How it works</h2>
        <div class="steps-container">
            <div class="step">
                <span>1</span>
                <h3>sign up</h3>
                <p>create your own account</p>
            </div>
            <div class="step">
                <span>2</span>
                <h3>choose course</h3>
                <p>select course and start learning</p>
            </div>
            <div class="step">
                <span>2</span>
                <h3>start learning</h3>
                <p>watch videos and complete tasks</p>
            </div>
            </div>
        </div>
    </section>
    <footer>
        <p>@ 2025 Klearning. All rights Reserved.</p>
    </footer>
    <script>
        //both alert adn confrim popupboxes
        function logout(){
            let result = confirm("Now we are logging out this account..!");
            if(result){
                alert("Logged out succefully.!");
            }
            else {
                alert("Logout cancelled.!");
            }
        }
        let pname = document.getElementById("loginjs")
        pname.addEventListener("click",function(){
            let name = prompt("Entr your name..!");
            if(name!=null && name!=""){
                alert("Welcome"+name+"!");
            }
            else{
                alert("login cancelled..!");
            }
        });
        document.getElementById("coursesjs").addEventListener("mouseover",
        function () {
            alert("check out all top courses");
        });
        let mname = document.getElementById("mouseEventText");
        mname.addEventListener("mouseover",
            function(){
                mname.style.color = "orange";
            });
        mname.addEventListener("mouseout",
            function(){
                mname.style.color = "black";
            });

            
    </script>
   
</BODY>
</html>
<?php if(!empty($uploadedFile)) { ?> 
<p class="success">
     File uploaded successfully!
    <a href="upload_download.php? 
    download = <?php echo 
    urlencode($uploadedFile); ?> ">
    Downoad File</a>
</p>
<?php }?>
