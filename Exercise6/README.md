# Exercise 6
## Use of Compression.

This exercise explains use of compression when getting web content from a web
server. For a given web page, access it without compression header
*Accept-Encoding: gzip*  and then with this header. The file *pictures.html*
has the size of 385 bytes and with compression, it becomes 153 bytes and only
153 bytes are downloaded on the web instead of 385 bytes.

\$ wget --header="Accept-Encoding: gzip" http://myweb.com/pictures.html

--2018-02-28 22:54:40--  http://myweb.com/pictures.html \
Resolving myweb.com... 10.211.55.9\
Connecting to myweb.com|10.211.55.9|:80... connected.\
HTTP request sent, awaiting response... 200 OK\
Length: 153 [text/html]\
Saving to: `pictures.html.1'

100%[================================================>] 153 --.-K/s   in 0s

2018-02-28 22:54:41 (8.58 MB/s) - `pictures.html.1' saved [153/153]

$ wget http://myweb.com/pictures.html

--2018-02-28 22:55:34--  http://myweb.com/pictures.html \
Resolving myweb.com... 10.211.55.9\
Connecting to myweb.com|10.211.55.9|:80... connected.\
HTTP request sent, awaiting response... 200 OK\
Length: 385 [text/html]\
Saving to: `pictures.html.2'

100%[================================================>] 385 --.-K/s in 0s

2018-02-28 22:55:34 (19.3 MB/s) - `pictures.html.2' saved [385/385]



