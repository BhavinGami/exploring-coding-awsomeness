from tkinter import *
from tkinter import ttk
import cv2
import numpy as np
import os
import pickle
from PIL import Image
from datetime import datetime
from os import listdir
from os.path import isfile, join


def attendance(name):
    with open("attendance.csv", 'r+') as f:

        myDataList = f.readlines()
        nameList = []
        for line in myDataList:
            entry = line.split(',')
            nameList.append(entry[0])
        if name not in nameList:
            now = datetime.now()
            dt_string = now.strftime("%H:%M:%S")
            f.writelines(f'\n{name},{dt_string}')


class res:
    def samples(name):

        path1 = 'images/Test/' + str(name)
        moduleVal = 5
        minBlur = 500
        ##imgW=180
        ##imgH=120

        cap = cv2.VideoCapture(0)
        cap.set(3, 640)
        cap.set(4, 480)
        num = 0
        count = 0
        ctr = 0

        os.mkdir(path1)

        while True:

            ret, frame = cap.read()
            imgGray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
            if ctr % moduleVal == 0:
                cv2.imwrite(path1 + '/' + str(num) + ".jpg", imgGray)
                num += 1
            ctr += 1
            count += 1
            cv2.putText(imgGray, str(num), (60, 80), cv2.FONT_ITALIC, 2, (0, 255, 0), 3)
            cv2.imshow("img", imgGray)
            if cv2.waitKey(1) & count == 500:
                cv2.destroyAllWindows()
                break


    def trainer():
        print("udcbhdb")
        Image.LOAD_TRUNCATED_IMAGES = True
        label_id = {}
        current_id = 0
        x_train = []
        y_label = []
        face_cascade = cv2.CascadeClassifier("images/haarcascade_frontalface_default.xml")
        base_dir = os.path.dirname(os.path.abspath(__file__))
        image_dir = os.path.join(base_dir, "images/Test")
        for root, dir, files in os.walk(image_dir):
            for file in files:
                if file.endswith("jpg"):
                    path = os.path.join(root, file)
                    label = os.path.basename(os.path.dirname(path))
                    # print(label,path)
                    if not label in label_id:
                        label_id[label] = current_id
                        current_id += 1
                    id = label_id[label]
                    # print(label_id)
                    # y_lable.append(lable)
                    # x_train.append(path)
                    pil_image = Image.open(path).convert("L")
                    final_image = pil_image.resize((500, 500), Image.ANTIALIAS)
                    image_array = np.array(final_image, "uint8")
                    # print(image_array)
                    faces = face_cascade.detectMultiScale(image_array, 1.5, 5)

                    for (x, y, w, h) in faces:
                        roi = image_array[y:y + h, x:x + w]
                        x_train.append(roi)
                        y_label.append(id)
                        # print(x_train)
                        # print(y_label)

        with open("face_label.pickle", "wb") as f:
            pickle.dump(label_id, f)
        recognizer = cv2.face.LBPHFaceRecognizer_create()
        recognizer.train(x_train, np.array(y_label))
        recognizer.save("trainer.yml")
        print("Model Trained")




    def final():
        faceCascade = cv2.CascadeClassifier("images/haarcascade_frontalface_default.xml")

        recognizer = cv2.face.LBPHFaceRecognizer_create()
        recognizer.read("trainer.yml")

        label = {"person_name": 1}
        with open("face_label.pickle", 'rb') as f:
            og_label = pickle.load(f)
            label = {v: k for k, v in og_label.items()}

        cap = cv2.VideoCapture(0)
        cap.set(3, 640)
        cap.set(4, 480)

        while True:
            success, img = cap.read()
            imgGray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
            faces = faceCascade.detectMultiScale(imgGray, 1.5, 5)
            for (x, y, w, h) in faces:
                # print(x, y, w, h)
                roi_gray = imgGray[y:y + h, x:x + w]
                roi_color = img[y:y + h, x:x + w]

                id, conf = recognizer.predict(roi_gray)
                if conf >= 45:
                    print(conf)
                    print(label[id])
                    obj_name = label[id]
                    attendance(obj_name)
                    cv2.putText(imgGray, obj_name, (x, y), cv2.FONT_ITALIC, 0.9, (255, 0, 255), 2)

                    cv2.rectangle(imgGray, (x, y), (x + w, y + h), (255, 0, 0), 2)
                    cv2.rectangle(imgGray, (x, y - 35), (x, y), (255, 0, 0), cv2.FILLED)

                ##cv2.putText(imgGray, "face", (x, y), cv2.FONT_ITALIC, 0.7, (0, 0, 255), 2)
            cv2.imshow("face_detect", imgGray)
            if cv2.waitKey(1) & 0xFF == ord("q"):
                break





