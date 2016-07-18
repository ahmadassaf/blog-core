<?php 

require('simpleCache.php');

class shareCalculator {

  private $hackernews_url;
  private $reddit_url;
  private $facebook_url;
  private $google_url;
  private $twitter_url;
  private $linkedin_url;
  private $buffer_url;
  private $stumpleupon_url;
  private $delicious_url;
  private $pinterest_url;

  private $link;
  private $raw_link;
  private $cache;
  private $total;

  public function __construct($link)
  {
    $this->hackernews_url  = 'http://api.thriftdb.com/api.hnsearch.com/items/_search?q=&filter[fields][url]=';
    $this->reddit_url      = 'http://www.reddit.com/api/info.json?url=';
    $this->facebook_url    = 'http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls=';
    $this->twitter_url     = 'http://urls.api.twitter.com/1/urls/count.json?url=';
    $this->linkedin_url    = 'http://www.linkedin.com/countserv/count/share?format=json&url=';
    $this->buffer_url      = 'https://api.bufferapp.com/1/links/shares.json?url=';
    $this->stumpleupon_url = 'http://www.stumbleupon.com/services/1.01/badge.getinfo?url=';
    $this->delicious_url   = 'http://feeds.delicious.com/v2/json/urlinfo/data?url=';
    $this->pinterest_url   = 'http://api.pinterest.com/v1/urls/count.json?url='; 
    
    $this->raw_link        = $link;
    $this->link            = urlencode($link);
    $this->cache           = new SimpleCache();
  }

  function build($services) {
    if($data = $this->cache->get_cache($this->link)){
      $decoded_data = json_decode($data);
      return $decoded_data;
    } else {  
        $result = array();
        if ($services) {
          foreach ($services as $service) {
            $result["services"][$service] = call_user_func_array(array($this, $service),array());
          }
        }
        if ($result["services"]) $result["total"] = array_sum(array_values($result["services"]));
      $this->cache->set_cache($this->link, json_encode($result));
      return $result;
    }
  }

function getCURLResult($query) {

  $curl = curl_init();
  curl_setopt_array($curl, array(
   CURLOPT_URL            => $query,
   CURLOPT_CONNECTTIMEOUT => 5,
   CURLOPT_TIMEOUT        => 5,
   CURLOPT_SSL_VERIFYPEER =>false,
   CURLOPT_FOLLOWLOCATION => 1,
   CURLOPT_FAILONERROR    => 1,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_USERAGENT      => 'Social Calculator'
   ));

  $phpObj = curl_exec($curl);
  curl_close($curl);

  if(!is_null($phpObj) && !empty($phpObj)){  
    return $phpObj;
  }
}

function reddit() {
  $json = json_decode($this->getCURLResult($this->reddit_url.$this->link)); 
  $counter = 0; 
  if($json) {
    foreach($json->data->children as $child) { 
      $counter += (int) $child->data->score; 
    }
    return $counter;
  }
}

function delicious() {
  $counter = 0; 
  $json = json_decode($this->getCURLResult($this->delicious_url.$this->link));
  if ($json) $counter =  $json[0]->total_posts;
  return $counter;
}

function buffer() { 
  $counter = 0; 
  $json = json_decode($this->getCURLResult($this->buffer_url.$this->link));
  if ($json) $counter = $json->shares;
  return $counter;
}

function twitter() {  
  $counter = 0;   
  $json = json_decode($this->getCURLResult($this->twitter_url.$this->link));
  if ($json) $counter = $json->count;
  return $counter;
}

function linkedin() {  
  $counter = 0;   
  $json = json_decode($this->getCURLResult($this->linkedin_url.$this->link));
  if ($json) $counter = $json->count;
  return $counter;
}

function stumbleupon() {
  $counter = 0;     
  $json = json_decode($this->getCURLResult($this->stumpleupon_url.$this->link));
  if($json && isset($json->result) && isset($json->result->views)) 
    $counter = $json->result->views;
  return $counter;
}

function pinterest() { 
  $counter = 0;    
  $resp = str_replace(array('(',')'), "", $this->getCURLResult($this->pinterest_url.$this->link));
  $json = json_decode(str_replace("receiveCount","",$resp));
  if($json) $counter = $json->count;
  return $counter;
}

function hackernews() {     
  $json = json_decode($this->getCURLResult($this->hackernews_url.$this->link));
  $counter = 0;
  if($json && isset($json->results)) {
    foreach($json->results as $story) {
      $counter++;
      if(isset($story->item) && isset($story->item->points)) {
        $counter = $counter + (int)$story->item->points;
      }
      if(isset($story->item) && isset($story->item->num_comments)) {
        $counter = $counter + (int)$story->item->num_comments;
      }
    }
  }
  return $counter;
}

function facebook() {
  $counter = 0;
  $json    = json_decode($this->getCURLResult($this->facebook_url.$this->link));
  if($json && isset($json[0])) $counter = $json[0]->total_count;
  return $counter;
} 

function google() {
  $counter = 0;
  $params = json_encode(array(
    'method' => "pos.plusones.get",
    'id'     => 'p',
    'params' => array(
      "nolog"   => true,
      "id"      => $this->raw_link,
      "source"  => "widget",
      "userId"  => "@viewer",
      "groupId" => "@self"
      ),
    "jsonrpc"    => "2.0",
    "key"        => "p",
    "apiVersion" => "v1"
    ));

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
  curl_setopt($curl, CURLOPT_URL, rtrim("https://clients6.google.com/rpc", '?&'));
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

  $phpObj = curl_exec($curl);
  curl_close($curl);

  if(!is_null($phpObj) && !empty($phpObj)){ 
    $item = json_decode($phpObj); 
    $counter = $item->result->metadata->globalCounts->count;
    return $counter;
  }
}
}
?>