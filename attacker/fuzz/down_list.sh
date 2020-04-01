#! /bin/bash

# secList

if [ ! -d sec_list  ];then
  mkdir sec_list;
  cd sec_list;
else
  cd sec_list;
fi
url="https://github.com/danielmiessler/SecLists/tree/master/Fuzzing/XSS"

strings=(
    "XSS-BruteLogic"
    "XSS-Bypass-Strings-BruteLogic"
    "XSS-Cheat-Sheet-PortSwigger"
    "XSS-Jhaddix"
    "XSS-RSNAKE"
    "XSS-Somdev"
    "XSS-Vectors-Mario"
    "XSS-With-Context-Jhaddix"
    "xss-without-parentheses-semi-colons-portswigger"
)

for i in "${strings[@]}"; do
	wget ${url}/${i}.txt;
done
