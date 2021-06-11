import cv2
import time
import os
import geocoder
from urllib.request import urlopen
import pyrebase
import mysql.connector
face_cascade = cv2.CascadeClassifier(os.path.join(cv2.data.haarcascades,'haarcascade_frontalface_default.xml'))
cap = cv2.VideoCapture(0,cv2.CAP_DSHOW)

faces=[]
while len(faces)==0:
	_, img = cap.read()
	if img is not None:
		gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
		faces = face_cascade.detectMultiScale(gray, 1.1, 4)
	else:
		print("empty frame")
	for (x,y,w,h) in faces:
		cv2.rectangle(img, (x,y), (x+w,y+h), (255,0,0), 2)

		cv2.imshow('img', img)
		t = time.strftime("%Y-%m-%d_%H-%M-%S")

		print("image "+t+" saved")
		file = 'D:\\opencv\\photos\\'+t+'.jpg'
		cv2.imwrite(file, img) 
	
	if len(faces)!=0:
		break
		
cap.release()
try:
	urlopen("https://www.google.com",timeout=1)
	os.system('python upload.py')
except:
	pass
	