FROM debian:stable

RUN apt update && apt install -y nginx && apt clean

COPY default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]
