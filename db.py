import sqlite3
conn = sqlite3.connect('student.db')

c = conn.cursor()
id="A"
name="A hostel"
loc ="1st hostel near rajput"
charge = 5000
mess_type= "Kerala_mess"
m_strength=150
c_strength=100
p_r=4
a_id="154"
i_name="subbarao"
#c.execute("""CREATE TABLE mess_pt(
#   Mess_id text,
#   Mess_name text,
#   Mess_loaction text,
#   Mess_charge integer,
#   Mess_type text,
#   Max_strength integer,
#   Current_strength integer,
#   Previous_month_rating integer,
#   Admin_Id text,
#   Incharge_name text
#    )""")
#c.execute("INSERT INTO student VALUES ('B180424CS','Alaparthi','Varunsai','D','Ih','9494698496','varunsai8496@gmail.com','varunsai_b180423cs@nitc.ac.in','79788930363','varun',5000)")
#c.execute("INSERT INTO mess_pt VALUES(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j)",{'a':id,'b':name,'c':loc,'d':charge,'e':mess_type,'f':m_strength,'g':c_strength,'h':p_r,'i':a_id,'j':i_name})
##c.execute("SELECT Max_strength FROM mess_pt WHERE Mess_id='A'")
#bg=c.fetchone()
#s=bg[0]+1
#print(s)
Rno='B180423CS'
year=2019
mon=3
p_am=2000
m_c=5000
e_c=200
fine=0
t_c=0
a_p=5000
n_d=0
a_da="3-05-2019"
#c.execute(""" CREATE TABLE Student_Due_Details(
#    Rno text,
#    Year interger,
#    Month integer,
#    Prepaid_amount integer,
#    Mess_charge integer,
#    Extra_charge integer,
#    Fine integer,
#    TotalCharge integer,
#    AmountPaid integer,
#    NetDue integer,
#    Amount_Paid_Date text
#)""")

#c.execute(""" CREATE TABLE Feedback(
#    Rno text,
#    Date text,
#    DayType text,
#    Mess_ID text,
#    Rating Real,
#    Comments text
#)""")
#c.execute("INSERT INTO Student_Due_Details_p VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k)",{'a':Rno,'b':year,'c':mon,'d':p_am,'e':m_c,'f':e_c,'g':fine,'h':t_c,'i':a_p,'j':n_d,'k':a_da})
#c.execute("SELECT * FROM ")
#changemess
new_mess='c'
s_id='B180423CS'
c.execute("SELECT NetDue FROM Student_Due_Details_p")
bg=c.fetchone()

if(int(bg[0])==0):
    c.execute("UPDATE student SET mess_id=? WHERE id=?",(new_mess,s_id))

c.execute("SELECT * FROM student")
print(c.fetchone())
conn.commit()
conn.close()