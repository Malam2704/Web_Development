        <footer>
            <!-- As usual the copyright symbol -->
            <p> &#169; Mohammed Alam 1/31/2020</p>

            <a class='text-light px-2' href="https://www.linkedin.com/in/mohammed-a-9b14241b1/" target="_blank">
                <i class="layout-icon fab fa-linkedin"></i>
            </a>
            <a class='text-light px-2' href="https://github.com/Malam2704" target="_blank">
                <i class="layout-icon fab fa-github"></i>
            </a>
            <a class='text-light px-2' href="https://github.com/Malam2704" target="_blank">
                <i class="layout-icon fab fa-github"></i>
            </a>
            
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