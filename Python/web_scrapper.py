import requests
import random
import numpy
import time

def get_random_ua():
	with open("ua.txt") as f:
		lines=f.readlines()
        return lines[random.randint(1,101)][:-1]

def get_random_referer():
	with open("referer.txt") as f:
		lines=f.readlines()
        return lines[random.randint(1,256)][:-1]

if __name__=="__main__":
        print "========================================================================================\n"
	print "\t\t\t\tStarting Web_Scrapper\n"
        print "========================================================================================"
	with open("/usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt") as file:
		line=file.readlines()
		for i in range(len(line)):
			if (len(line[i])) > 0:
				user_agent=get_random_ua()
				referer=get_random_referer()
				headers={
					'Host':'10.10.10.122',
					'User-Agent':user_agent,
					'Accept':'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
					'Accept-Language':'en-US,en;q=0.5',
					'Accept-Encoding':'gzip, deflate',
					'Referer':referer,
					'DNT':'1',
					'Connection':'close',
					'Upgrade-Insecure-Requests':'1',
					}
				delays=[0,4,6,2,5,1,3,4]
				delay=numpy.random.choice(delays)
				time.sleep(delay)

				r1=requests.get('http://10.10.10.122/'+line[i],headers=headers).status_code
				if r1==200:
					print "Found Directory:"+line[i]
				r2=requests.get('http://10.10.10.122/'+line[i]+'.php',headers=headers).status_code
				if r2==200:
					print "Found File:"+line[i]+".php"
				r3=requests.get('http://10.10.10.122/'+line[i]+'.html',headers=headers).status_code
				if r3==200:
					print "Found File:"+line[i]+".html"
			else:
				break

		print "Scan Completed!"
