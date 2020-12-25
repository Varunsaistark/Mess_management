import sqlite3
conn = sqlite3.connect('student.db')

c = conn.cursor()

#c.execute("""CREATE TABLE student(
    # id text,
    # f_name text,
    # l_name text,
    # mess_id text,
    # Hostel_name text,
    # P_phonenumber text,
    # personal_mail text,
    # nitc_mailid text,
    # s_phonenumber text,
    # password text,
    # extras integer
    #)""")
#c.execute("INSERT INTO student VALUES ('B180424CS','Alaparthi','Varunsai','D','Ih','9494698496','varunsai8496@gmail.com','varunsai_b180423cs@nitc.ac.in','79788930363','varun',5000)")
c.execute("SELECT * FROM student WHERE f_name='Alaparthi'")
print(c.fetchall())
conn.commit()
conn.close()