

use IWT_DATABASE;

--Customer--
CREATE TABLE Customers(
	Customer_Id int not null,
	Fname varchar(30),
	Lname varchar(30),
	DOB date,
	Contacts char(10),
	Email varchar(30),
	Country varchar(50),
	Address varchar(150),
	constraint Customer_Pk primary key (Customer_Id)
)

INSERT INTO Customers(
	Customer_Id,
	Fname,
	Lname,
	DOB,
	Contacts,
	Email,
	Country
)
VALUES
(0001,'Shane','Wickramasinghe','1997-03-15','0775553161','ShaneW@gmail.com','Sri Lanka'),
(0002,'Kate','Watson','2000-06-12','0773275486','KateWatsonAU@gmail.com','Australia'),
(0003,'Paul','Adams','1992-02-22','0775456273','AdamsPaul@gmail.com','Germany'),
(0004,'Ryan','Cooper','1987-11-15','0777777777','RyanCoop@gmail.com','America'),
(0005,'Yujin','Kim','1997-05-09','0772347175','YuginKim@gmail.com','Japan')

--Customer_Login--
CREATE TABLE Customer_Login(
	Customer_Id int,
	Username varchar(10),
	Password varchar(15),
	constraint Customer_Login_Pk primary key (Customer_Id,Username),
	foreign key (Customer_Id) references Customers(Customer_Id)
)

INSERT INTO Customer_Login(
	Customer_Id,
	Username,
	Password
)
VALUES
(0001,'ShaneW','ShaneW123!'),
(0002,'KateWatts','Kates456@'),
(0003,'AdamsPaul','PaulAdams98*'),
(0004,'RyanCooper','RyanC99!'),
(0005,'KimYujin','Kmj123@')


--Hotel--
CREATE TABLE Hotels(
	Hotel_Id int not null,
	Hotel_name varchar(30),
	Hotel_Address varchar(80),
	Contacts char(10),
	constraint Hotel_Pk primary key (Hotel_Id)
)

INSERT INTO Hotels(
	Hotel_Id,
	Hotel_name,
	Hotel_Address,
	Contacts
)
values
(0001,'Galle Face Hotel','2, Galle Rd, Colombo','0775553161'),
(0002,'Kingsbury Hotel','48, Janadipathi Mw, Colombo 1','0773275486'),
(0003,'Jungle Beach','27th Kilometre Post, Pulmoddai Rd, Kuchchaveli','0775456273'),
(0004,'Ciinamon Grand','77 Galle Rd, Colombo','0777777777'),
(0005,'cinnamon lakeside','115, Sir Chittampalam A Gardiner Mawatha','0772347175')

--Tour Guide--
CREATE TABLE TourGuides(
	Guide_Id int,
	Guide_name varchar(30),
	Contacts char(10),
	Guide_NIC varchar(15),
	Price_Per_Day int,
	constraint TourGuide_Pk primary key (Guide_Id)
)


INSERT INTO TourGuides(
	Guide_Id,
	Guide_name,
	Contacts,
	Price_Per_Day ,
	Guide_NIC
)
values
(0001,'Dilsan Perera','0775463161',30,'199732987456'),
(0002,'Pubudu Hettiarachchi','0778622618',35,'199544562853'),
(0003,'Savinu Wickramasinghe','0777838241',25,'198782783746'),
(0004,'Hesara Ananda','0774433721',30,'200064862497'),
(0005,'Chaminda Abayasiri','0774212188',32,'199732479126')


--Driver-- 
CREATE TABLE Drivers(
	Driver_Id int not null,
	Driver_name varchar(30),
	Driver_NIC varchar(15),
	Contacts char(10),
	Price_Per_Day int,
	constraint Driver_Pk primary key (Driver_Id)
)

INSERT INTO Drivers(
	Driver_Id,
	Driver_name,
	Driver_NIC,
	Contacts,
	Price_Per_Day
)
values
(0001,'Amila Perera','199732479126','0775464161',30),
(0002,'Mohomed Raja','199682841987','0775622668',30),
(0003,'Chamara Halangoda','199717531535','0777535641',30),
(0004,'Piyal Jayarathne','199526235636','0774437721',30),
(0005,'Priyantha Mahaulpatha','199154848487','0774612158',30)

