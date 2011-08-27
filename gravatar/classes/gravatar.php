<?php
/**
*
* @package	Gravatar
* @version	1.0
* @author	Dan Kruse
* @link		http://furleydelphia.com
* @access	public
* @param	string	
* @param	array
* @return	string
* 
*/
class Gravatar {

	public function get_gravatar( $email,  $options = null ) {
		//set default
		$config = array(
			'email'		=> md5($email),
			'rating'	=> 'G',
			'size'		=> 80,
			'image'		=> 'http://www.gravatar.com/avatar/00000000000000000000000000000000' //default image
		);
		
		// overwrite defaults
		if($options !== null){
			foreach($options as $key => $val){
				if(isset($config[$key])){
					$config[$key] = $val;
				}
			}		
		}

		// build url
		$url = "http://gravatar.com/avatar.php?gravatar_id=".$config['email']."&amp;rating=".$config['rating']."&amp;size=".$config['size']."&amp;default=".$config['image'];
		
		//return url
		return $url;
	}

}

/* end of file gravatar.php */
