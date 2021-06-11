import pandas as pd
import datetime
import smtplib
import sys

r_id=sys.argv[1]
message=str(sys.argv[2])
text=message+" This value is enter on website"
gmail_id='rathodsagar1362001@gmail.com'
gmail_pass='sagar2001@'

s=smtplib .SMTP('smtp.gmail.com',587)
s.starttls()
s.login(gmail_id,gmail_pass)
s.sendmail(gmail_id,r_id,text)
s.quit()



   