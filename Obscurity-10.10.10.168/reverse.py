import sys
filename = sys.argv[1]
plain = sys.argv[2]

fd1 = open(filename,"r")
enc = fd1.readlines()

fd2 = open(plain,"r")
plain = fd2.readlines()

limit = len(plain[0])

ret = ""
#print "[+]Bruteforcing key length"
for i in range(0,limit):
    y = chr(ord(enc[0][i])-ord(plain[0][i])%255) 
    ret+=y

print(ret)