--Vehical--
CREATE TABLE Vehicals(
	Vehical_Id int not null,
	Vehical_type varchar(25),
	License_No varchar(15),
	Price_Per_Day int,
	Owner_Name varchar(60),
	Owner_contact varchar(10),
	constraint Vehical_Pk primary key (Vehical_Id)
)

INSERT INTO Vehicals(
	Vehical_Id,
	Vehical_type,
	License_No,
	Price_Per_Day,
	Owner_Name,
	Owner_contact
)
VALUES
(0001,'SUV','QL 9904',1.5,'Upul Pathirana','0775456273'),
(0002,'Minivan','TI 1497',2.5,'Sirinaga Liyanage','0775638218'),
(0003,'Van','EV 1120',2,'Krishantha Senevirathne','0779412229'),
(0004,'Sports Car','RL 4504',1.5,'Shivakumar Udayashankar','0775936389'),
(0005,'Jeep','PI 2934',1.5,'Rukshan Wijewardhana','0775478573')


--Rooms--
CREATE TABLE Rooms(
	Room_Id int not null,
	Room_No varchar(5),
	Room_type varchar(20),
	Hotel_Id int,
	Room_price int,
	constraint Rooms_Pk primary key (Room_Id),
	constraint Hotel_Room_Fk foreign key (Hotel_Id) references Hotels(Hotel_Id))

INSERT INTO Rooms(
	Room_Id,
	Room_No,
	Room_type,
	Hotel_Id,
	Room_price
)
VALUES
(0001,'35','Single',0001,75),
(0002,'36','Double',0001,80),
(0003,'18','Single',0002,75),
(0004,'45','Triple',0002,80),
(0005,'12','Double',0004,70)


--Tables--
CREATE TABLE Tables(
	Hotel_Id int not null,
	Table_No varchar(3) not null,
	Table_Price int,
	constraint Tables_Pk primary key (Hotel_Id,Table_No),
	constraint Hotel_Table_Fk foreign key (Hotel_Id) references Hotels(Hotel_Id)
)

INSERT INTO Tables(
	Hotel_Id,
	Table_No,
	Table_Price
)
VALUES
(0001,'02',10),
(0003,'03',14),
(0004,'04',15),
(0004,'10',12),
(0005,'08',10)


--Invoice--
CREATE TABLE Invoices(
	Invoice_no int not null,
	Customer_Id int,
	Invoice_Status varchar(10),
	Invoice_Description varchar(150),
	Invoice_total int,
	constraint Invoice_Pk primary key (Invoice_No),
	constraint Customer_Invoice_Fk foreign key (Customer_Id) references Customers(Customer_Id)
)

INSERT INTO Invoices(
	Invoice_No,
	Customer_Id,
	Invoice_Status,
	Invoice_Description,
	Invoice_total
)
VALUES
(0001,0002,'Paid','Hotel- 0001, 1 single room,2 days, including meals',320),
(0002,0003,'Paid','Hotel- 0003, 1 double room,5 days, 1 guest, including meals',280),
(0003,0004,'Paid','Hotel- 0002, 1 triple room,10 days, 4 guests, including meals',420),
(0004,0001,'Paid','Hotel- 0001, 1 single room,2 days, including meals',200),
(0005,0001,'NotPaid','Hotel- 0005, 1 single room,1 day',280)

--Guest--
CREATE TABLE Guests(
	Customer_Id int not null,
	Guest_Name varchar(30),
	Age varchar(5),
	constraint Guest_Pk primary key (Customer_Id,Guest_Name),
	constraint Customer_Guest_Fk foreign key (Customer_Id) references Customers(Customer_Id)
)


