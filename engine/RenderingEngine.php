<?php

	/**
	 *
	 */
	class RenderingEngine
	{

		function __construct()
		{
			// <section id="introduction" class="doc-section">
		}

		public function buildSectionElement(&$section)
		{
			$sectionHeader = "<section id='".$section['section_code']."' class='doc-section'>"."<h2 class='section-title'>".$section['section_heading']."</h2>";
			$sectionContent = "";

			if (!empty($section['section_body']))
			{
				$sectionContent = "<div class='section-block'>". $section['section_body'] . "</div>";
			}

			if (isset($section['subsections']))
			{
				for ($i = 0; $i < count($section['subsections']); $i++)
				{
					$sectionContent .= $this->buildSubSectionElement($section['subsections'][$i]);
				}
			}

			$sectionFooter = "</section>";
			$sectionElement = $sectionHeader . $sectionContent . $sectionFooter;
			return $sectionElement;
		}

		public function buildSubSectionElement(&$subsection)
		{
			$subsectionHeader = "<div id='".$subsection['sub_section_code']."' class='section-block'>" . "<h3 class='block-title'>" . $subsection['sub_section_heading'] . "</h3><br>";
			$subsectionFooter = "</div><br>";
			$subsectionElement = $subsectionHeader . $subsection['sub_section_body'] . $subsectionFooter;
			return $subsectionElement;
		}

		public function buildNavBar($sections)
		{
			$navHeader = "<div class='doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex'>
						<div id='doc-nav' class='doc-nav'>

								<nav id='doc-menu' class='nav doc-menu flex-column fixed sticky'>";
			$navBody = "";

			for ($i=0; $i < count($sections); $i++) {
				$navBody .= "<a class='nav-link scrollto' href='#". $sections[$i]['section_code'] ."'>". $sections[$i]['section_heading'] ."</a>";

                if (isset($sections[$i]['subsections']))
                {
                    $navBody .= "<nav class='doc-sub-menu nav flex-column'>";
                	for ($j=0; $j < count($sections[$i]['subsections']); $j++) {
					    $navBody .= "<a class='nav-link scrollto' href='#". $sections[$i]['subsections'][$j]['sub_section_code'] ."'>". $sections[$i]['subsections'][$j]['sub_section_heading'] ."</a>";
				    }
                    $navBody .= "</nav>";
                }
			}
			$navFooter = "</nav></div></div>";
            return ($navHeader . $navBody . $navFooter);
		}


	}

?>