# Exercise 2
This exercise explores the browser behaviour when it fetches an URL with HTTPS, and the
web content contains objected referred with HTTPS.
The mixed content can be passive content such as images, and active contents such as
javascripts.
This describes accessing 3 web pages corresponding to these. The embedded links contains
the hostname as *rprustagi.com" which should be replaced with your own website name which
is being tested for mixed content.

*pure.html*
For the embedded URL, the protocol is not explicitly specified and inherits the HTTP protocol from parent web page and thus is safe.

*mixed.html*
This contains an image which is explicitly accessed with HTTP. Thus when the parent web
page is accessed with HTTPS, browser will indicate the error w.r.t. insecure page.

*mixed-active.html*
This web page contains javascript, which is linked to a URL with HTTP. Since this is
active content, browser flags the error for such acrtive contents.
