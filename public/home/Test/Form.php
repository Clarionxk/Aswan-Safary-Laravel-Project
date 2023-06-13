<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
        rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="wrapper">
    <div id="search-container">
        <input
            type="search"
            id="search-input"
            placeholder="Search product name here.."
        />
        <button id="search">Search</button>
    </div>
    <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('Topwear')">
            Topwear
        </button>
        <button class="button-value" onclick="filterProduct('Bottomwear')">
            Bottomwear
        </button>
        <button class="button-value" onclick="filterProduct('Jacket')">
            Jacket
        </button>
        <button class="button-value" onclick="filterProduct('Watch')">
            Watch
        </button>
    </div>
    <div id="products"></div>
</div>
<!-- Script -->
<script src="script.js"></script>
</body>
</html>