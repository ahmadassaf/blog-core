<?php 

class buttonBuilder {

	private $hackernews_url;
	private $instapaper_url;
	private $reddit_url;
	private $pocket_url;
	private $facebook_url;
	private $google_url;
	private $twitter_url;
	private $linkedin_url;
	private $buffer_url;
	private $stumpleupon_url;
	private $delicious_url;
	private $pinterest_url;

	private $link;
	private $link_title;
	private $link_description;
	private $link_tumbnail;
	private $referrer;

	public function __construct($referrer)
	{
		$this->hackernews_url  = 'http://news.ycombinator.com/submitlink?';
		$this->instapaper_url  = 'http://www.instapaper.com/hello2?';
		$this->reddit_url      = 'http://www.reddit.com/submit?';
		$this->pocket_url      = 'https://getpocket.com/save?';
		$this->facebook_url    = 'https://www.facebook.com/sharer/sharer.php?';
		$this->google_url      = 'https://plus.google.com/share?url=';
		$this->twitter_url     = 'https://twitter.com/intent/tweet?text=';
		$this->linkedin_url    = 'http://www.linkedin.com/shareArticle?';
		$this->buffer_url      = 'http://bufferapp.com/add?';
		$this->stumpleupon_url = 'http://www.stumbleupon.com/submit?';
		$this->delicious_url   = 'http://del.icio.us/post?url=';
		$this->pinterest_url   = 'http://pinterest.com/pin/create/button/?url=';
		
		$this->referrer        = $referrer;
	}

	function build($services) {
		$result = array();
		if ($services) {
			foreach ($services as $service) {
				$result[$service] = call_user_func_array(array($this, $service),array());
			}
		}
		return $result;
	}

	function instapaper() {
		return array(
			"name"        => "Instapaper",
			"link"        => $this->instapaper_url.http_build_query(array(
				'url'         => $this->link,
				'title'       => $this->link_title,
				'description' => $this->link_description)
		));
	}

	function hackernews() {
		return array(
			"name" => "Hacker News",
			"link" => $this->hackernews_url.http_build_query(array(
				'op' => 'basic',
				'u'  => $this->link,
				't'  => $this->link_title)
		));
	}

	function reddit() {
		return array(
			"name" =>"Reddit",
			"link" => $this->reddit_url.http_build_query(array(
				'url'   => $this->link,
				'title' => $this->link_title)
		));
	}

	function pocket() {
		return array(
			"name" =>"Pocket",
			"link" => $this->pocket_url.http_build_query(array(
				'url'   => $this->link,
				'title' => $this->link_title)
		));
	}

	function facebook() {
		return array(
			"name" =>"Facebook",
			"link" => $this->facebook_url.http_build_query(array(
				'url'   => $this->link,
				'title' => $this->link_title,
				'image' => $this->link_thumbnail)
		));
	}

	function google() {
		return array(
			"name" =>"Google+",
			"link" => $this->google_url.$this->link);
	}

	function twitter() {
		return array(
			"name" =>"Twitter",
			"link" => $this->twitter_url.rawurlencode(html_entity_decode(
				$this->link_title, ENT_COMPAT, 'UTF-8')).'&'.
				http_build_query(array(
					'url' => $this->link,
					'via' => $this->referrer)
			));
	}

	function linkedin() {
		return array(
			"name" =>"Linkedin",
			"link" => $this->linkedin_url.http_build_query(array(
				'mini'    => 'true',
				'url'     => $this->link,
				'title'   => $this->link_title,
				'summary' => $this->link_description)
		));
	}

	function buffer() {
		return array(
			"name" =>"Buffer",
			"link" => $this->buffer_url.http_build_query(array(
				'url' => $this->link,
				'title' => $this->link_title)
		 ));
	}

	function stumbleupon() {
		return array(
			"name" =>"Stumbleupon",
			"link" => $this->stumbleupon_url.http_build_query(array(
				'url'   => $this->link,
				'title' => $this->link_title)
		 ));
	}

	function delicious() {
		return array(
			"name" =>"Delicious",
			"link" => $this->delicious_url.$this->link);
	}

	function pinterest() {
		return array(
			"name" =>"Pinterest",
			"link" => $this->pinterest_url.http_build_query(array(
				'url'         => $this->link,
				'media'       => $this->link_thumbnail, 
				'description' => $this->link_title)
		 ));
	}

	/* Variables Getters and Setters */

	function set_link($link){
		$this->link = $link;
	}
	
	function get_link() {
		return $this->link;
	}

	function get_link_thumbnail() {
		return $this->link_thumbnail;
	}

	function set_link_thumbnail($link_thumbnail){
		$this->link_thumbnail = $link_thumbnail;
	}

	function set_link_description($link_description){
		$this->link_description = $link_description;
	}

	function get_link_description() {
		return $this->link_description;
	}

	function set_link_title($link_title) {
		$this->link_title = $link_title;
	}

	function get_link_title() {
		return $this->set_link_title;
	}
}

?>