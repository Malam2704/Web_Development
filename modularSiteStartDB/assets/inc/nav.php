                <nav class="subnav">
					<ol class="nav nav-list container-fluid nav-collapse collapse in">
						<li <?php echo (isset($page) && $page == "Home") ? 'class="active" ' :'' ?>>
							<a href="<?php echo $path; ?>index.php">Home</a></li>
						<li <?php echo (isset($page) && $page == "People") ? 'class="active" ' :'' ?>>
							<a href="<?php echo $path; ?>index.php">People</a></li>
						<li <?php echo (isset($page) && $page == "Tour") ? 'class="active" ' :'' ?>>
							<a href="<?php echo $path; ?>index.php">Tour</a></li>
					</ol>
				</nav><!-- end subnav -->