INSERT INTO Guests(
	Customer_Id,
	Guest_Name,
	Age
)
VALUES
(0003,'Henry Adams','30'),
(0004,'Mary Cooper','31'),
(0004,'Adam Cooper','14'),
(0004,'George Cooper','10'),
(0002,'Anthony Watson','08')



--Review--
CREATE TABLE Reviews(
	Reveiw_Id int not null,
	Customer_Id int not null,
	Review_Date date,
	Review_Details varchar(150),
	constraint Reviews_Pk primary key (Reveiw_Id,Customer_Id),
	constraint Customer_Reviews_Fk foreign key (Customer_Id) references Customers(Customer_Id)
)

INSERT INTO Reviews(
	Reveiw_Id,
	Customer_Id,
	Review_Date,
	Review_Details
)
Values
(0001,0003,'2020-09-12','Execelent website, Very easy to use, Versatile'),
(0002,0004,'2019-03-02','Respose quickly and efficient customer service'),
(0003,0001,'2018-12-01','Easy to reserve online as all options of reservation are available. Moreover its very convinient when choosing dine in options for vegetarians'),
(0004,0005,'2021-07-19','The Fast booking website is great place to find affordable lodging for tourists'),
(0005,0002,'2019-03-02','Execelent website, Very easy to use, Versatile')

--Admins--
CREATE TABLE Admins(
	Admin_Id int not null,
	Admin_Name varchar(30),
	Admin_title varchar(30),
	Admin_Contact char(10),
	constraint Admins_Pk primary key (Admin_Id)
)

INSERT INTO Admins(
	Admin_Id,
	Admin_Name,
	Admin_title,
	Admin_Contact
)
VALUES
(0001,'Nadun Kumar','senior administrator','0775383218'),
(0002,'Trevin Adam','Support administrator','0775636218'),
(0003,'Janith Darshan','Domain administrator','0775658218'),
(0004,'Niduni Gomes','Database administrator','0775638418'),
(0005,'Gayan Sampath','Support administrator','0775638248')


CREATE TABLE Admins_Login(
	Admin_Id int not null,
	Username varchar(20),
	Password varchar(20),
	constraint Admins_Login_Pk primary key (Admin_Id,Username),
	foreign key (Admin_Id) references Admins(Admin_Id)
)

INSERT INTO Admins_Login(
	Admin_Id,
	Username,
	Password
)
VALUES
(0001,'Admin0001','Admin0001PW'),
(0002,'Admin0002','Admin0002PW'),
(0003,'Admin0003','Admin0003PW'),
(0004,'Admin0004','Admin0004PW'),
(0005,'Admin0005','Admin0005PW')

--Customer-Rooms reservations--
CREATE TABLE Customer_Rooms(
	Reservation_No int not null,
	Customer_Id int not null,
	Room_Id int not null,
	Checkin_Time datetime,
	Checkout_Time datetime,
	constraint Customer_Rooms_Pk primary key (Reservation_No),
	constraint Customer_Rooms_Fk foreign key (Customer_Id) references Customers(Customer_Id),
	constraint Room_Fk foreign key (Room_Id) references Rooms(Room_Id)
)

INSERT INTO Customer_Rooms(
	Reservation_No,
	Customer_Id,
	Room_Id,
	Checkin_Time ,
	Checkout_Time 
)
VALUES
(0001,0001,0003,'2018-11-29 09:00:00','2018-12-01 09:00:00'),
(0002,0003,0004,'2019-01-09 10:00:00','2019-01-10 10:00:00'),
(0003,0003,0004,'2019-02-20 09:00:00','2019-02-22 09:00:00'),
(0004,0005,0005,'2020-11-29 09:00:00','2020-12-01 09:00:00'),
(0005,0001,0001,'2020-02-19 12:00:00','2020-02-21 12:00:00')



--Customer-Table reservations--
CREATE TABLE Customer_Table(
	Reservation_No int not null,
	Customer_Id int not null,
	Hotel_Id int not null,
	Table_No varchar(3) not null,
	Reservation_type varchar(10),
	Meal_Type varchar(15),
	Checkin_Date date,
	constraint Customer_Table_Pk primary key (Reservation_No),
	foreign key (Customer_Id) references Customers(Customer_Id),
	foreign key (Hotel_Id,Table_No) references Tables(Hotel_Id,Table_No)
)

