<?php require "misc/header.php"; ?>
        <title>xs3ar</title>
    </head>
    <body>
        <form class="search-container" autocomplete="off" method="get" action="search.php">
            <h1>xs<span style="color: blue;">3</span>ar</h1>
            <input type="search" name="q" autofocus="" required="">
            <input type="hidden" name="p" value="0">
            <br/>
            <button type="submit" class="searchb">Search!</button>
        </form>
<?php require "misc/footer.php"; ?>