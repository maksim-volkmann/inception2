FROM debian:stable

RUN apt update && apt install -y nginx openssl && apt clean

# Generate SSL Certificate
RUN mkdir -p /etc/nginx/ssl && \
	openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/nginx/ssl/nginx.key \
	-out /etc/nginx/ssl/nginx.crt \
	-subj "/C=US/ST=State/L=City/O=Organization/OU=OrgUnit/CN=localhost"

EXPOSE 443

# Copy NGINX default config
COPY default /etc/nginx/sites-available/default

CMD ["nginx", "-g", "daemon off;"]