INSERT INTO Customer_Table(
	Reservation_No,
	Customer_Id,
	Hotel_Id,
	Table_No,
	Reservation_type,
	Meal_Type,
	Checkin_Date 
)
VALUES
(0006,0001,0003,'03','Dinner','Vegetarian','2018-11-29 19:00:00'),
(0007,0003,0003,'03','Lunch','Non-Vegetarian','2019-01-09 13:00:00'),
(0008,0003,0004,'10','Dinner','Vegetarian','2019-02-20 19:00:00'),
(0009,0005,0004,'04','Dinner','Non-Vegetarian','2020-11-29 19:30:00'),
(0010,0001,0005,'08','Lunch','Vegetarian','2020-02-19 12:00:00')

--Customer-TourGuides reservations--
CREATE TABLE Customer_TourGuides(
	Reservation_No int not null,
	Customer_Id int not null,
	Guide_Id int not null,
	Reservation_Date datetime,
	Reservertion_Period varchar(10),
	constraint Customer_Guides_Pk primary key (Reservation_No),
	foreign key (Customer_Id) references Customers(Customer_Id),
	foreign key (Guide_Id) references TourGuides(Guide_Id)
)

INSERT INTO Customer_TourGuides(
	Reservation_No,
	Customer_Id,
	Guide_Id,
	Reservation_Date,
	Reservertion_Period
)
VALUES
(0011,0001,0001,'2019-02-20 15:00:00','5 hours'),
(0012,0004,0003,'2020-01-20 12:00:00','4 hours'),
(0013,0005,0002,'2020-11-29 12:00:00','4 hours'),
(0014,0002,0005,'2019-02-15 10:00:00','5 hours'),
(0015,0003,0003,'2018-02-20 09:00:00','6 hours')


--Customer-Drivers reservations--
CREATE TABLE Customer_Drivers(
	Reservation_No int not null,
	Customer_Id int not null,
	Driver_Id int not null,
	Reservation_Date datetime,
	Reservertion_Period  varchar(10),
	constraint Customer_Drivers_Pk primary key (Reservation_No),
	foreign key (Customer_Id) references Customers(Customer_Id),
	foreign key (Driver_Id) references Drivers(Driver_Id)
)

INSERT INTO Customer_Drivers(
	Reservation_No,
	Customer_Id,
	Driver_Id,
	Reservation_Date,
	Reservertion_Period
)
VALUES
(0016,0001,0001,'2019-02-20 15:00:00','5 hours'),
(0017,0004,0003,'2020-01-20 12:00:00','4 hours'),
(0018,0005,0004,'2019-10-19 12:00:00','4 hours'),
(0019,0002,0005,'2019-02-15 10:00:00','5 hours'),
(0020,0003,0002,'2018-02-20 09:00:00','6 hours')


--Customer-Drivers reservations--
CREATE TABLE Customer_Vehical(
	Reservation_No int not null,
	Customer_Id int not null,
	Vehical_Id int not null,
	Reservation_Date datetime,
	Reservertion_Period  varchar(10),
	constraint Customer_Vahical_Pk primary key (Reservation_No),
	foreign key (Customer_Id) references Customers(Customer_Id),
	foreign key (Vehical_Id) references Vehicals(Vehical_Id)
)


INSERT INTO Customer_Vehical(
	Reservation_No,
	Customer_Id,
	Vehical_Id,
	Reservation_Date,
	Reservertion_Period
)
VALUES
(0021,0001,0001,'2019-02-20 15:00:00','5 hours'),
(0022,0004,0003,'2020-01-20 12:00:00','4 hours'),
(0023,0005,0002,'2020-11-29 12:00:00','4 hours'),
(0024,0002,0005,'2019-02-15 10:00:00','5 hours'),
(0025,0003,0003,'2018-02-20 09:00:00','6 hours')
