<?php require_once 'header.php'; ?>

<!-- Any Additional Header Tags Place Here -->

	<?php require_once 'galleriffic-header.php'; ?>

</head>
<body>

<?php require_once 'body_header.php'; ?>

	<div id="content">
		<div id="center_content">
			<!-- Main Content Goes Here -->

			<!-- Galleriffic -->
			<div id="page" class="hidden-xs wrapper-96">
				<h3> Some of our Most Recent Work </h3>

					<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">

						<li>
							<a class="thumb" name="catherine01" href="img/ourwork/mostrecent/m_catherine1.jpg" title="A cool contermporary house on Catherine Street.  Featuring James McCoy hand-made furniture and John Warren photography.">
								<img src="img/ourwork/mostrecent/tb_catherine1.jpg" alt="House on Catherine #1" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Cool Contemporary House on Catherine Street</div>
								<div class="image-desc">Featuring James McCoy hand-made furniture and John Warren photography.  This house has been sold!</div>
								<div class="download"><a href="img/ourwork/mostrecent/m_catherine1.jpg" title="Cool Contemporary House on Catherine Street" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="catherine02" href="img/ourwork/mostrecent/m_catherine2.jpg" title="Another Angle of cool contemporary house on Catherine Street">
								<img src="img/ourwork/mostrecent/tb_catherine2.jpg" alt="House on Catherine #1" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Alternate Angle of a Cool Contemporary House</div>
								<div class="image-desc">Featuring James McCoy hand-made furniture and John Warren photography.  This house has been sold!</div>
								<div class="download"><a href="img/ourwork/mostrecent/m_catherine2.jpg" title="Cool Contemporary House on Catherine Street" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="mccallum02" href="img/ourwork/mostrecent/m_mccallum3.jpg" title="Living Room on McCallum Street">
								<img src="img/ourwork/mostrecent/tb_mccallum3.jpg" alt="McCallum Living Room" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Living Room on McCallum Street</div>
								<div class="image-desc"></div>
								<div class="download"><a href="img/ourwork/mostrecent/lg_mccallum3.jpg" title="Living Room on McCallum Street" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="mccallum02" href="img/ourwork/mostrecent/m_mccallum4.jpg" title="Dining Room on McCallum Street">
								<img src="img/ourwork/mostrecent/tb_mccallum4.jpg" alt="Dining Room on McCallum Street" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Dining Room on McCallum Street</div>
								<div class="image-desc"></div>
								<div class="download"><a href="img/ourwork/mostrecent/lg_mccallum4.jpg" title="Dining Room on McCallum Street" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="mccallum02" href="img/ourwork/mostrecent/m_mccallum2.jpg" title="Bedroom with Bunny Theme on McCallum Street">
								<img src="img/ourwork/mostrecent/tb_mccallum2.jpg" alt="Bedroom with Bunny Theme on McCallum Street" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Bedroom with Bunny Theme on McCallum Street</div>
								<div class="image-desc"></div>
								<div class="download"><a href="img/ourwork/mostrecent/lg_mccallum2.jpg" title="Bedroom with Bunny Theme on McCallum Street" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="mccallum02" href="img/ourwork/mostrecent/m_mccallum5.jpg" title="Master Bedroom on McCallum Street">
								<img src="img/ourwork/mostrecent/tb_mccallum5.jpg" alt="Master Bedroom on McCallum Street" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Master Bedroom on McCallum Street</div>
								<div class="image-desc"></div>
								<div class="download"><a href="img/ourwork/mostrecent/lg_mccallum5.jpg" title="Master Bedroom on McCallum Street" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="mccallum02" href="img/ourwork/mostrecent/m_carpenter1.jpg" title="Living Room on Carpenter Lane">
								<img src="img/ourwork/mostrecent/tb_carpenter1.jpg" alt="Living Room on Carpenter Lane" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Living Room on Carpenter Lane</div>
								<div class="image-desc"></div>
								<div class="download"><a href="img/ourwork/mostrecent/lg_carpenter1.jpg" title="Living Room on Carpenter Lane" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>

						<li>
							<a class="thumb" name="mccallum02" href="img/ourwork/mostrecent/m_westview1.jpg" title="Living Room on Westview Drive">
								<img src="img/ourwork/mostrecent/tb_westview1.jpg" alt="Living Room on Westview Drive" />
				           	</a>
				            <div class="caption">
				           		<div class="image-title">Living Room on Westview Drive</div>
								<div class="image-desc"></div>
								<div class="download"><a href="img/ourwork/mostrecent/lg_westview1.jpg" title="Living Room on Westview Drive" rel="mostrecent" >Show Full</a></div>
							</div>
						</li>
					</ul>
					</div>

					<div id="gallery" class="content">
						<div id="controls" class="controls"></div>

						<div class="slideshow-container">
							<div id="loading" class="loader"></div>
							<div id="slideshow" class="slideshow"></div>
						</div>

						<div id="caption" class="caption-container"></div>
					</div>
			</div>

			<!-- Gallery for XS -->

			<div class="visible-xs-block min_gallery">
				<h3> Recent Work </h3>
						</div>

		</div>
	</div>

	<script>

		$(".thumbs li").each( function () {

			var title = $(this).children(".caption").children(".image-title").html();
			var large = $(this).children(".caption").children(".download").children("a").attr("href");
			var medium = $(this).children(".thumb").attr("href");

			$(".min_gallery").append("<a href=\"" + large + "\" title=\"" + title + "\"><img src=\"" + medium + "\" alt=\"" + title + "\" /></a>");
        });

	</script>

	<?php require_once 'galleriffic-footer.php'; ?>
	<?php require_once 'footer.php'; ?>


