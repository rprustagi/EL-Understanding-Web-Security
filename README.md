# EL-Understanding-Web-Security
The example and code snippets correspond to the article "Understanding Web Security" 
in ACCS Journal "Advanced Communications and Computing" volume 02, issue 02, 2018

## ACCS-EL-Web-Security.pdf
  The PDF version of the article as it appeared in the ACCS journal.
  
The article contains 6 hands on exercises 
## Exercise 1: Invalid SSL Certificate
The details of exercises corresponding to generating and deploying a self signed certificte which will be treated as invalid with the browser.
Similarly, accessing other websites with HTTPS using hostname which is different from that contained website certificate.

## Exercise 2: Mixed Content
These exercises exposes the issues faced when a user accesses a web page on HTTPS which contains references to embedded links with HTTP. 
As HTTP content can be hijaced and modified, user may not get actual content and thus a browser generally shows a warning when it contains mixed content.

## Exercise 3: Secure Cookies
These exercises provides the detils on how to make secure cookies i.e. cookies which are applicable only when accessed using HTTPS.

## Exercise 4: HSTS Support
These exercises enables the user to *HTTP Strict Transport Security* header. This ensures that even if a user enters http://somehostname, 
the access is always done using HTTPS.

## Exercise 5: Content Security Policy
These exercise provides details on how to implement security policies that are applicable to web content e.g. from where scripts can be loaded,
the place from where image can be downloaded etc.

## Exercise 6:MITM Attack
These exercises describes on how a gullible user can be subjected to *Man In The Middle (MITM)* attack.
