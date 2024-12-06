#!/bin/bash

# Set defaults for environment variables
FTP_USER_NAME=${FTP_USER_NAME:-www-data}
FTP_USER_PASS=${FTP_USER_PASS:-ftppassword}
FTP_USER_HOME=${FTP_USER_HOME:-/var/www/html}

# Ensure the home directory exists and set permissions
mkdir -p "$FTP_USER_HOME"
chown -R www-data:www-data "$FTP_USER_HOME"
chmod -R 775 "$FTP_USER_HOME"

# Set the password for the existing user
echo "$FTP_USER_NAME:$FTP_USER_PASS" | chpasswd

# Ensure secure_chroot_dir exists
mkdir -p /var/run/vsftpd/empty
chmod 555 /var/run/vsftpd/empty

# Start vsftpd
/usr/sbin/vsftpd /etc/vsftpd.conf
