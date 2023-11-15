StudentRecord
CREATE DATABASE StudentRecord;
```
USE StudentRecord;
```
CREATE TABLE Student (
    StudentID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    DateOfBirth DATE,
    Email VARCHAR(100),
    Phone VARCHAR(20),
    
);
```
CREATE TABLE Course (
    CourseID INT PRIMARY KEY,
    CourseName VARCHAR(100),
    Credits INT,
   
);
```
CREATE TABLE Instructor (
    InstructorID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Email VARCHAR(100),
    Phone VARCHAR(20),
   
);
```
CREATE TABLE Enrollment (
    EnrollmentID INT PRIMARY KEY,
    StudentID INT,
    CourseID INT,
    EnrollmentDate DATE,
    Grade VARCHAR(10),
    FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID)
);

INSERT INTO Student (StudentID, FirstName, LastName, DateOfBirth, Email, Phone)
VALUES (1, 'Sachal', 'Destance', '2000-01-01', 'Secahl.Destance@isolate.com', '1234567890');

INSERT INTO Course (CourseID, CourseName, Credits)
VALUES (101, 'Web Info.', 3);

INSERT INTO Instructor (InstructorID, FirstName, LastName, Email, Phone)
VALUES (1, 'Leonard', 'Reyes', 'primusr@example.com', '555-1234');

INSERT INTO Enrollment (EnrollmentID, StudentID, CourseID, EnrollmentDate, Grade)
VALUES (1, 1, 101, '2022-09-01', 'A');