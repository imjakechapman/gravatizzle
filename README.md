Gravatizzle
===========

stupid simple gravatar raw url reciever for statamic cms


# Installing

1. Download the zip file (or clone via git) and unzip it or clone the repo into /_add-ons/.
2. Ensure the folder name is gravatizzle.
3. Set your defaults in pi.gravatizzle.php, then fire at will.


# Usage
Get raw url. Example:
    
   	{{ gravatizzle:get_gravatar email='jake@imjakechapman.com' size='120' }}


Get raw url for use in image tag. Example:
    
    <img src="{{ gravatizzle:get_gravatar email='jake@imjakechapman.com' size='120' }}" />
    
    
Get SSL served raw url Example:
    
    {{ gravatizzle:get_secure_gravatar email='jake@imjakechapman.com' size='120' }}
    
    
Get SSL served raw url for use in image tag. Example:
    
    <img src="{{ gravatizzle:get_secure_gravatar email='jake@imjakechapman.com' size='120' }}" />