<nav>
		<ul>
			<li><a class="menu" href=<?php echo 'acceuil.php?ID='.$_GET['ID']; ?>>Home</a></li>
			<li><a class="menu" href="#">Cloud System</a>
				<ul>
				<li><button class="new butP">New Project</button></li>
					<li><a class="list" href="">Folder1</a></li>
					<li><a class="list" href="">Folder2</a></li>
					<li><a class="list" href="">Folder3</a></li>
				</ul>
			</li>
			<li><a class="menu" href="">Console</a></li>
			<li><a class="menu" <?php echo 'href=function.php?ID='.$_SESSION['ID'].'&func=default'; ?>>Functions</a>
				<ul>
					<li><button class="new butF">New Function</button></li>
					<li><a class="list" href="">Folder1</a></li>
					<li><a class="list" href="">Folder2</a></li>
					<li><a class="list" href="">Folder3</a></li>
				</ul>
			</li>
			<li><a class="menu" href="">Administration</a></li>
		</ul>
</nav>