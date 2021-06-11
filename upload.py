import cv2
import time
import os
import geocoder
from urllib.request import urlopen
import pyrebase
import mysql.connector

conn=mysql.connector.connect(host="localhost",port=3307,user="root",password="",database="imageDB" )
db=conn.cursor()
with open("C:\\third_eye\\third_eye.txt","r") as f:
	name=f.readline()
	f.close()
	name=str(name.split("@")[0])
db.execute("CREATE TABLE IF NOT EXISTS "+name+" (`id` INT NOT NULL AUTO_INCREMENT,`image` LONGBLOB NOT NULL,`time` VARCHAR(255) NOT NULL,PRIMARY KEY (`id`))")
path=r"D:\opencv\photos"
l=os.listdir(path)
for i in range(0,len(l)):
    time=str(l[i].split(".")[0])
    with open(path+"\\"+l[i],"rb") as f:
        r=f.read()
    sql="INSERT INTO "+name+" (image,time) VALUES(%s,%s)"
    args=(r,time)
    db.execute(sql,args)
    conn.commit()
    os.remove("D:\opencv\photos\\"+l[i])
