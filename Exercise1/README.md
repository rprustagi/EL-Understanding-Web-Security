# Exercise1
This exercise demonstrates the behaviour of a web browser when a website is accessed using HTTPS and SSL certificate returned by web server is not proper. The SSL certificate will have inappropriate information with respect to one or more of the following three items.
- *Website Name* : The website name returned by certificate is different from that entered by the user.
- *Validity period* : Certificate return by website is already expired or points to a period in the future.
- *Certificate Authority* : The certificate authority that generated the SSL certificate is not known to the web browser.

Below described checking invalid *website name* and *certificate authority*.

## Website Name
From command line, ping www.google.com and note down its ip address as shown in figure ??. At this time, it is 216.58.196.4. Open the firefox browser and enter the URL _https://216.58.196.4_. You should see a warning page as shown in figure *FF\_mismatch\_websitename.jpg*

Further, make an entry in the /etc/hosts file of client machine using this IP address mapping to _mywww.com_. An example is shown in the file *hosts*. To ensure that this name is resolved properly, use ping command to verify it (e.g. _ping -c4 mywww.com_) This should 4 responses to this name. In the firefox browser, enter the URL _https://mywww.com_. Again the web brwoser should show a warning page stating *mywww.com uses an invalid security certificate* and that this *The certificate is only valid for www.google.com*. This is shown in figure _FF-Spoof-Websitename.jpg_

##Certificate Authority
Generate a self signed certificate for a website (e.g. _mywww.com_)as per the steps described in the appendix of article, and deploy the same on your webserver. Modify your _/etc/hosts_ files to reflect the IP address of your web server instead of _216.58.196.4_ for your website _mywww.com_. Now enter the URL _https://mywww.com_ and web browser will show the warning for invalid certificate i.e. self signed certificate.