root = Tk()

root.geometry("1350x700+0+0")
root.title("Facial Recognition Attendance System")

title = Label(root, text="Facial Recognition Attendance System", bd=10, relief=GROOVE ,font = ("times new roman", 40, "bold"), bg='#3498DB', fg='black')
title.pack(side=TOP, fill=X)

name_var = StringVar()
id_var = StringVar()
mail_var = StringVar()
gender_var = StringVar()
contact_var = StringVar()
dob_var = StringVar()
address_var = StringVar()

frame1 =Frame(root, bd=4, relief=RIDGE, bg='#3498DB')
frame1.place(x=20, y=100, width=500, height=650)

frame2 =Frame(root, bd=4, relief=RIDGE, bg='#3498DB')
frame2.place(x=550, y=100, width=800, height=650)

frame1_title = Label(frame1, text="Fill the student details" ,font = ("times new roman", 30, "bold"), bg='#3498DB', fg='white')
frame1_title.grid(row=0, columnspan=2, pady=20)

name = Label(frame1, text="Name:" ,  font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
name.grid(row=1, column=0, pady=10, padx=20, sticky='w')

txt_name = Entry(frame1, textvariable = name_var, font = ("times new roman", 15, "bold"), bd=5, relief=GROOVE)
txt_name.grid(row=1, column=1, pady=10, padx=20, sticky='w')

id = Label(frame1, text="College ID:" ,font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
id.grid(row=2, column=0, pady=10, padx=20, sticky='w')

txt_id = Entry(frame1, textvariable = id_var,  font = ("times new roman", 15, "bold"), bd=5, relief=GROOVE)
txt_id.grid(row=2, column=1, pady=10, padx=20, sticky='w')

email = Label(frame1, text="E-mail:" ,font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
email.grid(row=3, column=0, pady=10, padx=20, sticky='w')

txt_email = Entry(frame1, textvariable = mail_var, font = ("times new roman", 15, "bold"), bd=5, relief=GROOVE)
txt_email.grid(row=3, column=1, pady=10, padx=20, sticky='w')

gender = Label(frame1, text="Gender:" ,font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
gender.grid(row=4, column=0, pady=10, padx=20, sticky='w')

combo_gender = ttk.Combobox(frame1, textvariable = gender_var, font = ("times new roman", 13, "bold"), state='readonly')
combo_gender['values'] = ('Male', 'Female', 'Other')
combo_gender.grid(row=4, column=1, pady=10, padx=20)

contact = Label(frame1, text="Contact No.:" ,font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
contact.grid(row=5, column=0, pady=10, padx=20, sticky='w')

txt_contact = Entry(frame1, textvariable = contact_var, font = ("times new roman", 15, "bold"), bd=5, relief=GROOVE)
txt_contact.grid(row=5, column=1, pady=10, padx=20, sticky='w')

dob = Label(frame1, text="D.O.B:" ,font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
dob.grid(row=6, column=0, pady=10, padx=20, sticky='w')

txt_dob = Entry(frame1, textvariable = dob_var, font = ("times new roman", 15, "bold"), bd=5, relief=GROOVE)
txt_dob.grid(row=6, column=1, pady=10, padx=20, sticky='w')

address = Label(frame1, text="Address:" ,font = ("times new roman", 20, "bold"), bg='#3498DB', fg='white')
address.grid(row=7, column=0, pady=10, padx=20, sticky='w')

txt_address = Text(frame1, width=30, height=4, font=("t", 10))
txt_address.grid(row=7, column=1, pady=10, padx=20, sticky='w')

btn_frame = Frame(frame1, bd = 3, relief=RIDGE, bg='white')
btn_frame.place(x=35, y=530, width=400, height=70)


Getbtn = Button(btn_frame, text="Get Samples", command= lambda :res.samples(txt_name.get()+" "+txt_id.get()))
Getbtn.grid(row=0, columnspan=2)

Getbtn1 = Button(btn_frame, text="Train Model", command=lambda :res.final())
Getbtn1.grid(row=4, columnspan=7)


root.mainloop()

