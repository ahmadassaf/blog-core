<?php

require_once ('alchemy.php');
require_once ('zemanta.php');
require_once ('semantic-document.php');

class semanticDocumentBuilder {

	public function __construct()
	{
		$this->result             = array();
		$this->cache              = new SimpleCache();		
	}

	function build($url,$text,$title,$tags) {

		if ($document_encoded_result = $this->cache->get_cache('Semanticdocument:'.sha1($url))){
			$document = json_decode($document_encoded_result);
		} else {
			$document          = new semanticDocument();
			$alchemyExtractor  = new alchemy();
			$zemantaExtractor  = new zemanta();

			$document->setURL($url);

			//Set the main proprties of the document
			$document->setTitle($title);
			$document->setText ($text);

			$document->setLanguage("english");
			$document->setLanguageCode("en");

			//retreive the related Zemanta information
			$zemantaExtractor->build(sha1($url),$document->getTitle(),$document->getText());

			$document->setZemantaPosts($zemantaExtractor->getRelatedPosts());
			$document->setKeywords($tags);	
		}

		$this->cache->set_cache('Semanticdocument:'.sha1($url), json_encode($document));
		return $document;

	}
}

?>