<?php
class Plugin_gravatizzle extends Plugin {

  var $meta = array(
    'name'       => 'Gravatizzle',
    'version'    => '0.1',
    'author'     => 'Jake Chapman',
    'author_url' => 'http://www.imjakechapman.com'
  );
  
  
  /**
  *
  * Stupid simple gravatar raw url reciever.
  * @param $email: the email you'd like the attached gravatar url from (eg. email='jake@imjakechapman.com' )
  * @param (optional) $size: the size of the avatar you want returned. Defaults to 40 if not set (eg. size='120')
  * @return url: The url of the request. (eg. http://www.gravatar.com/avatar/80c432b19710638b2e8c758eb7a5d1e0?d=http://www.gravatar.com/avatar/00000000000000000000000000000000&s=120)
  **/
  public function get_gravatar()
  {
  	$email = $this->fetch_param('email');
  	$size = $this->fetch_param('size', 40);
  	$default = "http://www.gravatar.com/avatar/00000000000000000000000000000000";
  	
  	$gravatar_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
  	
  	return $gravatar_url;
  }
  
  
  /**
  * Need to serve via SSL?
  * Stupid simple gravatar raw url reciever.
  * ex. {{ gravatizzle:get_secure_gravatar email="jake@imjakechapman.com" size="120" }}
  * @param $email: the email you'd like the attached gravatar url from (eg. email='jake@imjakechapman.com' )
  * @param (optional) $size: the size of the avatar you want returned. Defaults to 40 if not set (eg. size='120')
  * @return url: The url of the request. (eg. https://secure.gravatar.com/avatar/80c432b19710638b2e8c758eb7a5d1e0?d=http://www.gravatar.com/avatar/00000000000000000000000000000000&s=120)
  **/
  public function get_secure_gravatar()
  {
	  $email = $this->fetch_param('email');
	  $size = $this->fetch_param('size', 40);
	  $default = "https://secure.gravatar.com/avatar/00000000000000000000000000000000";
  	
	  $secure_gravatar_url = "https://secure.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
  	
	  return $secure_gravatar_url;
  }
  
}