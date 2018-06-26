# Exercise 4
## Domain Sharding

In this exercise, a large number embedded URLs belonnging to same website
host/domain name is divided into multiple sub-domains. This enables browser to
establish multiple concurrent connections. 

The file *_pictures.html_* contains 10 images belonging to same website name
myweb.com as that of parent URL *pictures.html* are split into two sub-domains
as _img1.myweb.com_ and _img2.myweb.com_. The file domshard.html contains the
html code corresponding these two sub-domains. Both these files should be
placed in your web server and then access both these pages separately and
notice how different persistent connections are made to these 3 website names
though having same IP address.

The file _hosts_ contains entries for same IP addresses as that of *myweb.com*
corresponding to hostname *img1.myweb.com* and *img2.myweb.com*. This entry
should be made in the */etc/hosts* file of the local machine.

