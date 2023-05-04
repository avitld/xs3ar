<?php require "misc/header.php"; ?>
<?php require "engine/text.php"; ?>
<?php
        $query = $_REQUEST["q"];

        $final_results = get_results($query);
?>
    <title>xs3ar - <?php echo $query?></title>
</head>
<body>
    <form class="mini-search-container" method="get" action="search.php">
        <a href="index.php" style="text-decoration: none; color: var(--main-fg);"><span class="smalllogo">xs<span style="color: blue;">3</span>ar</span></a>
        <input type="search" name="q" autofocus required value="<?php echo $query?>" />
        <button type="submit">Search</button>
    </form>
    <div class="search-content">
                <?php
                    /*$start = microtime(true);
                    $end = number_format(microtime(true) - $start, 2, '.', '');
                    echo "<h3>Got results for $query in $end seconds</h3>";*/
                    echo_response($final_results, $type);
                ?>
        </div>
        <br/>
    </div>

<?php require "misc/footer.php"; ?>
