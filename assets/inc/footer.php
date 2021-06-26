        <footer>
            <!-- As usual the copyright symbol -->
            <p> &#169; Mohammed Alam 1/31/2020</p>

            <?php
                // outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.
                $filename = 'index.php';
                if (file_exists($filename)) {
                    echo "This page was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
                }
            ?>
        </footer>
    </body>
</html>