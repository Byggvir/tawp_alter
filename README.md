# TAWP Your IP
WordPress Plugin to show the age or time from today to another date 

This WordPress Plugin displays the IP-addresses a visitor sends to the server.

There are three interesting IP-addresses:

* the client address, $_SERVER(' HTTP_CLIENT_IP')
* the remote address,  $_SERVER(' REMOTE_ADDR')
* the IP-addr vor the client the reques is forwarded for, $_SERVER('HTTP_X_FORWARDED_FORUsage')

#Usage

Insert the shortcode [yourip] where a block of this three addresses should be places.  