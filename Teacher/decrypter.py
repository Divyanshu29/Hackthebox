import hashlib
from Crypto.Cipher import AES
import random
import base64
from Crypto.Hash import SHA256

def decrypt(key,filename):
    chunksize=1
    with open(filename,"rb") as infile:
        lines=base64.b64decode(infile.read()[:-1])
        filesize=lines[:16]
        IV=lines[16:32]
        decrypter=AES.new(key,AES.MODE_CBC,IV)
        while True:
             chunk=lines[(16*(chunksize+1)):(16*(chunksize+2))]
             print (decrypter.decrypt(chunk))
             chunksize=chunksize+1

def getKey(password):
    hasher=SHA256.new(password.encode('utf-8'))
    return hasher.digest()

if __name__ == "__main__":
    key=getKey("sahay")
    decrypt(key,"enc.txt")
