<?php

	include_once(__DIR__."/../configs/"."config.php");

	/**
	 *  DATABASE ENGINE
	 */
	class DBEngine
	{
		private $dbo;

		function __construct()
		{
			$this->dbo = new PDO("mysql:host=".DBParams::DB_HOST_NAME.";dbname=".DBParams::DATABASES['primechain-api-docs'], DBParams::DB_USER_NAME, DBParams::DB_PASSWORD);
		}

		public function getSectionsWithSubSections($page_code)
		{
			$sections_array = $this->getSections($page_code);
			$section_codes_array = array();

			for ($i = 0; $i < count($sections_array); $i++)
			{
				$section_codes_array[] = $sections_array[$i]['section_code'];
			}

			$subsections_array = $this->getSubSections($section_codes_array);
			$this->mergeSectionsAndSubsections($sections_array, $subsections_array);

			return $sections_array;
		}

		public function getSections($page_code)
		{
			$sql = "SELECT section_code, section_heading, section_body FROM sections_details WHERE page_code=:page_code";
			$stmt = $this->dbo->prepare($sql);
			$stmt->bindParam(':page_code', $page_code);

			if (!$stmt->execute()) {
				throw new Exception("SQL Error. Please check logs!", 1);
			}

			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $rows;
		}

		public function getSubSections($section_codes_array)
		{

			$sql = "SELECT section_code, sub_section_code, sub_section_heading, sub_section_body FROM sub_sections_details WHERE section_code IN (";
			$temp = array();
			for ($i = 0; $i < count($section_codes_array); $i++)
			{
				$temp[] = ":section_code".$i;
			}

			$sql .= implode(",", $temp) . ")";

			$stmt = $this->dbo->prepare($sql);

			for ($i = 0; $i < count($section_codes_array); $i++)
			{
				$stmt->bindValue(':section_code'.$i, $section_codes_array[$i]);
			}

			if (!$stmt->execute()) {
				throw new Exception("SQL Error. Please check logs!", 1);
			}

			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$result_count = count($result);
			$result_new = array();

			/*for ($i = 0; $i < $result_count; $i++)
			{
				if (isset($result[$result[$i]['section_code']])) {
					$result[$result[$i]['section_code']][] = $result[$i];
				} else {
					$result[$result[$i]['section_code']] = array($result[$i]);
				}
				unset($result[$i]);
			}*/

			for ($i = 0; $i < $result_count; $i++)
			{
				if (isset($result_new[$result[$i]['section_code']])) {
					$result_new[$result[$i]['section_code']][] = $result[$i];
				} else {
					$result_new[$result[$i]['section_code']] = array($result[$i]);
				}
				unset($result[$i]);
			}

			return $result_new;
		}


		public function mergeSectionsAndSubsections(&$sections_array, &$subsections_array)
		{
			// echo json_encode($subsections_array, JSON_PRETTY_PRINT);
			$sections_count = count($sections_array);
			for ($i=0; $i < $sections_count; $i++) {
				if (isset($subsections_array[$sections_array[$i]['section_code']])) {
					$sections_array[$i]['subsections'] = $subsections_array[$sections_array[$i]['section_code']];
					unset($subsections_array[$sections_array[$i]['section_code']]);
				}
			}
		}
	}

?>