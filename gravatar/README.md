# FuelPHP Gravatar Package
### By [furley](http://furleydelphia.com/)

This is a package for FuelPHP that makes gravatar retrieval easier. Essentially this allows you to build the url of a gravatar based solely on an email address.  

## Installation

[1] drop the gravatar folder into your packages folder
[2] add gravatar to your config file `fuel/app/config/config.php`
	'packages'	=> array(
		'gravatar'
	),
[3] ???
[4] Profit

## Usage

Pass in an email address and this method will return the url of a gravatar if there is a gravatar associated with email address. Otherwise, it will return the url of the default gravatar.

	echo get_gravatar('test@test.com');

There is also an optional second parameter for modifying the defaults of this package. Options include the following:

	$options = array();
	$options['rating'] 	= 'X'; // maximum allowed rating. accepts: G | PG | R | X
	$options['size'] 	= 80; // size of image
	$options['image'] 	= 'http://www.gravatar.com/avatar/00000000000000000000000000000000'; // url of default image

	echo get_gravatar('test@test.com', $options);

Cheers.