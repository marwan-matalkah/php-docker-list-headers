## Docker PHP web application that lists all request headers


#### How does it work?

```bash
# build the docker image
docker build -t php-docker-list-headers .

# run the docker container and map container's
# port 80 to host on port 8080
docker run -d -p 8080:80 php-docker-list-headers

# Browse the site e.g. http://127.0.0.1:8080 
# it will list request headers sent by browser, proxy server or tools
```
