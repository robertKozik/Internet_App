<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/trips.css">
    <script src="https://kit.fontawesome.com/a19050df1f.js" crossorigin="anonymous"></script>
    <script src="../scripts/script.js"></script>
    <title>Your Trips</title>
</head>

<body>
    <img id="toggle-button" src="public/resources/logo.svg" onclick="showMenu()" alt="Logo of the project" />
    <nav id="navigation-bar">

        <div class="nav-logo-container">
            <img class="nav-logo" src="public/resources/logo.svg" alt="logo of the project" />
        </div>

        <ol>
            <li class="button-container">
                <div class="new-button">
                    Get to the Boat
                    <img class="nav-add" src="public/resources/drakkar.svg" alt="click here to start new trip">
                </div>
            </li>

            <li>
                <button class="nav-button">
                    <i class="fas fa-spinner"></i>
                    <div class="nav-text">Your Trips</div>
                </button>
            </li>
            <li>
                <button class="nav-button">
                    <i class="far fa-calendar-alt"></i>
                    <div class="nav-text">Calendar</div>
                </button>
            </li>
            <li>
                <button class="nav-button">
                    <i class="fas fa-user-friends"></i>
                    <div class="nav-text">Friends</div>
                </button>
            </li>
            <li>
                <button class="nav-button">
                    <i class="fas fa-cog"></i>
                    <div class="nav-text">Settings</div>
                </button>
            </li>
            <li>
                <button class="nav-button">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="nav-text">Search</div>
                </button>
            </li>
            <li>
                <div></div>
            </li>
        </ol>
    </nav>

    <div class="content-container">
        <div class="top-bar">
            <label>
                <input name="search" type="text" placeholder="Search">
            </label>
        </div>
        <div class="content">

            <div class="trip" id="trip-1">
                <h2> Title </h2>
                <img src="public/resources/placeholder.jpg" alt="trip" />
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                <div>
                    <i class="fas fa-paperclip"></i>
                    <i class="fas fa-comment-alt"></i>
                </div>
            </div>

            <div class="trip" id="trip-2">
                <h2> Title </h2>
                <img src="public/resources/placeholder.jpg" alt="trip" />
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            </div>

            <div class="trip" id="trip-3">
                <h2> Title </h2>
                <img src="public/resources/placeholder.jpg" alt="trip" />
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            </div>

            <div class="trip" id="trip-4">
                <h2> Title </h2>
                <img src="public/resources/placeholder.jpg" alt="trip" />
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            </div>

        </div>
    </div>
</body>