Gravatizzle
===========

stupid simple gravatar raw url reciever for statamic cms


# Installing

1. Download the zip file (or clone via git) and unzip it or clone the repo into /_add-ons/.
2. Ensure the folder name is gravatizzle.
3. Set your defaults in pi.gravatizzle.php, then fire at will.


# Usage

Set defaults for 'default icon' and 'size' ( do this in both functions get_gravatar & get_secure_gravatar )
    $size = $this->fetch_param('size', 40);
    $default = "http://www.gravatar.com/avatar/00000000000000000000000000000000";

Get raw url. Example:
    
   	{{ gravatizzle:get_gravatar email='jake@imjakechapman.com' size='120' }}
    
    returns http://www.gravatar.com/avatar/80c432b19710638b2e8c758eb7a5d1e0?d=http://www.gravatar.com/avatar/00000000000000000000000000000000&s=120

 
Get SSL served raw url Example:
    
    {{ gravatizzle:get_secure_gravatar email='jake@imjakechapman.com' size='120' }}
    
    returns https://secure.gravatar.com/avatar/80c432b19710638b2e8c758eb7a5d1e0?d=http://www.gravatar.com/avatar/00000000000000000000000000000000&s=120
