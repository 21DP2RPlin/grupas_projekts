
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaGrounds Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Dark Theme Styles */
        .dark-theme {
            background-color: #1e1e1e;
            color: #f0f0f0;
        }

        .dark-theme header {
            background-color: #333;
        }

        .dark-theme .profile {
            background-color: #1e1e1e;
        }

        .dark-theme .posts {
            background-color: #2c2c2c;
        }

        .dark-theme .slot {
            background-color: #444;
        }

        .dark-theme .slot-text {
            color: #f0f0f0;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #e3e3e3;
            border-bottom: 1px solid #ccc;
        }
        header img {
            height: 40px;
        }
        header .actions {
            display: flex;
            align-items: center;
        }
        header .actions button,
        header .actions img {
            margin-left: 15px;
        }
        header .actions button {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        header .actions button:hover {
            background-color: #0056b3;
        }

        /* Profile Section */
        .profile {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            transition: all 0.3s ease; /* Ensures background and color transition smoothly */
        }
        .profile img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #ccc;
            margin-right: 20px;
        }
        .profile-info {
            text-align: left;
        }
        .profile-info h2 {
            margin: 0;
        }
        .profile-info p {
            margin: 5px 0;
            color: #666;
        }
        .profile-info .stats {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        .profile-info .stats div {
            font-size: 16px;
        }

        /* Posts Section */
        .posts {
            margin: 40px auto;
            width: 90%;
            max-width: 900px;
        }
        .posts h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Updated posts layout for 3 posts per row and scrollable rows */
        .content-slots {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            overflow-y: scroll;
            max-height: 600px; /* Limit the height of the post section */
        }

        .slot {
            width: 30%; /* 3 posts per row */
            background-color: #ddd;
            border-radius: 5px;
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        .slot-image {
            width: 100%;
            height: 0;
            padding-bottom: 100%; /* Maintain square aspect ratio */
            background-color: #bbb;
            border-radius: 5px;
        }

        .slot-text {
            margin-top: 10px;
            font-size: 16px; /* Increased font size */
            color: #333;
        }
        
        .dark-theme-switch {
            cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<header>
    <img src="logo.png" alt="MediaGrounds Logo" id="logo">
    <div class="actions">
        <button>Create post</button>
        <img src="dark-theme-icon.png" alt="Dark Theme Switch" class="dark-theme-switch" id="darkThemeSwitch">
        <img src="profile_icon.png" alt="Profile" width="30">
        <img src="logout_icon.png" alt="Logout" width="30">
    </div>
</header>

<!-- Profile Section -->
<section class="profile">
    <img src="profile_picture.png" alt="Profile Picture">
    <div class="profile-info">
        <h2>Name</h2>
        <p>Description</p>
        <div class="stats">
            <div>18 followers</div>
            <div>12 following</div>
        </div>
    </div>
</section>

<!-- Posts Section -->
<section class="posts">
    <h3>Posts</h3>
    <div class="content-slots">
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 1</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 2</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 3</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 4</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 5</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 6</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 7</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 8</div>
        </div>
        <div class="slot">
            <div class="slot-image"></div>
            <div class="slot-text">Post 9</div>
        </div>
    </div>
</section>

<!-- Dark theme toggle script -->
<script>
    const theme_picker = document.getElementById('darkThemeSwitch');
    theme_picker.addEventListener('click', function() {
        document.body.classList.toggle('dark-theme');
        const logo = document.getElementById('logo');
        if (document.body.classList.contains('dark-theme')) {
            logo.src = 'logo-dark.png'; // Change to dark theme logo
            theme_picker.src = 'light-theme-icon.png'; // Switch icon to light mode icon
        } else {
            logo.src = 'logo.png'; // Change back to light theme logo
            theme_picker.src = 'dark-theme-icon.png'; // Switch icon to dark mode icon
        }
    });
</script>

</body>
</html>
