from tkinter import *
import pymysql
window = Tk()
window.title("From Inserting into mysql")
window.geometry("500x300")
connect = pymysql.connect(host="localhost", user="root", password="", database="tkinter")
cursor = connect.cursor()
name = Label(window,text="name").place(x=30,y=50)
e1=Entry(window).place(x=80, y=50)

email = Label(window,text="email").place(x=30,y=90)
e2=Entry(window).place(x=80, y=90)

password = Label(window, text="password").place(x=30, y=130)
e3=Entry(window).place(x=95, y=130)

def savedata():
    name=e1.get()
    email=e2.get()
    password=e3.get()
    cursor.execute("insert into tkinter(name,email,password) values('"+name+"',"+email+","+password+")")
    connect.commit()
    print("Record Inserted")
btn=Button(window, text="Save Data", command=savedata).place(x=30, y=170)


window.mainloop()
