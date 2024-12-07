#!/bin/sh

# Read secrets from Docker secrets
FTP_USER=$(cat /run/secrets/ftp_user)
FTP_PSW=$(cat /run/secrets/ftp_psw)

# Add the FTP user with the password
adduser "$FTP_USER" --disabled-password
echo "$FTP_USER:$FTP_PSW" | chpasswd

# Start vsftpd
exec /usr/sbin/vsftpd /etc/vsftpd.conf
