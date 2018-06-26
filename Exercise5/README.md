# Resource Inline.
## Resource inline of images.

In this exercise, examples are provided to include an image along with its
encoded content directly in the web page rather than getting the image with
external URL. The web page *_r-inline.html_* contains the code.
Here, instead of specify *src* attribute external URL, it is specified with
*data:image/jpg;base64*. 

To convert a given file e.g. *img-01.jpg* into *base64* encoding, use the following command\
*$ base64 -i img-01.jpg*\
This will output the based64 encoded value of contents of *img-01.jpg*  on
console. Insert this encoded values directly in the web page as done in
*r-inline.htm*, deploy the web page on web server and understand its working.

