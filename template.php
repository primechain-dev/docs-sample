<?php

	$page_code = (isset($_GET['uiid'])) ? $_GET['uiid'] : "";
	include_once 'header.php';
	include_once __DIR__.'/engine/DBEngine.php';
	include_once __DIR__.'/engine/RenderingEngine.php';

	$dbEngine = new DBEngine();
	$renderingEngine = new RenderingEngine();
?>
<div class="doc-body row">
	<div class="doc-content col-md-9 col-12 order-1">
		<div class="content-inner">
			<!--<section id="section_id" class="doc-section">
				<h2 class="section-title">Section Heading</h2>
				<div class="section-block">
				</div>			
				<div id="sub_section_id" class="section-block">
					<h3 class="block-title">Sub-section Heading</h3>
				</div>
			</section>--><!--//doc-section-->

			<?php

				if (!empty($page_code))
				{
                    //echo $page_code;
					$sections = $dbEngine->getSectionsWithSubSections($page_code);
					$sectionCodesArray = array();
					for ($i = 0; $i < count($sections); $i++)
					{
						echo $renderingEngine->buildSectionElement($sections[$i]);						
					}

					$navElement = $renderingEngine->buildNavBar($sections);
                    unset($sections);
				}
			?>

		</div><!--//content-inner-->
	</div><!--//doc-content-->

	<?php
        echo isset($navElement) ? $navElement : "";
	?>

</div><!--//doc-body-->

<?php
	include_once 'footer.php';
?>