FROM debian:stable

RUN apt update && apt install -y vsftpd && apt clean

# Add FTP configuration
COPY vsftpd.conf /etc/vsftpd.conf

# Ensure required directories exist
RUN mkdir -p /var/www/html && \
    mkdir -p /var/run/vsftpd/empty && \
    chmod 555 /var/run/vsftpd/empty

# Create a new FTP user with a unique UID and GID
RUN useradd -u 1001 -d /var/www/html ftpuser && \
    echo "ftpuser:ftppassword" | chpasswd && \
    chown -R ftpuser:ftpuser /var/www/html

# Ensure proper permissions for the FTP directory
RUN chmod -R 775 /var/www/html

EXPOSE 21 30000-30009

CMD ["vsftpd", "/etc/vsftpd.conf"]
